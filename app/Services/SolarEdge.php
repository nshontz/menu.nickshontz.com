<?php

namespace App\Services;

use App\Models\Dinner;
use App\Models\SolarProductionDay;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use RuntimeException;

class SolarEdge
{
    private $siteId = null;
    private $baseUrl = null;
    private $apiKey = null;


    public function __construct(string $siteId, string $apiKey, $baseUrl = null)
    {
        $this->siteId = $siteId;
        $this->apiKey = $apiKey;
        $this->baseUrl = $baseUrl ?? 'https://monitoringapi.solaredge.com/site';

    }

    private function buildUrl($path, $params)
    {
        $params['api_key'] = $this->apiKey;

        return $this->baseUrl . '/' . $this->siteId . '/' . $path . "?" . http_build_query($params);
    }

    private function httpRequest(string $url, bool $clearCache = false, int $cacheTimeout = 1): mixed
    {
        if ($clearCache) {
            Cache::forget($url);
        }

        $cachedResponse = Cache::get($url);
        if ($cachedResponse !== null) {
            return $cachedResponse->body;
        }

        $response = \Httpful\Request::get($url)
            ->expectsJson()
            ->send();

        // Error responses are not cached so the next request retries the API.
        if ($response->hasErrors()) {
            $message = 'SolarEdge API request failed with HTTP ' . $response->code;
            Log::error($message, [
                'path' => parse_url($url, PHP_URL_PATH),
                'body' => $response->raw_body,
            ]);
            throw new RuntimeException($message);
        }

        Cache::put($url, $response, Carbon::now()->addHours($cacheTimeout));

        return $response->body;
    }

    public function energy(Carbon $startDate, $clearCache = false, $days = 7)
    {
        $solarData = $this->httpRequest($this->buildUrl('energy', [
            'timeUnit' => 'DAY',
            'startDate' => $startDate->format('Y-m-d'),
            'endDate' => $startDate->clone()->addDays($days)->format('Y-m-d'),
        ]), $clearCache);

        $unit = $solarData?->energy->unit;
        $measuredBy = $solarData?->energy?->measuredBy ?? 'unknown';

        return collect($solarData?->energy->values)->map(function ($energy) use ($unit, $measuredBy) {
            $production = null;
            $day = Carbon::parse($energy->date);
            if ($energy->value) {
                $production = SolarProductionDay::firstOrNew(['date' => $day->format('Y-m-d')]);
                $production->value = $energy->value;
                $production->unit = $unit;
                $production->measured_by = $measuredBy;

                if (!$day->isToday()) {
                    $production->save();
                }
            }
            return $production;
        })->filter();
    }


    public function powerDetails(Carbon $startDate, $clearCache = false)
    {
        $url = $this->buildUrl('powerDetails', [
            'meters' => collect(['Production', 'Consumption', 'SelfConsumption', 'FeedIn', 'Purchased'])->implode(','),
            'endTime' => $startDate->format('Y-m-d h:m:s'),
            'startTime' => $startDate->subDay(7)->format('Y-m-d h:m:s'),
        ]);
        $solarData = $this->httpRequest($url, $clearCache);
        return $solarData?->energy;
    }

    public function energyDetails(Carbon $startDate, $clearCache = false)
    {
        $url = $this->buildUrl('energyDetails', [
            'timeUnit' => 'DAY',
            'meters' => collect(['Production', 'Consumption', 'SelfConsumption', 'FeedIn', 'Purchased'])->implode(','),
            'endTime' => $startDate->format('Y-m-d h:m:s'),
            'startTime' => $startDate->subDay(7)->format('Y-m-d h:m:s'),
        ]);
        $solarData = $this->httpRequest($url);
        return $solarData?->energyDetails;
    }

    public function getMaxDailyGeneration()
    {
        return SolarProductionDay::orderBy('value', 'desc')->get()->first()?->value;
    }

    public function benefits($clearCache = false)
    {
        $benefits = $this->httpRequest($this->buildUrl('envBenefits', [
            'systemUnits' => 'Imperial'
        ]), $clearCache);

        return [
            'benefits' => $benefits?->envBenefits
        ];
    }
}
