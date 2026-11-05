<?php

namespace App\Http\Controllers;

use App\Models\Dinner;
use App\Models\GatheredData;
use App\Models\SolarProductionDay;
use App\Services\AnyList;
use App\Services\DinnerService;
use App\Services\SolarEdge;
use App\Services\Weather;
use Carbon\Carbon;
use Google\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $anyList, $solarEdge, $weather, $startDate, $days;
    private bool $forceRefresh = false;

    public function __construct()
    {
        $this->solarEdge = new SolarEdge(config('dashboard.solaredge.site_id'), config('dashboard.solaredge.api_key'));
        $this->anyList = new AnyList(config('dashboard.anylist_code'));
        $location = collect(explode(',', config('dashboard.location')));
        $this->weather = new Weather($location->first(), $location->last());
        $this->startDate = Carbon::now('America/Denver')->startOfWeek();
        $this->days = 7;
    }

    public function home(Request $request)
    {

        Artisan::call('dinner:protein-check');

        if ($request->filled('days')) {
            $this->days = $request->days;
        }
        if ($request->filled('start_date')) {
            $this->startDate = Carbon::parse($request->start_date);
        }

        if ($request->filled('force_refresh') && $request->force_refresh == 1) {
            $this->forceRefresh = true;
        }

        $dinnerList = collect();
        $solar = collect();
        $weatherData = collect();
        $solarBenefits = ['benefits' => null];

        try {
            $dinnerList = $this->anyList->fetchDinnerList($this->forceRefresh);
        } catch (Exception $e) {
            Log::error($e->getMessage(), $e->getTrace());
        }
        try {
            $solar = $this->solarEdge->energy($this->startDate, $this->forceRefresh, $this->days);
        } catch (Exception $e) {
            Log::error($e->getMessage(), $e->getTrace());
        }
        try {
            $weatherData = $this->weather->forecast($this->startDate, $this->forceRefresh);
        } catch (Exception $e) {
            Log::error($e->getMessage(), $e->getTrace());
        }
        try {
            $solarBenefits = $this->solarEdge->benefits();
        } catch (Exception $e) {
            Log::error($e->getMessage(), $e->getTrace());
        }
        $days = collect();

        for ($i = 0; $i < $this->days; $i++) {

            $day = clone($this->startDate);
            $day = $day->addDays($i);

            $dayData = (object)[
                'date' => $day->format('c'),
                'ts' => $day->format('U'),
                'date_display' => $day->format('l M jS'),
            ];

            $dayData->dinner = $dinnerList->filter(function ($dinner) use ($day) {
                return $dinner->date->format('Y-m-d') == $day->format('Y-m-d');
            })->first();

            $dayData->weather = $weatherData->filter(function ($weatherDay) use ($day) {
                return
                    Carbon::parse($weatherDay->day)->format('Y-m-d') ==
                    $day->format('Y-m-d');
            })->first();

            $dayData->solar = $solar->filter(function ($solarData) use ($day) {
                return
                    Carbon::parse($solarData->date)->format('Y-m-d') ==
                    $day->format('Y-m-d');
            })->first();

            $days->push($dayData);
        }

        return response()->json([
            'updated' => Carbon::now(),
            'current_weather' => $this->weather->current($this->forceRefresh),
            'solar_benefits' => $solarBenefits,
            'solar_this_month' => SolarProductionDay::orderBy('date')->where('date', '>=', Carbon::now()->startOfMonth())->get()->pluck('value')->sum(),
            'solar_daily_max' => $this->solarEdge->getMaxDailyGeneration(),
            'days' => $days,
        ]);
    }

    public function dinner(Request $request, $uid)
    {
        $validatedData = $request->validate([
            'complete' => ['nullable', 'boolean']
        ]);


        $dinner = Dinner::where('uid', $uid)->first();
        $dinner->complete = $validatedData['complete'] ? Carbon::now() : null;
        $dinner->save();

        return $dinner;
    }

    public function dinnerStats(Request $request)
    {
        $dinnerFrequency = DinnerService::freqency();

        $dinnerRecommendations = DinnerService::recommendations();

        $proteinFrequency = DinnerService::proteinFrequency();

        $vegetarianFrequency = DinnerService::vegetarianFrequency();


        $solarReport = SolarProductionDay::select([
            DB::raw("concat(to_char(date, 'yyyy-mm'),'-01') as month"),
            DB::raw("concat(sum(value) / 1000000) as generated_value")
        ])
            ->groupBy(DB::raw("to_char(date, 'yyyy-mm')"))
            ->orderBy(DB::raw("to_char(date, 'yyyy-mm')"), 'desc')
            ->limit(12)
            ->get();


        // Recipe stats
        $totalDinners = Dinner::count();
        $dinnersWithRecipes = Dinner::whereNotNull('recipe_id')->count();
        $recipeCount = \App\Models\Recipe::count();

        return response()->json([
            'dates' => $dinnerFrequency->first()->only(['created_at_min', 'created_at_max']),
            'energy_report' => $solarReport->map(function ($month) {
                $monthData = $month->only(['month', 'generated_value']);
                $monthData['month_label'] = Carbon::parse($monthData['month'])->format('M');
                return $monthData;
            }),
            'dinner_frequency' => $dinnerFrequency->map->only(['title', 'freq']),
            'protein_frequency' => $proteinFrequency,
            'dinner_recommendations' => $dinnerRecommendations,
            'vegetarian_frequency' => $vegetarianFrequency,
            'recipe_stats' => [
                'total_recipes' => $recipeCount,
                'dinners_with_recipes' => $dinnersWithRecipes,
                'total_dinners' => $totalDinners,
                'coverage_percentage' => $totalDinners > 0 ? round(($dinnersWithRecipes / $totalDinners) * 100, 1) : 0,
            ],
        ]);
    }

    public function gather(Request $request, $platform)
    {
        $platform = strtolower($platform);

        Log::debug($platform, $request->all());

        $gatheredData = new GatheredData();
        $gatheredData->platform = $platform;
        $gatheredData->data = json_encode($request->all());
        $gatheredData->save();

        return response()->json(['success' => true]);
    }

    public function dinnerList(Request $request)
    {
        $dinners = DinnerService::allDinners();
        $recommendations = DinnerService::recommendations();

        return response()->json([
            'dinners' => $dinners,
            'recommendations' => $recommendations
        ]);
    }

}
