<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\IngredientTag;
use Illuminate\Database\Seeder;

class ClassifiedIngredientDataSeeder extends Seeder
{
    /**
     * Seed classified ingredients with tags
     *
     * This seeder was auto-generated from production data
     * Total ingredients: 914
     */
    public function run(): void
    {
        $this->command->info('Seeding 914 pre-classified ingredients...');

        // Get all tags
        $tags = IngredientTag::all()->keyBy('slug');

        // Ingredient data
        $ingredients = array(
            0 =>
                array(
                    'name' => ')',
                    'category' => NULL,
                ),
            1 =>
                array(
                    'name' => '1 stick unsalted butter',
                    'category' => NULL,
                ),
            2 =>
                array(
                    'name' => '1 tablespoon chives',
                    'category' => NULL,
                ),
            3 =>
                array(
                    'name' => '1 tablespoon parsley',
                    'category' => NULL,
                ),
            4 =>
                array(
                    'name' => '1.4 lb small potatoes )',
                    'category' => NULL,
                ),
            5 =>
                array(
                    'name' => '1/2-inch cubed pumpkin from about 1 1/2 pounds unpeeled pumpkin',
                    'category' => NULL,
                ),
            6 =>
                array(
                    'name' => '1/2 teaspoon sage ',
                    'category' => NULL,
                ),
            7 =>
                array(
                    'name' => '1/2 teaspoon thyme',
                    'category' => NULL,
                ),
            8 =>
                array(
                    'name' => '1/3 cup freshly Parmesan',
                    'category' => NULL,
                ),
            9 =>
                array(
                    'name' => '14- ounce can tomatoes with juice',
                    'category' => NULL,
                ),
            10 =>
                array(
                    'name' => '15- ounce can fire tomatoes',
                    'category' => NULL,
                ),
            11 =>
                array(
                    'name' => '15- ounce can red beans and',
                    'category' => NULL,
                ),
            12 =>
                array(
                    'name' => '1  tsp black pepper ground',
                    'category' => NULL,
                ),
            13 =>
                array(
                    'name' => '1 and 1/3 cups  warm water ',
                    'category' => NULL,
                ),
            14 =>
                array(
                    'name' => '1½ cup rice vinegar',
                    'category' => NULL,
                ),
            15 =>
                array(
                    'name' => '1½ pounds boneless skinless',
                    'category' => NULL,
                ),
            16 =>
                array(
                    'name' => '1½ teaspoons Italian seasoning',
                    'category' => NULL,
                ),
            17 =>
                array(
                    'name' => '1½ teaspoons freshly ground black pepper',
                    'category' => NULL,
                ),
            18 =>
                array(
                    'name' => '1½ pounds boneless skinless chicken thighs',
                    'category' => NULL,
                ),
            19 =>
                array(
                    'name' => '2 - 2.4lb medium potatoes',
                    'category' => NULL,
                ),
            20 =>
                array(
                    'name' => '2 tbsp unsalted butter',
                    'category' => NULL,
                ),
            21 =>
                array(
                    'name' => '2 and 1/4 teaspoons  instant or active-dry yeast ',
                    'category' => NULL,
                ),
            22 =>
                array(
                    'name' => '2½ Tbsp doubanjiang',
                    'category' => NULL,
                ),
            23 =>
                array(
                    'name' => '2½ cups pineapple or 1 can of pineapple rings and   ',
                    'category' => NULL,
                ),
            24 =>
                array(
                    'name' => '3-4 garlic cloves',
                    'category' => NULL,
                ),
            25 =>
                array(
                    'name' => '3-inch cinnamon sticks',
                    'category' => NULL,
                ),
            26 =>
                array(
                    'name' => '3/4–1 pound cheese *',
                    'category' => NULL,
                ),
            27 =>
                array(
                    'name' => '350g Shortcut Pasta )',
                    'category' => NULL,
                ),
            28 =>
                array(
                    'name' => '3 and 1/2 cups  all-purpose flour  plus more for hands and work surface',
                    'category' => NULL,
                ),
            29 =>
                array(
                    'name' => '4- ounce can green chiles',
                    'category' => NULL,
                ),
            30 =>
                array(
                    'name' => '4.4oz Sun Dried Tomatoes',
                    'category' => NULL,
                ),
            31 =>
                array(
                    'name' => '5.3oz Mascarpone',
                    'category' => NULL,
                ),
            32 =>
                array(
                    'name' => '500g White Onions',
                    'category' => NULL,
                ),
            33 =>
                array(
                    'name' => '6- ounce can tomato paste',
                    'category' => NULL,
                ),
            34 =>
                array(
                    'name' => '60ml Olive Oil',
                    'category' => NULL,
                ),
            35 =>
                array(
                    'name' => '8- ounce can tomato sauce',
                    'category' => NULL,
                ),
            36 =>
                array(
                    'name' => 'Asian Pear )',
                    'category' => NULL,
                ),
            37 =>
                array(
                    'name' => 'Balsamic Glaze',
                    'category' => NULL,
                ),
            38 =>
                array(
                    'name' => 'Bolognese sauce',
                    'category' => NULL,
                ),
            39 =>
                array(
                    'name' => 'Cheddar',
                    'category' => NULL,
                ),
            40 =>
                array(
                    'name' => 'Cheddar or Manchego cheese',
                    'category' => NULL,
                ),
            41 =>
                array(
                    'name' => 'Chinkiang vinegar or balsamic vinegar',
                    'category' => NULL,
                ),
            42 =>
                array(
                    'name' => 'Country-style pork ribs*',
                    'category' => NULL,
                ),
            43 =>
                array(
                    'name' => 'Crystal hot sauce',
                    'category' => NULL,
                ),
            44 =>
                array(
                    'name' => 'Dijon mustard',
                    'category' => NULL,
                ),
            45 =>
                array(
                    'name' => 'EACH: Salt',
                    'category' => NULL,
                ),
            46 =>
                array(
                    'name' => 'FRANKS RedHot Original Cayenne Pepper Sauce',
                    'category' => NULL,
                ),
            47 =>
                array(
                    'name' => 'Foil',
                    'category' => NULL,
                ),
            48 =>
                array(
                    'name' => 'French fries',
                    'category' => NULL,
                ),
            49 =>
                array(
                    'name' => 'Fresno chiles or jalapeños',
                    'category' => NULL,
                ),
            50 =>
                array(
                    'name' => 'Gruyère',
                    'category' => NULL,
                ),
            51 =>
                array(
                    'name' => 'Italian parsley',
                    'category' => NULL,
                ),
            52 =>
                array(
                    'name' => 'Italian seasoning',
                    'category' => NULL,
                ),
            53 =>
                array(
                    'name' => 'Jarlsberg cheese',
                    'category' => NULL,
                ),
            54 =>
                array(
                    'name' => 'Large pinch of cayenne',
                    'category' => NULL,
                ),
            55 =>
                array(
                    'name' => 'Madras curry powder',
                    'category' => NULL,
                ),
            56 =>
                array(
                    'name' => 'Masa Harina',
                    'category' => NULL,
                ),
            57 =>
                array(
                    'name' => 'McCormick Grill Mates Garlic &amp; Herb Seasoning Mix',
                    'category' => NULL,
                ),
            58 =>
                array(
                    'name' => 'Mexican Rice',
                    'category' => NULL,
                ),
            59 =>
                array(
                    'name' => 'Mexican crema',
                    'category' => NULL,
                ),
            60 =>
                array(
                    'name' => 'Naan',
                    'category' => NULL,
                ),
            61 =>
                array(
                    'name' => 'New Zealand baby lamb',
                    'category' => NULL,
                ),
            62 =>
                array(
                    'name' => 'Parmesan',
                    'category' => NULL,
                ),
            63 =>
                array(
                    'name' => 'Parmesan for serving',
                    'category' => NULL,
                ),
            64 =>
                array(
                    'name' => 'Parmesan or Gruyère',
                    'category' => NULL,
                ),
            65 =>
                array(
                    'name' => 'Parmesan or Pecorino',
                    'category' => NULL,
                ),
            66 =>
                array(
                    'name' => 'Parmesan or Pecorino Romano',
                    'category' => NULL,
                ),
            67 =>
                array(
                    'name' => 'Peas',
                    'category' => NULL,
                ),
            68 =>
                array(
                    'name' => 'Pecorino Romano or Parmesan',
                    'category' => NULL,
                ),
            69 =>
                array(
                    'name' => 'Pinch fine sea salt',
                    'category' => NULL,
                ),
            70 =>
                array(
                    'name' => 'Pinch of dried oregano',
                    'category' => NULL,
                ),
            71 =>
                array(
                    'name' => 'Pinch of ground cloves',
                    'category' => NULL,
                ),
            72 =>
                array(
                    'name' => 'Pinch of nutmeg',
                    'category' => NULL,
                ),
            73 =>
                array(
                    'name' => 'Pinch of red pepper',
                    'category' => NULL,
                ),
            74 =>
                array(
                    'name' => 'Pineapple',
                    'category' => NULL,
                ),
            75 =>
                array(
                    'name' => 'Pork loin',
                    'category' => NULL,
                ),
            76 =>
                array(
                    'name' => 'Rub',
                    'category' => NULL,
                ),
            77 =>
                array(
                    'name' => 'Safflower',
                    'category' => NULL,
                ),
            78 =>
                array(
                    'name' => 'Shaoxing wine or dry sherry',
                    'category' => NULL,
                ),
            79 =>
                array(
                    'name' => 'Simple Tomato Sauce',
                    'category' => NULL,
                ),
            80 =>
                array(
                    'name' => 'Spam cut horizontally into 8 slices',
                    'category' => NULL,
                ),
            81 =>
                array(
                    'name' => 'Swiss cheese',
                    'category' => NULL,
                ),
            82 =>
                array(
                    'name' => 'Tabasco',
                    'category' => NULL,
                ),
            83 =>
                array(
                    'name' => 'Tablespoon  granulated sugar',
                    'category' => NULL,
                ),
            84 =>
                array(
                    'name' => 'Tajín Clásico',
                    'category' => NULL,
                ),
            85 =>
                array(
                    'name' => 'Tbsp. balsamic vinegar',
                    'category' => NULL,
                ),
            86 =>
                array(
                    'name' => 'Tbsp. high heat tolerant cooking fat (duck fat',
                    'category' => NULL,
                ),
            87 =>
                array(
                    'name' => 'Tbsp. tapioca starch',
                    'category' => NULL,
                ),
            88 =>
                array(
                    'name' => 'Tbsp. tomato paste',
                    'category' => NULL,
                ),
            89 =>
                array(
                    'name' => 'Thai thin soy sauce',
                    'category' => NULL,
                ),
            90 =>
                array(
                    'name' => 'Tuscan kale',
                    'category' => NULL,
                ),
            91 =>
                array(
                    'name' => 'Worcestershire sauce',
                    'category' => NULL,
                ),
            92 =>
                array(
                    'name' => 'Worcestershire sauce or soy sauce',
                    'category' => NULL,
                ),
            93 =>
                array(
                    'name' => 'Yukon gold potatoes',
                    'category' => NULL,
                ),
            94 =>
                array(
                    'name' => 'Yum Sauce',
                    'category' => NULL,
                ),
            95 =>
                array(
                    'name' => 'adobo sauce',
                    'category' => NULL,
                ),
            96 =>
                array(
                    'name' => 'aged white Cheddar',
                    'category' => NULL,
                ),
            97 =>
                array(
                    'name' => 'all-purpose flour',
                    'category' => NULL,
                ),
            98 =>
                array(
                    'name' => 'all-purpose flour ',
                    'category' => NULL,
                ),
            99 =>
                array(
                    'name' => 'almonds',
                    'category' => NULL,
                ),
            100 =>
                array(
                    'name' => 'ancho chile powder',
                    'category' => NULL,
                ),
            101 =>
                array(
                    'name' => 'anchovy',
                    'category' => NULL,
                ),
            102 =>
                array(
                    'name' => 'and 1/2 cups venison stock or beef stock*',
                    'category' => NULL,
                ),
            103 =>
                array(
                    'name' => 'and 1/2 tsp. Worchestershire sauce',
                    'category' => NULL,
                ),
            104 =>
                array(
                    'name' => 'and 1/2 tsp. salt divided',
                    'category' => NULL,
                ),
            105 =>
                array(
                    'name' => 'and black pepper',
                    'category' => NULL,
                ),
            106 =>
                array(
                    'name' => 'and black pepper ',
                    'category' => NULL,
                ),
            107 =>
                array(
                    'name' => 'and cheese',
                    'category' => NULL,
                ),
            108 =>
                array(
                    'name' => 'and freshly cracked black pepper',
                    'category' => NULL,
                ),
            109 =>
                array(
                    'name' => 'and freshly ground black pepper',
                    'category' => NULL,
                ),
            110 =>
                array(
                    'name' => 'and freshly ground pepper',
                    'category' => NULL,
                ),
            111 =>
                array(
                    'name' => 'and ground black or Sichuan pepper',
                    'category' => NULL,
                ),
            112 =>
                array(
                    'name' => 'and ground black pepper',
                    'category' => NULL,
                ),
            113 =>
                array(
                    'name' => 'and pepper',
                    'category' => NULL,
                ),
            114 =>
                array(
                    'name' => 'and zest of 2 limes',
                    'category' => NULL,
                ),
            115 =>
                array(
                    'name' => 'apple cider vinegar',
                    'category' => NULL,
                ),
            116 =>
                array(
                    'name' => 'arborio or carnaroli rice',
                    'category' => NULL,
                ),
            117 =>
                array(
                    'name' => 'asparagus',
                    'category' => NULL,
                ),
            118 =>
                array(
                    'name' => 'avocado',
                    'category' => NULL,
                ),
            119 =>
                array(
                    'name' => 'baby kale',
                    'category' => NULL,
                ),
            120 =>
                array(
                    'name' => 'baby potatoes',
                    'category' => NULL,
                ),
            121 =>
                array(
                    'name' => 'baby spinach',
                    'category' => NULL,
                ),
            122 =>
                array(
                    'name' => 'baby spinach or baby kale',
                    'category' => NULL,
                ),
            123 =>
                array(
                    'name' => 'baby yellow potatoes',
                    'category' => NULL,
                ),
            124 =>
                array(
                    'name' => 'bacon',
                    'category' => NULL,
                ),
            125 =>
                array(
                    'name' => 'baharat',
                    'category' => NULL,
                ),
            126 =>
                array(
                    'name' => 'baking potatoes',
                    'category' => NULL,
                ),
            127 =>
                array(
                    'name' => 'baking powder',
                    'category' => NULL,
                ),
            128 =>
                array(
                    'name' => 'baking soda',
                    'category' => NULL,
                ),
            129 =>
                array(
                    'name' => 'balsamic vinegar',
                    'category' => NULL,
                ),
            130 =>
                array(
                    'name' => 'basil',
                    'category' => NULL,
                ),
            131 =>
                array(
                    'name' => 'basil leaves',
                    'category' => NULL,
                ),
            132 =>
                array(
                    'name' => 'basil or mint for garnish',
                    'category' => NULL,
                ),
            133 =>
                array(
                    'name' => 'basmati or jasmine rice',
                    'category' => NULL,
                ),
            134 =>
                array(
                    'name' => 'basmati rice',
                    'category' => NULL,
                ),
            135 =>
                array(
                    'name' => 'basting brush',
                    'category' => NULL,
                ),
            136 =>
                array(
                    'name' => 'bay leaves',
                    'category' => NULL,
                ),
            137 =>
                array(
                    'name' => 'beans',
                    'category' => NULL,
                ),
            138 =>
                array(
                    'name' => 'beef broth (or water',
                    'category' => NULL,
                ),
            139 =>
                array(
                    'name' => 'beef or chicken stock',
                    'category' => NULL,
                ),
            140 =>
                array(
                    'name' => 'beef stew meat',
                    'category' => NULL,
                ),
            141 =>
                array(
                    'name' => 'beef stock',
                    'category' => NULL,
                ),
            142 =>
                array(
                    'name' => 'beef stock/broth',
                    'category' => NULL,
                ),
            143 =>
                array(
                    'name' => 'beef tenderloin',
                    'category' => NULL,
                ),
            144 =>
                array(
                    'name' => 'bell pepper',
                    'category' => NULL,
                ),
            145 =>
                array(
                    'name' => 'bell pepper )',
                    'category' => NULL,
                ),
            146 =>
                array(
                    'name' => 'berries',
                    'category' => NULL,
                ),
            147 =>
                array(
                    'name' => 'bird’s-eye chiles',
                    'category' => NULL,
                ),
            148 =>
                array(
                    'name' => 'black beans',
                    'category' => NULL,
                ),
            149 =>
                array(
                    'name' => 'black beans and',
                    'category' => NULL,
                ),
            150 =>
                array(
                    'name' => 'black or brown mustard seeds',
                    'category' => NULL,
                ),
            151 =>
                array(
                    'name' => 'black pepper',
                    'category' => NULL,
                ),
            152 =>
                array(
                    'name' => 'block firm tofu',
                    'category' => NULL,
                ),
            153 =>
                array(
                    'name' => 'blue cheese crumbles',
                    'category' => NULL,
                ),
            154 =>
                array(
                    'name' => 'boiling water',
                    'category' => NULL,
                ),
            155 =>
                array(
                    'name' => 'bone 1 1/4 pounds',
                    'category' => NULL,
                ),
            156 =>
                array(
                    'name' => 'bone-in beef shoulder',
                    'category' => NULL,
                ),
            157 =>
                array(
                    'name' => 'bone-in chicken thighs or breasts',
                    'category' => NULL,
                ),
            158 =>
                array(
                    'name' => 'bone-in pork chops',
                    'category' => NULL,
                ),
            159 =>
                array(
                    'name' => 'bone-in pork-shoulder steaks',
                    'category' => NULL,
                ),
            160 =>
                array(
                    'name' => 'bone-in skin-on chicken drumsticks and thighs',
                    'category' => NULL,
                ),
            161 =>
                array(
                    'name' => 'bone-in skin-on chicken thighs',
                    'category' => NULL,
                ),
            162 =>
                array(
                    'name' => 'bone-in skin-on pork shoulder',
                    'category' => NULL,
                ),
            163 =>
                array(
                    'name' => 'boneless pork shoulder or pork butt of most of its excess fat',
                    'category' => NULL,
                ),
            164 =>
                array(
                    'name' => 'boneless skinless chicken',
                    'category' => NULL,
                ),
            165 =>
                array(
                    'name' => 'boneless skinless chicken breasts',
                    'category' => NULL,
                ),
            166 =>
                array(
                    'name' => 'boneless skinless chicken breasts or thighs',
                    'category' => NULL,
                ),
            167 =>
                array(
                    'name' => 'boneless skinless chicken breasts ',
                    'category' => NULL,
                ),
            168 =>
                array(
                    'name' => 'boneless skinless chicken thighs',
                    'category' => NULL,
                ),
            169 =>
                array(
                    'name' => 'boneless skinless chicken thighs or breasts',
                    'category' => NULL,
                ),
            170 =>
                array(
                    'name' => 'bonnet pepper',
                    'category' => NULL,
                ),
            171 =>
                array(
                    'name' => 'bouquet garni made with a bay leaf',
                    'category' => NULL,
                ),
            172 =>
                array(
                    'name' => 'bread',
                    'category' => NULL,
                ),
            173 =>
                array(
                    'name' => 'broccoli',
                    'category' => NULL,
                ),
            174 =>
                array(
                    'name' => 'broccoli florets',
                    'category' => NULL,
                ),
            175 =>
                array(
                    'name' => 'broth (',
                    'category' => NULL,
                ),
            176 =>
                array(
                    'name' => 'brown sugar',
                    'category' => NULL,
                ),
            177 =>
                array(
                    'name' => 'brussels sprouts',
                    'category' => NULL,
                ),
            178 =>
                array(
                    'name' => 'brussels sprouts (or cruciferous vegetables like broccoli',
                    'category' => NULL,
                ),
            179 =>
                array(
                    'name' => 'bulb',
                    'category' => NULL,
                ),
            180 =>
                array(
                    'name' => 'butter',
                    'category' => NULL,
                ),
            181 =>
                array(
                    'name' => 'buttermilk',
                    'category' => NULL,
                ),
            182 =>
                array(
                    'name' => 'butter ',
                    'category' => NULL,
                ),
            183 =>
                array(
                    'name' => 'button mushrooms',
                    'category' => NULL,
                ),
            184 =>
                array(
                    'name' => 'cabbage',
                    'category' => NULL,
                ),
            185 =>
                array(
                    'name' => 'can fire- tomatoes',
                    'category' => NULL,
                ),
            186 =>
                array(
                    'name' => 'can tomatoes',
                    'category' => NULL,
                ),
            187 =>
                array(
                    'name' => 'cannellini beans',
                    'category' => NULL,
                ),
            188 =>
                array(
                    'name' => 'canola corn or other neutral oil',
                    'category' => NULL,
                ),
            189 =>
                array(
                    'name' => 'canola oil',
                    'category' => NULL,
                ),
            190 =>
                array(
                    'name' => 'canola or vegetable oil',
                    'category' => NULL,
                ),
            191 =>
                array(
                    'name' => 'capers',
                    'category' => NULL,
                ),
            192 =>
                array(
                    'name' => 'carrots',
                    'category' => NULL,
                ),
            193 =>
                array(
                    'name' => 'cashews',
                    'category' => NULL,
                ),
            194 =>
                array(
                    'name' => 'cauliflower',
                    'category' => NULL,
                ),
            195 =>
                array(
                    'name' => 'cayenne pepper',
                    'category' => NULL,
                ),
            196 =>
                array(
                    'name' => 'celery',
                    'category' => NULL,
                ),
            197 =>
                array(
                    'name' => 'cheddar cheese',
                    'category' => NULL,
                ),
            198 =>
                array(
                    'name' => 'cherry or grape tomatoes',
                    'category' => NULL,
                ),
            199 =>
                array(
                    'name' => 'cherry or other small tomatoes',
                    'category' => NULL,
                ),
            200 =>
                array(
                    'name' => 'cherry tomatoes',
                    'category' => NULL,
                ),
            201 =>
                array(
                    'name' => 'chicken',
                    'category' => NULL,
                ),
            202 =>
                array(
                    'name' => 'chicken breasts pounded thin',
                    'category' => NULL,
                ),
            203 =>
                array(
                    'name' => 'chicken broth',
                    'category' => NULL,
                ),
            204 =>
                array(
                    'name' => 'chicken broth or stock',
                    'category' => NULL,
                ),
            205 =>
                array(
                    'name' => 'chicken broth or water',
                    'category' => NULL,
                ),
            206 =>
                array(
                    'name' => 'chicken broth ',
                    'category' => NULL,
                ),
            207 =>
                array(
                    'name' => 'chicken or vegetable stock',
                    'category' => NULL,
                ),
            208 =>
                array(
                    'name' => 'chicken stock',
                    'category' => NULL,
                ),
            209 =>
                array(
                    'name' => 'chicken thighs',
                    'category' => NULL,
                ),
            210 =>
                array(
                    'name' => 'chickpeas',
                    'category' => NULL,
                ),
            211 =>
                array(
                    'name' => 'chickpeas and',
                    'category' => NULL,
                ),
            212 =>
                array(
                    'name' => 'chile crisp plus more',
                    'category' => NULL,
                ),
            213 =>
                array(
                    'name' => 'chiles',
                    'category' => NULL,
                ),
            214 =>
                array(
                    'name' => 'chiles de árbol',
                    'category' => NULL,
                ),
            215 =>
                array(
                    'name' => 'chiles in adobo',
                    'category' => NULL,
                ),
            216 =>
                array(
                    'name' => 'chiles or more',
                    'category' => NULL,
                ),
            217 =>
                array(
                    'name' => 'chili pepper',
                    'category' => NULL,
                ),
            218 =>
                array(
                    'name' => 'chili pork',
                    'category' => NULL,
                ),
            219 =>
                array(
                    'name' => 'chili powder',
                    'category' => NULL,
                ),
            220 =>
                array(
                    'name' => 'chipotle or ancho chile powder',
                    'category' => NULL,
                ),
            221 =>
                array(
                    'name' => 'chipotle peppers in adobo sauce',
                    'category' => NULL,
                ),
            222 =>
                array(
                    'name' => 'chipotles from a can of chipotles in adobo',
                    'category' => NULL,
                ),
            223 =>
                array(
                    'name' => 'chips',
                    'category' => NULL,
                ),
            224 =>
                array(
                    'name' => 'chives',
                    'category' => NULL,
                ),
            225 =>
                array(
                    'name' => 'cider vinegar',
                    'category' => NULL,
                ),
            226 =>
                array(
                    'name' => 'cider vinegar or rice wine vinegar',
                    'category' => NULL,
                ),
            227 =>
                array(
                    'name' => 'cilantro',
                    'category' => NULL,
                ),
            228 =>
                array(
                    'name' => 'cilantro leaves',
                    'category' => NULL,
                ),
            229 =>
                array(
                    'name' => 'cilantro leaves and tender stems',
                    'category' => NULL,
                ),
            230 =>
                array(
                    'name' => 'cilantro or parsley',
                    'category' => NULL,
                ),
            231 =>
                array(
                    'name' => 'cilantro sprigs',
                    'category' => NULL,
                ),
            232 =>
                array(
                    'name' => 'cinnamon stick',
                    'category' => NULL,
                ),
            233 =>
                array(
                    'name' => 'cloves',
                    'category' => NULL,
                ),
            234 =>
                array(
                    'name' => 'cloves of garlic',
                    'category' => NULL,
                ),
            235 =>
                array(
                    'name' => 'coarse kosher salt',
                    'category' => NULL,
                ),
            236 =>
                array(
                    'name' => 'coarsely cups/4 ounces Colby or Cheddar cheese plus more for serving',
                    'category' => NULL,
                ),
            237 =>
                array(
                    'name' => 'coconut milk',
                    'category' => NULL,
                ),
            238 =>
                array(
                    'name' => 'coconut milk (if necessary',
                    'category' => NULL,
                ),
            239 =>
                array(
                    'name' => 'coconut milk ',
                    'category' => NULL,
                ),
            240 =>
                array(
                    'name' => 'coconut oil',
                    'category' => NULL,
                ),
            241 =>
                array(
                    'name' => 'coconut or canola oil',
                    'category' => NULL,
                ),
            242 =>
                array(
                    'name' => 'coconut palm sugar or dark brown sugar',
                    'category' => NULL,
                ),
            243 =>
                array(
                    'name' => 'coconut vinegar',
                    'category' => NULL,
                ),
            244 =>
                array(
                    'name' => 'combination of chile sauce',
                    'category' => NULL,
                ),
            245 =>
                array(
                    'name' => 'container whole-milk ricotta ',
                    'category' => NULL,
                ),
            246 =>
                array(
                    'name' => 'cooked beans rinsed and drained if canned',
                    'category' => NULL,
                ),
            247 =>
                array(
                    'name' => 'cooked bone-in ham',
                    'category' => NULL,
                ),
            248 =>
                array(
                    'name' => 'cooked chicken',
                    'category' => NULL,
                ),
            249 =>
                array(
                    'name' => 'cooked chicken (or 1.5 lbs raw',
                    'category' => NULL,
                ),
            250 =>
                array(
                    'name' => 'cooked ham',
                    'category' => NULL,
                ),
            251 =>
                array(
                    'name' => 'cooked jasmine or other long-grain white rice',
                    'category' => NULL,
                ),
            252 =>
                array(
                    'name' => 'cooked long grain white rice',
                    'category' => NULL,
                ),
            253 =>
                array(
                    'name' => 'cooked mashed potatoes',
                    'category' => NULL,
                ),
            254 =>
                array(
                    'name' => 'cooked rice',
                    'category' => NULL,
                ),
            255 =>
                array(
                    'name' => 'cooked spinach',
                    'category' => NULL,
                ),
            256 =>
                array(
                    'name' => 'corn ((kernels removed from cob',
                    'category' => NULL,
                ),
            257 =>
                array(
                    'name' => 'corn starch (+ 2-3 tbsp water',
                    'category' => NULL,
                ),
            258 =>
                array(
                    'name' => 'corn tortillas',
                    'category' => NULL,
                ),
            259 =>
                array(
                    'name' => 'cornstarch',
                    'category' => NULL,
                ),
            260 =>
                array(
                    'name' => 'country bread',
                    'category' => NULL,
                ),
            261 =>
                array(
                    'name' => 'cream',
                    'category' => NULL,
                ),
            262 =>
                array(
                    'name' => 'cream cheese',
                    'category' => NULL,
                ),
            263 =>
                array(
                    'name' => 'crumbled queso fresco or cotija cheese',
                    'category' => NULL,
                ),
            264 =>
                array(
                    'name' => 'cumin',
                    'category' => NULL,
                ),
            265 =>
                array(
                    'name' => 'cumin seeds',
                    'category' => NULL,
                ),
            266 =>
                array(
                    'name' => 'cups  turkey  cut into 1 1/2-inch pieces',
                    'category' => NULL,
                ),
            267 =>
                array(
                    'name' => 'cured meat',
                    'category' => NULL,
                ),
            268 =>
                array(
                    'name' => 'curry powder',
                    'category' => NULL,
                ),
            269 =>
                array(
                    'name' => 'dark beer',
                    'category' => NULL,
                ),
            270 =>
                array(
                    'name' => 'dark soda like Dr Pepper',
                    'category' => NULL,
                ),
            271 =>
                array(
                    'name' => 'dark soy sauce',
                    'category' => NULL,
                ),
            272 =>
                array(
                    'name' => 'dill',
                    'category' => NULL,
                ),
            273 =>
                array(
                    'name' => 'dill seed',
                    'category' => NULL,
                ),
            274 =>
                array(
                    'name' => 'distilled white vinegar',
                    'category' => NULL,
                ),
            275 =>
                array(
                    'name' => 'ditalini',
                    'category' => NULL,
                ),
            276 =>
                array(
                    'name' => 'drained capers',
                    'category' => NULL,
                ),
            277 =>
                array(
                    'name' => 'dried Mexican oregano',
                    'category' => NULL,
                ),
            278 =>
                array(
                    'name' => 'dried currants or raisins',
                    'category' => NULL,
                ),
            279 =>
                array(
                    'name' => 'dried fennel seeds',
                    'category' => NULL,
                ),
            280 =>
                array(
                    'name' => 'dried fettuccine',
                    'category' => NULL,
                ),
            281 =>
                array(
                    'name' => 'dried oregano',
                    'category' => NULL,
                ),
            282 =>
                array(
                    'name' => 'dried oregano ',
                    'category' => NULL,
                ),
            283 =>
                array(
                    'name' => 'dried parsley',
                    'category' => NULL,
                ),
            284 =>
                array(
                    'name' => 'dried rice vermicelli noodles',
                    'category' => NULL,
                ),
            285 =>
                array(
                    'name' => 'dried thin egg noodles',
                    'category' => NULL,
                ),
            286 =>
                array(
                    'name' => 'dried thyme',
                    'category' => NULL,
                ),
            287 =>
                array(
                    'name' => 'dried thyme leaves',
                    'category' => NULL,
                ),
            288 =>
                array(
                    'name' => 'dry jumbo pasta shells',
                    'category' => NULL,
                ),
            289 =>
                array(
                    'name' => 'dry mustard',
                    'category' => NULL,
                ),
            290 =>
                array(
                    'name' => 'dry navy or great Northern beans',
                    'category' => NULL,
                ),
            291 =>
                array(
                    'name' => 'dry red wine',
                    'category' => NULL,
                ),
            292 =>
                array(
                    'name' => 'dry white wine',
                    'category' => NULL,
                ),
            293 =>
                array(
                    'name' => 'dry white wine or broth',
                    'category' => NULL,
                ),
            294 =>
                array(
                    'name' => 'each ground cumin',
                    'category' => NULL,
                ),
            295 =>
                array(
                    'name' => 'each salt and white vinegar',
                    'category' => NULL,
                ),
            296 =>
                array(
                    'name' => 'egg',
                    'category' => NULL,
                ),
            297 =>
                array(
                    'name' => 'elbow macaroni',
                    'category' => NULL,
                ),
            298 =>
                array(
                    'name' => 'elbow macaroni or another small pasta',
                    'category' => NULL,
                ),
            299 =>
                array(
                    'name' => 'escarole',
                    'category' => NULL,
                ),
            300 =>
                array(
                    'name' => 'evaporated milk',
                    'category' => NULL,
                ),
            301 =>
                array(
                    'name' => 'extra virgin olive oil',
                    'category' => NULL,
                ),
            302 =>
                array(
                    'name' => 'extra virgin olive oil or 1 tablespoon each olive oil and butter',
                    'category' => NULL,
                ),
            303 =>
                array(
                    'name' => 'extra virgin olive oil or vegan butter',
                    'category' => NULL,
                ),
            304 =>
                array(
                    'name' => 'extra-large',
                    'category' => NULL,
                ),
            305 =>
                array(
                    'name' => 'extra-virgin olive oil',
                    'category' => NULL,
                ),
            306 =>
                array(
                    'name' => 'extra-virgin olive oil or peanut oil',
                    'category' => NULL,
                ),
            307 =>
                array(
                    'name' => 'favorite BBQ sauce',
                    'category' => NULL,
                ),
            308 =>
                array(
                    'name' => 'fennel seeds  ',
                    'category' => NULL,
                ),
            309 =>
                array(
                    'name' => 'feta',
                    'category' => NULL,
                ),
            310 =>
                array(
                    'name' => 'feta cheese',
                    'category' => NULL,
                ),
            311 =>
                array(
                    'name' => 'fillets',
                    'category' => NULL,
                ),
            312 =>
                array(
                    'name' => 'fine salt',
                    'category' => NULL,
                ),
            313 =>
                array(
                    'name' => 'fine sea salt',
                    'category' => NULL,
                ),
            314 =>
                array(
                    'name' => 'fish sauce',
                    'category' => NULL,
                ),
            315 =>
                array(
                    'name' => 'fish sauce or soy sauce',
                    'category' => NULL,
                ),
            316 =>
                array(
                    'name' => 'five-spice powder',
                    'category' => NULL,
                ),
            317 =>
                array(
                    'name' => 'flaky white fish fillets',
                    'category' => NULL,
                ),
            318 =>
                array(
                    'name' => 'flank or skirt steak',
                    'category' => NULL,
                ),
            319 =>
                array(
                    'name' => 'flank steak',
                    'category' => NULL,
                ),
            320 =>
                array(
                    'name' => 'flat-leaf parsley',
                    'category' => NULL,
                ),
            321 =>
                array(
                    'name' => 'flat-leaf parsley or basil',
                    'category' => NULL,
                ),
            322 =>
                array(
                    'name' => 'flour',
                    'category' => NULL,
                ),
            323 =>
                array(
                    'name' => 'flour )',
                    'category' => NULL,
                ),
            324 =>
                array(
                    'name' => 'fontina or mozzarella or a blend',
                    'category' => NULL,
                ),
            325 =>
                array(
                    'name' => 'fresca',
                    'category' => NULL,
                ),
            326 =>
                array(
                    'name' => 'fresco',
                    'category' => NULL,
                ),
            327 =>
                array(
                    'name' => 'fresh baby spinach',
                    'category' => NULL,
                ),
            328 =>
                array(
                    'name' => 'fresh basil',
                    'category' => NULL,
                ),
            329 =>
                array(
                    'name' => 'fresh basil leaves',
                    'category' => NULL,
                ),
            330 =>
                array(
                    'name' => 'fresh bread crumbs',
                    'category' => NULL,
                ),
            331 =>
                array(
                    'name' => 'fresh cilantro',
                    'category' => NULL,
                ),
            332 =>
                array(
                    'name' => 'fresh cilantro leaves',
                    'category' => NULL,
                ),
            333 =>
                array(
                    'name' => 'fresh cilantro leaves or dill sprigs',
                    'category' => NULL,
                ),
            334 =>
                array(
                    'name' => 'fresh dill',
                    'category' => NULL,
                ),
            335 =>
                array(
                    'name' => 'fresh dill or parsley',
                    'category' => NULL,
                ),
            336 =>
                array(
                    'name' => 'fresh ginger',
                    'category' => NULL,
                ),
            337 =>
                array(
                    'name' => 'fresh lemon juice',
                    'category' => NULL,
                ),
            338 =>
                array(
                    'name' => 'fresh lemon juice ',
                    'category' => NULL,
                ),
            339 =>
                array(
                    'name' => 'fresh lemon zest plus up to 1/2 cup lemon juice',
                    'category' => NULL,
                ),
            340 =>
                array(
                    'name' => 'fresh lime juice',
                    'category' => NULL,
                ),
            341 =>
                array(
                    'name' => 'fresh mint',
                    'category' => NULL,
                ),
            342 =>
                array(
                    'name' => 'fresh mozzarella',
                    'category' => NULL,
                ),
            343 =>
                array(
                    'name' => 'fresh orange juice',
                    'category' => NULL,
                ),
            344 =>
                array(
                    'name' => 'fresh oregano or marjoram',
                    'category' => NULL,
                ),
            345 =>
                array(
                    'name' => 'fresh parsley',
                    'category' => NULL,
                ),
            346 =>
                array(
                    'name' => 'fresh parsley leaves',
                    'category' => NULL,
                ),
            347 =>
                array(
                    'name' => 'fresh parsley leaves and tender stems',
                    'category' => NULL,
                ),
            348 =>
                array(
                    'name' => 'fresh rosemary',
                    'category' => NULL,
                ),
            349 =>
                array(
                    'name' => 'fresh rosemary or thyme',
                    'category' => NULL,
                ),
            350 =>
                array(
                    'name' => 'fresh sour orange juice',
                    'category' => NULL,
                ),
            351 =>
                array(
                    'name' => 'fresh thyme',
                    'category' => NULL,
                ),
            352 =>
                array(
                    'name' => 'fresh thyme (or 1 teaspoon dried thyme',
                    'category' => NULL,
                ),
            353 =>
                array(
                    'name' => 'fresh thyme leaves',
                    'category' => NULL,
                ),
            354 =>
                array(
                    'name' => 'fresh thyme or 1/2 teaspoon dried thyme',
                    'category' => NULL,
                ),
            355 =>
                array(
                    'name' => 'fresh tomatillos',
                    'category' => NULL,
                ),
            356 =>
                array(
                    'name' => 'freshly Parmesan',
                    'category' => NULL,
                ),
            357 =>
                array(
                    'name' => 'freshly Parmesan cheese',
                    'category' => NULL,
                ),
            358 =>
                array(
                    'name' => 'freshly cracked black pepper',
                    'category' => NULL,
                ),
            359 =>
                array(
                    'name' => 'freshly ground black pepper',
                    'category' => NULL,
                ),
            360 =>
                array(
                    'name' => 'freshly lemon zest',
                    'category' => NULL,
                ),
            361 =>
                array(
                    'name' => 'freshly lemon zest plus 1 tablespoon juice',
                    'category' => NULL,
                ),
            362 =>
                array(
                    'name' => 'freshly mozzarella',
                    'category' => NULL,
                ),
            363 =>
                array(
                    'name' => 'freshly squeezed lemon juice',
                    'category' => NULL,
                ),
            364 =>
                array(
                    'name' => 'fresno',
                    'category' => NULL,
                ),
            365 =>
                array(
                    'name' => 'from 2 sprigs rosemary',
                    'category' => NULL,
                ),
            366 =>
                array(
                    'name' => 'frozen corn',
                    'category' => NULL,
                ),
            367 =>
                array(
                    'name' => 'frozen mixed vegetables (any mix of carrots',
                    'category' => NULL,
                ),
            368 =>
                array(
                    'name' => 'frozen peas',
                    'category' => NULL,
                ),
            369 =>
                array(
                    'name' => 'frozen presteamed yakisoba noodles',
                    'category' => NULL,
                ),
            370 =>
                array(
                    'name' => 'full-fat Greek yogurt',
                    'category' => NULL,
                ),
            371 =>
                array(
                    'name' => 'full-fat coconut milk',
                    'category' => NULL,
                ),
            372 =>
                array(
                    'name' => 'fully chicken sausage any flavor',
                    'category' => NULL,
                ),
            373 =>
                array(
                    'name' => 'furikake',
                    'category' => NULL,
                ),
            374 =>
                array(
                    'name' => 'fusilli',
                    'category' => NULL,
                ),
            375 =>
                array(
                    'name' => 'garam masala',
                    'category' => NULL,
                ),
            376 =>
                array(
                    'name' => 'garlic',
                    'category' => NULL,
                ),
            377 =>
                array(
                    'name' => 'garlic clove',
                    'category' => NULL,
                ),
            378 =>
                array(
                    'name' => 'garlic cloves',
                    'category' => NULL,
                ),
            379 =>
                array(
                    'name' => 'garlic cloves green shoots removed',
                    'category' => NULL,
                ),
            380 =>
                array(
                    'name' => 'garlic powder',
                    'category' => NULL,
                ),
            381 =>
                array(
                    'name' => 'garlic powder ',
                    'category' => NULL,
                ),
            382 =>
                array(
                    'name' => 'ghee or neutral-tasting oil',
                    'category' => NULL,
                ),
            383 =>
                array(
                    'name' => 'ghee or unsalted butter',
                    'category' => NULL,
                ),
            384 =>
                array(
                    'name' => 'ginger',
                    'category' => NULL,
                ),
            385 =>
                array(
                    'name' => 'ginger )',
                    'category' => NULL,
                ),
            386 =>
                array(
                    'name' => 'gochujang',
                    'category' => NULL,
                ),
            387 =>
                array(
                    'name' => 'gold potatoes (medium to large',
                    'category' => NULL,
                ),
            388 =>
                array(
                    'name' => 'good tomato sauce',
                    'category' => NULL,
                ),
            389 =>
                array(
                    'name' => 'good-size scallions or 3 bunches thin scallions',
                    'category' => NULL,
                ),
            390 =>
                array(
                    'name' => 'granulated garlic',
                    'category' => NULL,
                ),
            391 =>
                array(
                    'name' => 'granulated onion',
                    'category' => NULL,
                ),
            392 =>
                array(
                    'name' => 'granulated sugar',
                    'category' => NULL,
                ),
            393 =>
                array(
                    'name' => 'grape tomatoes',
                    'category' => NULL,
                ),
            394 =>
                array(
                    'name' => 'grapeseed or canola oil',
                    'category' => NULL,
                ),
            395 =>
                array(
                    'name' => 'grapeseed or vegetable oil',
                    'category' => NULL,
                ),
            396 =>
                array(
                    'name' => 'green beans',
                    'category' => NULL,
                ),
            397 =>
                array(
                    'name' => 'green bell pepper',
                    'category' => NULL,
                ),
            398 =>
                array(
                    'name' => 'green cabbage',
                    'category' => NULL,
                ),
            399 =>
                array(
                    'name' => 'green onion',
                    'category' => NULL,
                ),
            400 =>
                array(
                    'name' => 'grits',
                    'category' => NULL,
                ),
            401 =>
                array(
                    'name' => 'ground beef',
                    'category' => NULL,
                ),
            402 =>
                array(
                    'name' => 'ground beef ',
                    'category' => NULL,
                ),
            403 =>
                array(
                    'name' => 'ground black pepper',
                    'category' => NULL,
                ),
            404 =>
                array(
                    'name' => 'ground cayenne',
                    'category' => NULL,
                ),
            405 =>
                array(
                    'name' => 'ground chicken',
                    'category' => NULL,
                ),
            406 =>
                array(
                    'name' => 'ground chicken or turkey',
                    'category' => NULL,
                ),
            407 =>
                array(
                    'name' => 'ground cinnamon',
                    'category' => NULL,
                ),
            408 =>
                array(
                    'name' => 'ground coriander',
                    'category' => NULL,
                ),
            409 =>
                array(
                    'name' => 'ground cumin',
                    'category' => NULL,
                ),
            410 =>
                array(
                    'name' => 'ground ginger',
                    'category' => NULL,
                ),
            411 =>
                array(
                    'name' => 'ground lamb',
                    'category' => NULL,
                ),
            412 =>
                array(
                    'name' => 'ground mace',
                    'category' => NULL,
                ),
            413 =>
                array(
                    'name' => 'ground paprika',
                    'category' => NULL,
                ),
            414 =>
                array(
                    'name' => 'ground pepper',
                    'category' => NULL,
                ),
            415 =>
                array(
                    'name' => 'ground round',
                    'category' => NULL,
                ),
            416 =>
                array(
                    'name' => 'ground turkey',
                    'category' => NULL,
                ),
            417 =>
                array(
                    'name' => 'ground turkey or chicken',
                    'category' => NULL,
                ),
            418 =>
                array(
                    'name' => 'ground turmeric',
                    'category' => NULL,
                ),
            419 =>
                array(
                    'name' => 'ground white pepper',
                    'category' => NULL,
                ),
            420 =>
                array(
                    'name' => 'habanero chile',
                    'category' => NULL,
                ),
            421 =>
                array(
                    'name' => 'half and half',
                    'category' => NULL,
                ),
            422 =>
                array(
                    'name' => 'half-and-half or heavy cream',
                    'category' => NULL,
                ),
            423 =>
                array(
                    'name' => 'heaping cup of Parmigiano Reggiano cheese',
                    'category' => NULL,
                ),
            424 =>
                array(
                    'name' => 'heaping thinly cup very iceberg lettuce',
                    'category' => NULL,
                ),
            425 =>
                array(
                    'name' => 'heart',
                    'category' => NULL,
                ),
            426 =>
                array(
                    'name' => 'heavy cream',
                    'category' => NULL,
                ),
            427 =>
                array(
                    'name' => 'heavy cream ',
                    'category' => NULL,
                ),
            428 =>
                array(
                    'name' => 'hock or smoked ham shank',
                    'category' => NULL,
                ),
            429 =>
                array(
                    'name' => 'hoisin sauce',
                    'category' => NULL,
                ),
            430 =>
                array(
                    'name' => 'homemade or store-bought barbecue sauce',
                    'category' => NULL,
                ),
            431 =>
                array(
                    'name' => 'homemade or storebought pico de gallo',
                    'category' => NULL,
                ),
            432 =>
                array(
                    'name' => 'hominy and',
                    'category' => NULL,
                ),
            433 =>
                array(
                    'name' => 'honey',
                    'category' => NULL,
                ),
            434 =>
                array(
                    'name' => 'honey (corn syrup',
                    'category' => NULL,
                ),
            435 =>
                array(
                    'name' => 'honey nut or butternut squash',
                    'category' => NULL,
                ),
            436 =>
                array(
                    'name' => 'hot Italian sausage',
                    'category' => NULL,
                ),
            437 =>
                array(
                    'name' => 'hot homemade or canned vegetable stock',
                    'category' => NULL,
                ),
            438 =>
                array(
                    'name' => 'hot honey plus more',
                    'category' => NULL,
                ),
            439 =>
                array(
                    'name' => 'hot or sweet Italian sausage',
                    'category' => NULL,
                ),
            440 =>
                array(
                    'name' => 'hot or sweet smoked paprika',
                    'category' => NULL,
                ),
            441 =>
                array(
                    'name' => 'hot sauce',
                    'category' => NULL,
                ),
            442 =>
                array(
                    'name' => 'jalapeño',
                    'category' => NULL,
                ),
            443 =>
                array(
                    'name' => 'jalapeño or 2 serrano chiles',
                    'category' => NULL,
                ),
            444 =>
                array(
                    'name' => 'jalapeños or other chiles',
                    'category' => NULL,
                ),
            445 =>
                array(
                    'name' => 'jar red bell peppers',
                    'category' => NULL,
                ),
            446 =>
                array(
                    'name' => 'jarred or homemade queso',
                    'category' => NULL,
                ),
            447 =>
                array(
                    'name' => 'jasmine rice',
                    'category' => NULL,
                ),
            448 =>
                array(
                    'name' => 'jerk seasoning',
                    'category' => NULL,
                ),
            449 =>
                array(
                    'name' => 'juice of one lemon',
                    'category' => NULL,
                ),
            450 =>
                array(
                    'name' => 'jumbo shrimp (16-20 count',
                    'category' => NULL,
                ),
            451 =>
                array(
                    'name' => 'kale',
                    'category' => NULL,
                ),
            452 =>
                array(
                    'name' => 'ketchup',
                    'category' => NULL,
                ),
            453 =>
                array(
                    'name' => 'ketchup ',
                    'category' => NULL,
                ),
            454 =>
                array(
                    'name' => 'kosher salt',
                    'category' => NULL,
                ),
            455 =>
                array(
                    'name' => 'kosher salt and black pepper',
                    'category' => NULL,
                ),
            456 =>
                array(
                    'name' => 'kosher salt*',
                    'category' => NULL,
                ),
            457 =>
                array(
                    'name' => 'lard',
                    'category' => NULL,
                ),
            458 =>
                array(
                    'name' => 'large',
                    'category' => NULL,
                ),
            459 =>
                array(
                    'name' => 'large apple',
                    'category' => NULL,
                ),
            460 =>
                array(
                    'name' => 'large baking potatoes',
                    'category' => NULL,
                ),
            461 =>
                array(
                    'name' => 'large beefsteak tomato',
                    'category' => NULL,
                ),
            462 =>
                array(
                    'name' => 'large boneless',
                    'category' => NULL,
                ),
            463 =>
                array(
                    'name' => 'large boneless and skinless chicken breast halves',
                    'category' => NULL,
                ),
            464 =>
                array(
                    'name' => 'large carrot',
                    'category' => NULL,
                ),
            465 =>
                array(
                    'name' => 'large celery stalks',
                    'category' => NULL,
                ),
            466 =>
                array(
                    'name' => 'large cloves garlic',
                    'category' => NULL,
                ),
            467 =>
                array(
                    'name' => 'large cucumber',
                    'category' => NULL,
                ),
            468 =>
                array(
                    'name' => 'large egg yolks',
                    'category' => NULL,
                ),
            469 =>
                array(
                    'name' => 'large eggs',
                    'category' => NULL,
                ),
            470 =>
                array(
                    'name' => 'large fennel',
                    'category' => NULL,
                ),
            471 =>
                array(
                    'name' => 'large flour or 8 corn tortillas',
                    'category' => NULL,
                ),
            472 =>
                array(
                    'name' => 'large garlic cloves',
                    'category' => NULL,
                ),
            473 =>
                array(
                    'name' => 'large garlic cloves finely',
                    'category' => NULL,
                ),
            474 =>
                array(
                    'name' => 'large green bell pepper',
                    'category' => NULL,
                ),
            475 =>
                array(
                    'name' => 'large guajillo chiles and or ¼ cup guajillo chile powder ',
                    'category' => NULL,
                ),
            476 =>
                array(
                    'name' => 'large head broccoli',
                    'category' => NULL,
                ),
            477 =>
                array(
                    'name' => 'large leeks',
                    'category' => NULL,
                ),
            478 =>
                array(
                    'name' => 'large onion',
                    'category' => NULL,
                ),
            479 =>
                array(
                    'name' => 'large or 2 small bunches escarole',
                    'category' => NULL,
                ),
            480 =>
                array(
                    'name' => 'large or extra-large shrimp',
                    'category' => NULL,
                ),
            481 =>
                array(
                    'name' => 'large red bell pepper',
                    'category' => NULL,
                ),
            482 =>
                array(
                    'name' => 'large red or yellow onion',
                    'category' => NULL,
                ),
            483 =>
                array(
                    'name' => 'large shallot',
                    'category' => NULL,
                ),
            484 =>
                array(
                    'name' => 'large shrimp',
                    'category' => NULL,
                ),
            485 =>
                array(
                    'name' => 'large shrimp (I use 16-20 count size',
                    'category' => NULL,
                ),
            486 =>
                array(
                    'name' => 'large sweet onions',
                    'category' => NULL,
                ),
            487 =>
                array(
                    'name' => 'large turnips',
                    'category' => NULL,
                ),
            488 =>
                array(
                    'name' => 'large white onion',
                    'category' => NULL,
                ),
            489 =>
                array(
                    'name' => 'large yellow onion',
                    'category' => NULL,
                ),
            490 =>
                array(
                    'name' => 'large yellow or white onion',
                    'category' => NULL,
                ),
            491 =>
                array(
                    'name' => 'large zucchini',
                    'category' => NULL,
                ),
            492 =>
                array(
                    'name' => 'leaf',
                    'category' => NULL,
                ),
            493 =>
                array(
                    'name' => 'lean',
                    'category' => NULL,
                ),
            494 =>
                array(
                    'name' => 'lean ground beef',
                    'category' => NULL,
                ),
            495 =>
                array(
                    'name' => 'lean ground beef (OR chorizo',
                    'category' => NULL,
                ),
            496 =>
                array(
                    'name' => 'lean ground turkey',
                    'category' => NULL,
                ),
            497 =>
                array(
                    'name' => 'leaves',
                    'category' => NULL,
                ),
            498 =>
                array(
                    'name' => 'leek',
                    'category' => NULL,
                ),
            499 =>
                array(
                    'name' => 'lemon',
                    'category' => NULL,
                ),
            500 =>
                array(
                    'name' => 'lemon juice',
                    'category' => NULL,
                ),
            501 =>
                array(
                    'name' => 'lemon zest',
                    'category' => NULL,
                ),
            502 =>
                array(
                    'name' => 'lemon zest plus 3 tablespoons lemon juice',
                    'category' => NULL,
                ),
            503 =>
                array(
                    'name' => 'light agave syrup or honey',
                    'category' => NULL,
                ),
            504 =>
                array(
                    'name' => 'light brown sugar',
                    'category' => NULL,
                ),
            505 =>
                array(
                    'name' => 'light or dark brown sugar',
                    'category' => NULL,
                ),
            506 =>
                array(
                    'name' => 'lime',
                    'category' => NULL,
                ),
            507 =>
                array(
                    'name' => 'lime juice',
                    'category' => NULL,
                ),
            508 =>
                array(
                    'name' => 'lime zest',
                    'category' => NULL,
                ),
            509 =>
                array(
                    'name' => 'linguiça or uncured Spanish chorizo',
                    'category' => NULL,
                ),
            510 =>
                array(
                    'name' => 'loin roast',
                    'category' => NULL,
                ),
            511 =>
                array(
                    'name' => 'long-grain white or brown rice',
                    'category' => NULL,
                ),
            512 =>
                array(
                    'name' => 'long-grain white rice',
                    'category' => NULL,
                ),
            513 =>
                array(
                    'name' => 'loose sweet Italian sausage or sausage links',
                    'category' => NULL,
                ),
            514 =>
                array(
                    'name' => 'loosely packed dill',
                    'category' => NULL,
                ),
            515 =>
                array(
                    'name' => 'loosely packed fresh holy-basil leaves or sweet Thai basil leaves',
                    'category' => NULL,
                ),
            516 =>
                array(
                    'name' => 'low-moisture cheese',
                    'category' => NULL,
                ),
            517 =>
                array(
                    'name' => 'low-moisture mozzarella',
                    'category' => NULL,
                ),
            518 =>
                array(
                    'name' => 'low-moisture mozzarella cheese',
                    'category' => NULL,
                ),
            519 =>
                array(
                    'name' => 'low-sodium beef stock or broth',
                    'category' => NULL,
                ),
            520 =>
                array(
                    'name' => 'low-sodium chicken broth ',
                    'category' => NULL,
                ),
            521 =>
                array(
                    'name' => 'low-sodium chicken stock',
                    'category' => NULL,
                ),
            522 =>
                array(
                    'name' => 'low-sodium soy sauce',
                    'category' => NULL,
                ),
            523 =>
                array(
                    'name' => 'low-sodium vegetable or chicken broth',
                    'category' => NULL,
                ),
            524 =>
                array(
                    'name' => 'makrut lime leaves',
                    'category' => NULL,
                ),
            525 =>
                array(
                    'name' => 'makrut lime leaves lightly bruised and torn into pieces',
                    'category' => NULL,
                ),
            526 =>
                array(
                    'name' => 'maple syrup',
                    'category' => NULL,
                ),
            527 =>
                array(
                    'name' => 'margarine',
                    'category' => NULL,
                ),
            528 =>
                array(
                    'name' => 'marinara sauce',
                    'category' => NULL,
                ),
            529 =>
                array(
                    'name' => 'masoor dal',
                    'category' => NULL,
                ),
            530 =>
                array(
                    'name' => 'matchstick carrots',
                    'category' => NULL,
                ),
            531 =>
                array(
                    'name' => 'mayonnaise',
                    'category' => NULL,
                ),
            532 =>
                array(
                    'name' => 'mayonnaise (preferably a sweeter one',
                    'category' => NULL,
                ),
            533 =>
                array(
                    'name' => 'medium Yukon gold potato',
                    'category' => NULL,
                ),
            534 =>
                array(
                    'name' => 'medium bell peppers a mix of red and yellow',
                    'category' => NULL,
                ),
            535 =>
                array(
                    'name' => 'medium carrots',
                    'category' => NULL,
                ),
            536 =>
                array(
                    'name' => 'medium chicken breasts',
                    'category' => NULL,
                ),
            537 =>
                array(
                    'name' => 'medium cloves garlic',
                    'category' => NULL,
                ),
            538 =>
                array(
                    'name' => 'medium green or savoy cabbage',
                    'category' => NULL,
                ),
            539 =>
                array(
                    'name' => 'medium onion',
                    'category' => NULL,
                ),
            540 =>
                array(
                    'name' => 'medium red bell pepper',
                    'category' => NULL,
                ),
            541 =>
                array(
                    'name' => 'medium red onions',
                    'category' => NULL,
                ),
            542 =>
                array(
                    'name' => 'medium red potatoes',
                    'category' => NULL,
                ),
            543 =>
                array(
                    'name' => 'medium scallions',
                    'category' => NULL,
                ),
            544 =>
                array(
                    'name' => 'medium to large raw shrimp',
                    'category' => NULL,
                ),
            545 =>
                array(
                    'name' => 'medium white onion',
                    'category' => NULL,
                ),
            546 =>
                array(
                    'name' => 'medium white onion (half cut into quarters',
                    'category' => NULL,
                ),
            547 =>
                array(
                    'name' => 'medium white or yellow onion',
                    'category' => NULL,
                ),
            548 =>
                array(
                    'name' => 'medium yellow bell peppers',
                    'category' => NULL,
                ),
            549 =>
                array(
                    'name' => 'medium yellow onion',
                    'category' => NULL,
                ),
            550 =>
                array(
                    'name' => 'medium-size white onion',
                    'category' => NULL,
                ),
            551 =>
                array(
                    'name' => 'mild green olives',
                    'category' => NULL,
                ),
            552 =>
                array(
                    'name' => 'mild honey',
                    'category' => NULL,
                ),
            553 =>
                array(
                    'name' => 'milk',
                    'category' => NULL,
                ),
            554 =>
                array(
                    'name' => 'mirin',
                    'category' => NULL,
                ),
            555 =>
                array(
                    'name' => 'miso',
                    'category' => NULL,
                ),
            556 =>
                array(
                    'name' => 'mixed fresh herbs',
                    'category' => NULL,
                ),
            557 =>
                array(
                    'name' => 'mixed fresh mushrooms',
                    'category' => NULL,
                ),
            558 =>
                array(
                    'name' => 'mixed vegetables',
                    'category' => NULL,
                ),
            559 =>
                array(
                    'name' => 'molasses',
                    'category' => NULL,
                ),
            560 =>
                array(
                    'name' => 'mostaccioli pasta',
                    'category' => NULL,
                ),
            561 =>
                array(
                    'name' => 'mozzarella',
                    'category' => NULL,
                ),
            562 =>
                array(
                    'name' => 'mozzarella cheese',
                    'category' => NULL,
                ),
            563 =>
                array(
                    'name' => 'neutral oil',
                    'category' => NULL,
                ),
            564 =>
                array(
                    'name' => 'neutral oil like canola or vegetable',
                    'category' => NULL,
                ),
            565 =>
                array(
                    'name' => 'neutral-flavored oil',
                    'category' => NULL,
                ),
            566 =>
                array(
                    'name' => 'nickel-sized slices unpeeled fresh ginger or 1 tablespoon ground ginger',
                    'category' => NULL,
                ),
            567 =>
                array(
                    'name' => 'nori',
                    'category' => NULL,
                ),
            568 =>
                array(
                    'name' => 'nutmeg',
                    'category' => NULL,
                ),
            569 =>
                array(
                    'name' => 'nutritional yeast',
                    'category' => NULL,
                ),
            570 =>
                array(
                    'name' => 'of 1 lime',
                    'category' => NULL,
                ),
            571 =>
                array(
                    'name' => 'of 1 small lemon',
                    'category' => NULL,
                ),
            572 =>
                array(
                    'name' => 'of 8 manicotti shells',
                    'category' => NULL,
                ),
            573 =>
                array(
                    'name' => 'of French or Italian bread submerged in cold water',
                    'category' => NULL,
                ),
            574 =>
                array(
                    'name' => 'of chicken broth',
                    'category' => NULL,
                ),
            575 =>
                array(
                    'name' => 'of choice )',
                    'category' => NULL,
                ),
            576 =>
                array(
                    'name' => 'of corn',
                    'category' => NULL,
                ),
            577 =>
                array(
                    'name' => 'of garlic',
                    'category' => NULL,
                ),
            578 =>
                array(
                    'name' => 'of torn fresh basil',
                    'category' => NULL,
                ),
            579 =>
                array(
                    'name' => 'oil',
                    'category' => NULL,
                ),
            580 =>
                array(
                    'name' => 'olive oil',
                    'category' => NULL,
                ),
            581 =>
                array(
                    'name' => 'olive or vegetable oil',
                    'category' => NULL,
                ),
            582 =>
                array(
                    'name' => 'onion',
                    'category' => NULL,
                ),
            583 =>
                array(
                    'name' => 'onion powder',
                    'category' => NULL,
                ),
            584 =>
                array(
                    'name' => 'onions/scallions',
                    'category' => NULL,
                ),
            585 =>
                array(
                    'name' => 'optional: fresh or dried parsley',
                    'category' => NULL,
                ),
            586 =>
                array(
                    'name' => 'or cheese spinach or mushroom tortellini',
                    'category' => NULL,
                ),
            587 =>
                array(
                    'name' => 'or cubed avocado',
                    'category' => NULL,
                ),
            588 =>
                array(
                    'name' => 'or dried bay leaves',
                    'category' => NULL,
                ),
            589 =>
                array(
                    'name' => 'or ginger',
                    'category' => NULL,
                ),
            590 =>
                array(
                    'name' => 'or lasagna noodles',
                    'category' => NULL,
                ),
            591 =>
                array(
                    'name' => 'or lemon',
                    'category' => NULL,
                ),
            592 =>
                array(
                    'name' => 'or metal skewers',
                    'category' => NULL,
                ),
            593 =>
                array(
                    'name' => 'or pasilla chiles',
                    'category' => NULL,
                ),
            594 =>
                array(
                    'name' => 'or red bell peppers',
                    'category' => NULL,
                ),
            595 =>
                array(
                    'name' => 'or torn basil leaves',
                    'category' => NULL,
                ),
            596 =>
                array(
                    'name' => 'or vegetable oil',
                    'category' => NULL,
                ),
            597 =>
                array(
                    'name' => 'or white onion',
                    'category' => NULL,
                ),
            598 =>
                array(
                    'name' => 'or white sesame seeds',
                    'category' => NULL,
                ),
            599 =>
                array(
                    'name' => 'or yellow onion',
                    'category' => NULL,
                ),
            600 =>
                array(
                    'name' => 'orange zest',
                    'category' => NULL,
                ),
            601 =>
                array(
                    'name' => 'orecchiette',
                    'category' => NULL,
                ),
            602 =>
                array(
                    'name' => 'oregano',
                    'category' => NULL,
                ),
            603 =>
                array(
                    'name' => 'orzo',
                    'category' => NULL,
                ),
            604 =>
                array(
                    'name' => 'oyster sauce',
                    'category' => NULL,
                ),
            605 =>
                array(
                    'name' => 'oysters',
                    'category' => NULL,
                ),
            606 =>
                array(
                    'name' => 'package corn husks',
                    'category' => NULL,
                ),
            607 =>
                array(
                    'name' => 'packed basil leaves',
                    'category' => NULL,
                ),
            608 =>
                array(
                    'name' => 'packed brown sugar',
                    'category' => NULL,
                ),
            609 =>
                array(
                    'name' => 'packed cup cilantro leaves and tender stems',
                    'category' => NULL,
                ),
            610 =>
                array(
                    'name' => 'packed cup parsley leaves',
                    'category' => NULL,
                ),
            611 =>
                array(
                    'name' => 'packed cup spinach kale or other leafy green',
                    'category' => NULL,
                ),
            612 =>
                array(
                    'name' => 'packed cup whole tomatoes',
                    'category' => NULL,
                ),
            613 =>
                array(
                    'name' => 'packed cups baby spinach',
                    'category' => NULL,
                ),
            614 =>
                array(
                    'name' => 'packed cups baby spinach or kale',
                    'category' => NULL,
                ),
            615 =>
                array(
                    'name' => 'packed spinach leaves',
                    'category' => NULL,
                ),
            616 =>
                array(
                    'name' => 'packed teaspoon palm sugar or light brown sugar',
                    'category' => NULL,
                ),
            617 =>
                array(
                    'name' => 'pan',
                    'category' => NULL,
                ),
            618 =>
                array(
                    'name' => 'panko',
                    'category' => NULL,
                ),
            619 =>
                array(
                    'name' => 'panko bread crumbs',
                    'category' => NULL,
                ),
            620 =>
                array(
                    'name' => 'panko bread crumbs as needed',
                    'category' => NULL,
                ),
            621 =>
                array(
                    'name' => 'panko or homemade bread crumbs',
                    'category' => NULL,
                ),
            622 =>
                array(
                    'name' => 'paprika',
                    'category' => NULL,
                ),
            623 =>
                array(
                    'name' => 'parmesan cheese',
                    'category' => NULL,
                ),
            624 =>
                array(
                    'name' => 'parsley',
                    'category' => NULL,
                ),
            625 =>
                array(
                    'name' => 'parsley leaves and tender stems',
                    'category' => NULL,
                ),
            626 =>
                array(
                    'name' => 'parsnips',
                    'category' => NULL,
                ),
            627 =>
                array(
                    'name' => 'pasta or crusty bread',
                    'category' => NULL,
                ),
            628 =>
                array(
                    'name' => 'pasta shells',
                    'category' => NULL,
                ),
            629 =>
                array(
                    'name' => 'pearl couscous',
                    'category' => NULL,
                ),
            630 =>
                array(
                    'name' => 'pearled barley',
                    'category' => NULL,
                ),
            631 =>
                array(
                    'name' => 'pecorino',
                    'category' => NULL,
                ),
            632 =>
                array(
                    'name' => 'peeled',
                    'category' => NULL,
                ),
            633 =>
                array(
                    'name' => 'peeled and deveined medium shrimp',
                    'category' => NULL,
                ),
            634 =>
                array(
                    'name' => 'peeled shrimp or boneless chicken',
                    'category' => NULL,
                ),
            635 =>
                array(
                    'name' => 'penne pasta',
                    'category' => NULL,
                ),
            636 =>
                array(
                    'name' => 'peppers',
                    'category' => NULL,
                ),
            637 =>
                array(
                    'name' => 'pie crust or whole wheat yeasted olive oil crust',
                    'category' => NULL,
                ),
            638 =>
                array(
                    'name' => 'piece fresh ginger',
                    'category' => NULL,
                ),
            639 =>
                array(
                    'name' => 'piece ginger',
                    'category' => NULL,
                ),
            640 =>
                array(
                    'name' => 'piece of fresh ginger',
                    'category' => NULL,
                ),
            641 =>
                array(
                    'name' => 'pinch cayenne pepper',
                    'category' => NULL,
                ),
            642 =>
                array(
                    'name' => 'pinch salt',
                    'category' => NULL,
                ),
            643 =>
                array(
                    'name' => 'pinto beans',
                    'category' => NULL,
                ),
            644 =>
                array(
                    'name' => 'pitted green olives',
                    'category' => NULL,
                ),
            645 =>
                array(
                    'name' => 'plain Greek yogurt',
                    'category' => NULL,
                ),
            646 =>
                array(
                    'name' => 'plain whole-milk yogurt',
                    'category' => NULL,
                ),
            647 =>
                array(
                    'name' => 'plum tomatoes',
                    'category' => NULL,
                ),
            648 =>
                array(
                    'name' => 'plus 1 tablespoon low-sodium soy sauce',
                    'category' => NULL,
                ),
            649 =>
                array(
                    'name' => 'plus 1 teaspoon',
                    'category' => NULL,
                ),
            650 =>
                array(
                    'name' => 'plus 1 teaspoon smoked paprika',
                    'category' => NULL,
                ),
            651 =>
                array(
                    'name' => 'plus 2 tablespoons chicken stock',
                    'category' => NULL,
                ),
            652 =>
                array(
                    'name' => 'plus 2 tablespoons distilled white vinegar',
                    'category' => NULL,
                ),
            653 =>
                array(
                    'name' => 'plus 2 tablespoons extra-virgin olive oil',
                    'category' => NULL,
                ),
            654 =>
                array(
                    'name' => 'pods',
                    'category' => NULL,
                ),
            655 =>
                array(
                    'name' => 'pork fennel sausages',
                    'category' => NULL,
                ),
            656 =>
                array(
                    'name' => 'pork shoulder roast',
                    'category' => NULL,
                ),
            657 =>
                array(
                    'name' => 'potato',
                    'category' => NULL,
                ),
            658 =>
                array(
                    'name' => 'potato starch or cornstarch',
                    'category' => NULL,
                ),
            659 =>
                array(
                    'name' => 'potatoes (medium to large',
                    'category' => NULL,
                ),
            660 =>
                array(
                    'name' => 'potatoes and cut into 1/4-inch slices',
                    'category' => NULL,
                ),
            661 =>
                array(
                    'name' => 'pozole and well',
                    'category' => NULL,
                ),
            662 =>
                array(
                    'name' => 'pre- rib eye beef )',
                    'category' => NULL,
                ),
            663 =>
                array(
                    'name' => 'prepared horseradish',
                    'category' => NULL,
                ),
            664 =>
                array(
                    'name' => 'prepared mustard',
                    'category' => NULL,
                ),
            665 =>
                array(
                    'name' => 'prepared yellow mustard',
                    'category' => NULL,
                ),
            666 =>
                array(
                    'name' => 'quart chicken stock',
                    'category' => NULL,
                ),
            667 =>
                array(
                    'name' => 'quick-cooking polenta',
                    'category' => NULL,
                ),
            668 =>
                array(
                    'name' => 'radishes',
                    'category' => NULL,
                ),
            669 =>
                array(
                    'name' => 'ranch dressing',
                    'category' => NULL,
                ),
            670 =>
                array(
                    'name' => 'red bell pepper',
                    'category' => NULL,
                ),
            671 =>
                array(
                    'name' => 'red chiles or a teaspoon of cayenne',
                    'category' => NULL,
                ),
            672 =>
                array(
                    'name' => 'red kale',
                    'category' => NULL,
                ),
            673 =>
                array(
                    'name' => 'red pepper',
                    'category' => NULL,
                ),
            674 =>
                array(
                    'name' => 'red pepper flakes',
                    'category' => NULL,
                ),
            675 =>
                array(
                    'name' => 'red wine vinegar',
                    'category' => NULL,
                ),
            676 =>
                array(
                    'name' => 'red-pepper flakes',
                    'category' => NULL,
                ),
            677 =>
                array(
                    'name' => 'red-pepper flakes chile sauce or chile',
                    'category' => NULL,
                ),
            678 =>
                array(
                    'name' => 'refrigerated or cheese tortellini ',
                    'category' => NULL,
                ),
            679 =>
                array(
                    'name' => 'regular soy sauce',
                    'category' => NULL,
                ),
            680 =>
                array(
                    'name' => 'rice',
                    'category' => NULL,
                ),
            681 =>
                array(
                    'name' => 'rice or noodles',
                    'category' => NULL,
                ),
            682 =>
                array(
                    'name' => 'rice or orzo',
                    'category' => NULL,
                ),
            683 =>
                array(
                    'name' => 'rice vermicelli',
                    'category' => NULL,
                ),
            684 =>
                array(
                    'name' => 'rice vinegar',
                    'category' => NULL,
                ),
            685 =>
                array(
                    'name' => 'ricotta',
                    'category' => NULL,
                ),
            686 =>
                array(
                    'name' => 'ricotta cheese',
                    'category' => NULL,
                ),
            687 =>
                array(
                    'name' => 'ricotta cheese stuffing',
                    'category' => NULL,
                ),
            688 =>
                array(
                    'name' => 'rigatoni',
                    'category' => NULL,
                ),
            689 =>
                array(
                    'name' => 'ripe tomatoes with a little of their juice',
                    'category' => NULL,
                ),
            690 =>
                array(
                    'name' => 'rockfish',
                    'category' => NULL,
                ),
            691 =>
                array(
                    'name' => 'rosemary',
                    'category' => NULL,
                ),
            692 =>
                array(
                    'name' => 'rosemary sprig',
                    'category' => NULL,
                ),
            693 =>
                array(
                    'name' => 'rough roughly basil ',
                    'category' => NULL,
                ),
            694 =>
                array(
                    'name' => 'rough roughly escarole Tuscan kale or radicchio',
                    'category' => NULL,
                ),
            695 =>
                array(
                    'name' => 'rough roughly parsley',
                    'category' => NULL,
                ),
            696 =>
                array(
                    'name' => 'russet or Yukon gold potatoes',
                    'category' => NULL,
                ),
            697 =>
                array(
                    'name' => 'russet potatoes',
                    'category' => NULL,
                ),
            698 =>
                array(
                    'name' => 'sage sprig',
                    'category' => NULL,
                ),
            699 =>
                array(
                    'name' => 'sake',
                    'category' => NULL,
                ),
            700 =>
                array(
                    'name' => 'salmon fillet',
                    'category' => NULL,
                ),
            701 =>
                array(
                    'name' => 'salt',
                    'category' => NULL,
                ),
            702 =>
                array(
                    'name' => 'salt )',
                    'category' => NULL,
                ),
            703 =>
                array(
                    'name' => 'salt and black pepper',
                    'category' => NULL,
                ),
            704 =>
                array(
                    'name' => 'salt and freshly cracked black pepper',
                    'category' => NULL,
                ),
            705 =>
                array(
                    'name' => 'salt and freshly ground black pepper',
                    'category' => NULL,
                ),
            706 =>
                array(
                    'name' => 'salt and freshly ground pepper',
                    'category' => NULL,
                ),
            707 =>
                array(
                    'name' => 'salt and ground black pepper',
                    'category' => NULL,
                ),
            708 =>
                array(
                    'name' => 'salt and pepper',
                    'category' => NULL,
                ),
            709 =>
                array(
                    'name' => 'salted butter',
                    'category' => NULL,
                ),
            710 =>
                array(
                    'name' => 'salt ',
                    'category' => NULL,
                ),
            711 =>
                array(
                    'name' => 'sansho pepper )',
                    'category' => NULL,
                ),
            712 =>
                array(
                    'name' => 'sauce',
                    'category' => NULL,
                ),
            713 =>
                array(
                    'name' => 'sauce or apple cider vinegar',
                    'category' => NULL,
                ),
            714 =>
                array(
                    'name' => 'scallions',
                    'category' => NULL,
                ),
            715 =>
                array(
                    'name' => 'sea salt',
                    'category' => NULL,
                ),
            716 =>
                array(
                    'name' => 'sea salt and black pepper',
                    'category' => NULL,
                ),
            717 =>
                array(
                    'name' => 'sea salt and freshly ground black pepper',
                    'category' => NULL,
                ),
            718 =>
                array(
                    'name' => 'seasoned birria fat plus&nbsp;1 cup leftover birria meat',
                    'category' => NULL,
                ),
            719 =>
                array(
                    'name' => 'seasoning',
                    'category' => NULL,
                ),
            720 =>
                array(
                    'name' => 'sesame oil',
                    'category' => NULL,
                ),
            721 =>
                array(
                    'name' => 'sesame oil or chile oil',
                    'category' => NULL,
                ),
            722 =>
                array(
                    'name' => 'sesame seeds',
                    'category' => NULL,
                ),
            723 =>
                array(
                    'name' => 'shallots',
                    'category' => NULL,
                ),
            724 =>
                array(
                    'name' => 'sharp Cheddar',
                    'category' => NULL,
                ),
            725 =>
                array(
                    'name' => 'sharp white Cheddar',
                    'category' => NULL,
                ),
            726 =>
                array(
                    'name' => 'shelf-stable or refrigerated potato gnocchi',
                    'category' => NULL,
                ),
            727 =>
                array(
                    'name' => 'shelf-stable potato gnocchi',
                    'category' => NULL,
                ),
            728 =>
                array(
                    'name' => 'shells',
                    'category' => NULL,
                ),
            729 =>
                array(
                    'name' => 'sherry vinegar',
                    'category' => NULL,
                ),
            730 =>
                array(
                    'name' => 'shiitake mushrooms',
                    'category' => NULL,
                ),
            731 =>
                array(
                    'name' => 'short-grain white rice',
                    'category' => NULL,
                ),
            732 =>
                array(
                    'name' => 'sirloin or flank steak',
                    'category' => NULL,
                ),
            733 =>
                array(
                    'name' => 'sirloin steak',
                    'category' => NULL,
                ),
            734 =>
                array(
                    'name' => 'skin-on salmon fillets',
                    'category' => NULL,
                ),
            735 =>
                array(
                    'name' => 'skinless',
                    'category' => NULL,
                ),
            736 =>
                array(
                    'name' => 'skinless chicken breasts )',
                    'category' => NULL,
                ),
            737 =>
                array(
                    'name' => 'skinless hake',
                    'category' => NULL,
                ),
            738 =>
                array(
                    'name' => 'slices smoked ham',
                    'category' => NULL,
                ),
            739 =>
                array(
                    'name' => 'small Yukon gold potatoes',
                    'category' => NULL,
                ),
            740 =>
                array(
                    'name' => 'small bone-in skin-on chicken thighs',
                    'category' => NULL,
                ),
            741 =>
                array(
                    'name' => 'small bunch kale',
                    'category' => NULL,
                ),
            742 =>
                array(
                    'name' => 'small bunch of Fresh Basil',
                    'category' => NULL,
                ),
            743 =>
                array(
                    'name' => 'small dried red chiles',
                    'category' => NULL,
                ),
            744 =>
                array(
                    'name' => 'small fennel bulb',
                    'category' => NULL,
                ),
            745 =>
                array(
                    'name' => 'small garlic clove',
                    'category' => NULL,
                ),
            746 =>
                array(
                    'name' => 'small green cabbage',
                    'category' => NULL,
                ),
            747 =>
                array(
                    'name' => 'small head iceberg lettuce',
                    'category' => NULL,
                ),
            748 =>
                array(
                    'name' => 'small onion',
                    'category' => NULL,
                ),
            749 =>
                array(
                    'name' => 'small or 2 large leeks',
                    'category' => NULL,
                ),
            750 =>
                array(
                    'name' => 'small peeled and small yellow onion',
                    'category' => NULL,
                ),
            751 =>
                array(
                    'name' => 'small red onion',
                    'category' => NULL,
                ),
            752 =>
                array(
                    'name' => 'small shallot',
                    'category' => NULL,
                ),
            753 =>
                array(
                    'name' => 'small tomatoes',
                    'category' => NULL,
                ),
            754 =>
                array(
                    'name' => 'small white onion',
                    'category' => NULL,
                ),
            755 =>
                array(
                    'name' => 'small yellow onion',
                    'category' => NULL,
                ),
            756 =>
                array(
                    'name' => 'small-to-medium lamb shanks',
                    'category' => NULL,
                ),
            757 =>
                array(
                    'name' => 'smoked ghost-chile powder or smoked hot paprika',
                    'category' => NULL,
                ),
            758 =>
                array(
                    'name' => 'smoked paprika',
                    'category' => NULL,
                ),
            759 =>
                array(
                    'name' => 'smoked turkey sausage',
                    'category' => NULL,
                ),
            760 =>
                array(
                    'name' => 'soft herbs',
                    'category' => NULL,
                ),
            761 =>
                array(
                    'name' => 'soft/silken tofu )',
                    'category' => NULL,
                ),
            762 =>
                array(
                    'name' => 'sour cream',
                    'category' => NULL,
                ),
            763 =>
                array(
                    'name' => 'soy sauce',
                    'category' => NULL,
                ),
            764 =>
                array(
                    'name' => 'soy sauce ',
                    'category' => NULL,
                ),
            765 =>
                array(
                    'name' => 'spaghetti',
                    'category' => NULL,
                ),
            766 =>
                array(
                    'name' => 'spare ribs',
                    'category' => NULL,
                ),
            767 =>
                array(
                    'name' => 'spray',
                    'category' => NULL,
                ),
            768 =>
                array(
                    'name' => 'sprigs fresh rosemary',
                    'category' => NULL,
                ),
            769 =>
                array(
                    'name' => 'sprigs or ½ teaspoon dried thyme',
                    'category' => NULL,
                ),
            770 =>
                array(
                    'name' => 'squash',
                    'category' => NULL,
                ),
            771 =>
                array(
                    'name' => 'squeezed juice of half a lemon',
                    'category' => NULL,
                ),
            772 =>
                array(
                    'name' => 'sriracha ',
                    'category' => NULL,
                ),
            773 =>
                array(
                    'name' => 'stalks',
                    'category' => NULL,
                ),
            774 =>
                array(
                    'name' => 'steak',
                    'category' => NULL,
                ),
            775 =>
                array(
                    'name' => 'steamed jasmine rice ',
                    'category' => NULL,
                ),
            776 =>
                array(
                    'name' => 'stick',
                    'category' => NULL,
                ),
            777 =>
                array(
                    'name' => 'store-bought gnocchi',
                    'category' => NULL,
                ),
            778 =>
                array(
                    'name' => 'store-bought or homemade chili powder',
                    'category' => NULL,
                ),
            779 =>
                array(
                    'name' => 'sturdy greens',
                    'category' => NULL,
                ),
            780 =>
                array(
                    'name' => 'sugar',
                    'category' => NULL,
                ),
            781 =>
                array(
                    'name' => 'sugar ',
                    'category' => NULL,
                ),
            782 =>
                array(
                    'name' => 'sun-dried tomatoes',
                    'category' => NULL,
                ),
            783 =>
                array(
                    'name' => 'sun-dried tomatoes packed in oil',
                    'category' => NULL,
                ),
            784 =>
                array(
                    'name' => 'sunflower oil or other neutral oil',
                    'category' => NULL,
                ),
            785 =>
                array(
                    'name' => 'sushi nori',
                    'category' => NULL,
                ),
            786 =>
                array(
                    'name' => 'sweet Italian pork sausage',
                    'category' => NULL,
                ),
            787 =>
                array(
                    'name' => 'sweet or spicy Italian sausage',
                    'category' => NULL,
                ),
            788 =>
                array(
                    'name' => 'sweet paprika',
                    'category' => NULL,
                ),
            789 =>
                array(
                    'name' => 'table salt',
                    'category' => NULL,
                ),
            790 =>
                array(
                    'name' => 'teaspoon salt',
                    'category' => NULL,
                ),
            791 =>
                array(
                    'name' => 'tender stems of cilantro with leaves',
                    'category' => NULL,
                ),
            792 =>
                array(
                    'name' => 'thick-cut bacon',
                    'category' => NULL,
                ),
            793 =>
                array(
                    'name' => 'thinly 1 pound meats such as Italian cold cuts deli ham',
                    'category' => NULL,
                ),
            794 =>
                array(
                    'name' => 'thyme',
                    'category' => NULL,
                ),
            795 =>
                array(
                    'name' => 'thyme leaves',
                    'category' => NULL,
                ),
            796 =>
                array(
                    'name' => 'thyme sprigs',
                    'category' => NULL,
                ),
            797 =>
                array(
                    'name' => 'to 2 tablespoons chile crisp or chile paste',
                    'category' => NULL,
                ),
            798 =>
                array(
                    'name' => 'to taste',
                    'category' => NULL,
                ),
            799 =>
                array(
                    'name' => 'tomato paste',
                    'category' => NULL,
                ),
            800 =>
                array(
                    'name' => 'tomato paste ',
                    'category' => NULL,
                ),
            801 =>
                array(
                    'name' => 'tomato purée',
                    'category' => NULL,
                ),
            802 =>
                array(
                    'name' => 'tomato purée or sauce',
                    'category' => NULL,
                ),
            803 =>
                array(
                    'name' => 'tomatoes',
                    'category' => NULL,
                ),
            804 =>
                array(
                    'name' => 'torn basil leaves',
                    'category' => NULL,
                ),
            805 =>
                array(
                    'name' => 'tortilla chips',
                    'category' => NULL,
                ),
            806 =>
                array(
                    'name' => 'tortillas',
                    'category' => NULL,
                ),
            807 =>
                array(
                    'name' => 'trimmed radishes',
                    'category' => NULL,
                ),
            808 =>
                array(
                    'name' => 'tsp. dried parsley',
                    'category' => NULL,
                ),
            809 =>
                array(
                    'name' => 'tsp. dried thyme',
                    'category' => NULL,
                ),
            810 =>
                array(
                    'name' => 'tsp. pepper',
                    'category' => NULL,
                ),
            811 =>
                array(
                    'name' => 'turkey broth',
                    'category' => NULL,
                ),
            812 =>
                array(
                    'name' => 'turkey meat',
                    'category' => NULL,
                ),
            813 =>
                array(
                    'name' => 'turnips',
                    'category' => NULL,
                ),
            814 =>
                array(
                    'name' => 'uncooked Japanese short-grain rice',
                    'category' => NULL,
                ),
            815 =>
                array(
                    'name' => 'uncooked long-grain rice',
                    'category' => NULL,
                ),
            816 =>
                array(
                    'name' => 'uncooked spaghetti noodles',
                    'category' => NULL,
                ),
            817 =>
                array(
                    'name' => 'unsalted butter',
                    'category' => NULL,
                ),
            818 =>
                array(
                    'name' => 'unsalted butter cubed',
                    'category' => NULL,
                ),
            819 =>
                array(
                    'name' => 'unsalted butter ',
                    'category' => NULL,
                ),
            820 =>
                array(
                    'name' => 'unseasoned rice vinegar or soy sauce',
                    'category' => NULL,
                ),
            821 =>
                array(
                    'name' => 'unsweetened coconut milk',
                    'category' => NULL,
                ),
            822 =>
                array(
                    'name' => 'vegetable broth',
                    'category' => NULL,
                ),
            823 =>
                array(
                    'name' => 'vegetable oil',
                    'category' => NULL,
                ),
            824 =>
                array(
                    'name' => 'vegetable oil ',
                    'category' => NULL,
                ),
            825 =>
                array(
                    'name' => 'vegetable or chicken stock',
                    'category' => NULL,
                ),
            826 =>
                array(
                    'name' => 'vegetable or chicken stock ',
                    'category' => NULL,
                ),
            827 =>
                array(
                    'name' => 'vegetable stock or water',
                    'category' => NULL,
                ),
            828 =>
                array(
                    'name' => 'vegetable stock ',
                    'category' => NULL,
                ),
            829 =>
                array(
                    'name' => 'vegetables (such as snap or snow peas',
                    'category' => NULL,
                ),
            830 =>
                array(
                    'name' => 'venison loin or leg',
                    'category' => NULL,
                ),
            831 =>
                array(
                    'name' => 'venison roast (shoulder or neck is best',
                    'category' => NULL,
                ),
            832 =>
                array(
                    'name' => 'verde chicken',
                    'category' => NULL,
                ),
            833 =>
                array(
                    'name' => 'vodka depending on how boozy you want it',
                    'category' => NULL,
                ),
            834 =>
                array(
                    'name' => 'wash: 1 large egg with 1 Tablespoon water',
                    'category' => NULL,
                ),
            835 =>
                array(
                    'name' => 'water',
                    'category' => NULL,
                ),
            836 =>
                array(
                    'name' => 'wedges',
                    'category' => NULL,
                ),
            837 =>
                array(
                    'name' => 'wedges for serving',
                    'category' => NULL,
                ),
            838 =>
                array(
                    'name' => 'white and black sesame seeds',
                    'category' => NULL,
                ),
            839 =>
                array(
                    'name' => 'white beans',
                    'category' => NULL,
                ),
            840 =>
                array(
                    'name' => 'white beans and',
                    'category' => NULL,
                ),
            841 =>
                array(
                    'name' => 'white beans such as cannellini or Great Northern',
                    'category' => NULL,
                ),
            842 =>
                array(
                    'name' => 'white fish fillets',
                    'category' => NULL,
                ),
            843 =>
                array(
                    'name' => 'white miso paste',
                    'category' => NULL,
                ),
            844 =>
                array(
                    'name' => 'white or brown rice',
                    'category' => NULL,
                ),
            845 =>
                array(
                    'name' => 'white or light miso',
                    'category' => NULL,
                ),
            846 =>
                array(
                    'name' => 'white sesame seeds',
                    'category' => NULL,
                ),
            847 =>
                array(
                    'name' => 'white wine',
                    'category' => NULL,
                ),
            848 =>
                array(
                    'name' => 'white wine or chicken stock',
                    'category' => NULL,
                ),
            849 =>
                array(
                    'name' => 'whole bird’s-eye chilies or other fiery chili',
                    'category' => NULL,
                ),
            850 =>
                array(
                    'name' => 'whole black peppercorns',
                    'category' => NULL,
                ),
            851 =>
                array(
                    'name' => 'whole cloves',
                    'category' => NULL,
                ),
            852 =>
                array(
                    'name' => 'whole egg',
                    'category' => NULL,
                ),
            853 =>
                array(
                    'name' => 'whole milk',
                    'category' => NULL,
                ),
            854 =>
                array(
                    'name' => 'whole red chiles such as Tianjin or chile de árbol',
                    'category' => NULL,
                ),
            855 =>
                array(
                    'name' => 'whole tomatoes',
                    'category' => NULL,
                ),
            856 =>
                array(
                    'name' => 'whole tomatoes packed in juice',
                    'category' => NULL,
                ),
            857 =>
                array(
                    'name' => 'whole tomatoes ',
                    'category' => NULL,
                ),
            858 =>
                array(
                    'name' => 'whole wheat pâte brisée pie crust',
                    'category' => NULL,
                ),
            859 =>
                array(
                    'name' => 'whole-milk ricotta',
                    'category' => NULL,
                ),
            860 =>
                array(
                    'name' => 'whole-milk yogurt',
                    'category' => NULL,
                ),
            861 =>
                array(
                    'name' => 'whole-milk yogurt or sour cream',
                    'category' => NULL,
                ),
            862 =>
                array(
                    'name' => 'whole-wheat hamburger buns',
                    'category' => NULL,
                ),
            863 =>
                array(
                    'name' => 'yellow mustard',
                    'category' => NULL,
                ),
            864 =>
                array(
                    'name' => 'yellow onion',
                    'category' => NULL,
                ),
            865 =>
                array(
                    'name' => 'yolks',
                    'category' => NULL,
                ),
            866 =>
                array(
                    'name' => 'za’atar',
                    'category' => NULL,
                ),
            867 =>
                array(
                    'name' => 'zest of 1 lemon',
                    'category' => NULL,
                ),
            868 =>
                array(
                    'name' => 'zest of 1 small lemon',
                    'category' => NULL,
                ),
            869 =>
                array(
                    'name' => 'ziti',
                    'category' => NULL,
                ),
            870 =>
                array(
                    'name' => 'zucchini',
                    'category' => NULL,
                ),
            871 =>
                array(
                    'name' => ' fresh parsley',
                    'category' => NULL,
                ),
            872 =>
                array(
                    'name' => ' olive oil',
                    'category' => NULL,
                ),
            873 =>
                array(
                    'name' => '¼ cup extra-virgin olive oil',
                    'category' => NULL,
                ),
            874 =>
                array(
                    'name' => '¼ cup flour',
                    'category' => NULL,
                ),
            875 =>
                array(
                    'name' => '¼ cup fresh parsley',
                    'category' => NULL,
                ),
            876 =>
                array(
                    'name' => '¼ cup roughly fresh cilantro',
                    'category' => NULL,
                ),
            877 =>
                array(
                    'name' => '¼ cup soy sauce',
                    'category' => NULL,
                ),
            878 =>
                array(
                    'name' => '¼ teaspoon black pepper',
                    'category' => NULL,
                ),
            879 =>
                array(
                    'name' => '¼ teaspoon cayenne pepper',
                    'category' => NULL,
                ),
            880 =>
                array(
                    'name' => '¼ teaspoon ground cinnamon',
                    'category' => NULL,
                ),
            881 =>
                array(
                    'name' => '¼ teaspoon salt',
                    'category' => NULL,
                ),
            882 =>
                array(
                    'name' => '½ Tbsp soy sauce',
                    'category' => NULL,
                ),
            883 =>
                array(
                    'name' => '½ batch of Pomodoro sauce',
                    'category' => NULL,
                ),
            884 =>
                array(
                    'name' => '½ cup Kalamata olives',
                    'category' => NULL,
                ),
            885 =>
                array(
                    'name' => '½ cup Parmesan cheese',
                    'category' => NULL,
                ),
            886 =>
                array(
                    'name' => '½ cup canned black beans',
                    'category' => NULL,
                ),
            887 =>
                array(
                    'name' => '½ cup cheddar cheese (or mozzarella cheese',
                    'category' => NULL,
                ),
            888 =>
                array(
                    'name' => '½ cup crumbled feta cheese',
                    'category' => NULL,
                ),
            889 =>
                array(
                    'name' => '½ cup frozen or canned corn',
                    'category' => NULL,
                ),
            890 =>
                array(
                    'name' => '½ cup heavy cream',
                    'category' => NULL,
                ),
            891 =>
                array(
                    'name' => '½ cup olive oil',
                    'category' => NULL,
                ),
            892 =>
                array(
                    'name' => '½ cup whole-milk Ricotta cheese',
                    'category' => NULL,
                ),
            893 =>
                array(
                    'name' => '½ large onion',
                    'category' => NULL,
                ),
            894 =>
                array(
                    'name' => '½ lb ground pork )',
                    'category' => NULL,
                ),
            895 =>
                array(
                    'name' => '½ lemon',
                    'category' => NULL,
                ),
            896 =>
                array(
                    'name' => '½ pounds 90/10 ground sirloin',
                    'category' => NULL,
                ),
            897 =>
                array(
                    'name' => '½ pounds boneless skinless chicken thighs',
                    'category' => NULL,
                ),
            898 =>
                array(
                    'name' => '½ pounds ground pork',
                    'category' => NULL,
                ),
            899 =>
                array(
                    'name' => '½ red onion',
                    'category' => NULL,
                ),
            900 =>
                array(
                    'name' => '½ tablespoons coarse salt and ½ teaspoon pepper',
                    'category' => NULL,
                ),
            901 =>
                array(
                    'name' => '½ tablespoons fresh rosemary',
                    'category' => NULL,
                ),
            902 =>
                array(
                    'name' => '½ teaspoon black pepper',
                    'category' => NULL,
                ),
            903 =>
                array(
                    'name' => '½ teaspoon dried oregano',
                    'category' => NULL,
                ),
            904 =>
                array(
                    'name' => '½ teaspoon kosher salt',
                    'category' => NULL,
                ),
            905 =>
                array(
                    'name' => '½ teaspoon lemon zest',
                    'category' => NULL,
                ),
            906 =>
                array(
                    'name' => '½ teaspoon red pepper flakes',
                    'category' => NULL,
                ),
            907 =>
                array(
                    'name' => '½ teaspoon salt',
                    'category' => NULL,
                ),
            908 =>
                array(
                    'name' => '½ teaspoon smoked paprika',
                    'category' => NULL,
                ),
            909 =>
                array(
                    'name' => '½ teaspoons garam masala',
                    'category' => NULL,
                ),
            910 =>
                array(
                    'name' => '½ tsp black pepper',
                    'category' => NULL,
                ),
            911 =>
                array(
                    'name' => '½-1 cup mozzarella OR Mexican-blend cheese',
                    'category' => NULL,
                ),
            912 =>
                array(
                    'name' => '⅓ cup red wine vinegar',
                    'category' => NULL,
                ),
            913 =>
                array(
                    'name' => '⅛ teaspoon ground black pepper',
                    'category' => NULL,
                ),
        );

        // Tag mappings (ingredient name => [tag slugs])
        $tagMappings = array(
            ')' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '1.4 lb small potatoes )' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '1/3 cup freshly Parmesan' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            '1½ cup rice vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '1½ teaspoons Italian seasoning' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '1½ teaspoons freshly ground black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '2 - 2.4lb medium potatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '2 tbsp unsalted butter' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            '2 and 1/4 teaspoons  instant or active-dry yeast ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '2½ Tbsp doubanjiang' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '3/4–1 pound cheese *' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            '350g Shortcut Pasta )' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            '4.4oz Sun Dried Tomatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '5.3oz Mascarpone' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            '500g White Onions' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            '60ml Olive Oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Asian Pear )' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Balsamic Glaze' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Bolognese sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Cheddar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'Cheddar or Manchego cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'Chinkiang vinegar or balsamic vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Country-style pork ribs*' =>
                array(
                    0 => 'gluten-free',
                ),
            'Crystal hot sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Dijon mustard' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'EACH: Salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'FRANKS RedHot Original Cayenne Pepper Sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Foil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Fresno chiles or jalapeños' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Gruyère' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Italian parsley' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Italian seasoning' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Jarlsberg cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'Large pinch of cayenne' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Madras curry powder' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Masa Harina' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'McCormick Grill Mates Garlic &amp; Herb Seasoning Mix' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Mexican Rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Mexican crema' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Naan' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'New Zealand baby lamb' =>
                array(
                    0 => 'gluten-free',
                ),
            'Parmesan' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'Parmesan for serving' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'Parmesan or Gruyère' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'Parmesan or Pecorino' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'Parmesan or Pecorino Romano' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'Peas' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Pecorino Romano or Parmesan' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'Pinch fine sea salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Pinch of dried oregano' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Pinch of ground cloves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Pinch of nutmeg' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Pinch of red pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Pineapple' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Pork loin' =>
                array(
                    0 => 'gluten-free',
                ),
            'Rub' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Safflower' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Shaoxing wine or dry sherry' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Simple Tomato Sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Swiss cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'Tabasco' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Tablespoon  granulated sugar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Tajín Clásico' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Tbsp. balsamic vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Tbsp. high heat tolerant cooking fat (duck fat' =>
                array(
                    0 => 'gluten-free',
                ),
            'Tbsp. tapioca starch' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Tbsp. tomato paste' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Thai thin soy sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'Tuscan kale' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'Worcestershire sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Worcestershire sauce or soy sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'Yukon gold potatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'Yum Sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'adobo sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'aged white Cheddar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'egg',
                    3 => 'vegetarian',
                ),
            'all-purpose flour' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'all-purpose flour ' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'almonds' =>
                array(
                    0 => 'gluten-free',
                    1 => 'nut-allergen',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'ancho chile powder' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'anchovy' =>
                array(
                    0 => 'gluten-free',
                    1 => 'fish',
                ),
            'and black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'and black pepper ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'and cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'and freshly cracked black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'and freshly ground black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'and freshly ground pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'and ground black or Sichuan pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'and ground black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'and pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'and zest of 2 limes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'apple cider vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'arborio or carnaroli rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'asparagus' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'avocado' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'baby kale' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'baby potatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'baby spinach' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'baby spinach or baby kale' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'bacon' =>
                array(
                    0 => 'gluten-free',
                ),
            'baharat' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'baking potatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'baking powder' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'baking soda' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'balsamic vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'basil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'basil leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'basil or mint for garnish' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'basmati or jasmine rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'basmati rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'basting brush' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'bay leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'beef broth (or water' =>
                array(
                    0 => 'gluten-free',
                ),
            'beef or chicken stock' =>
                array(
                    0 => 'gluten-free',
                ),
            'beef stew meat' =>
                array(
                    0 => 'gluten-free',
                ),
            'beef stock' =>
                array(
                    0 => 'gluten-free',
                ),
            'beef stock/broth' =>
                array(
                    0 => 'gluten-free',
                ),
            'beef tenderloin' =>
                array(
                    0 => 'gluten-free',
                ),
            'bell pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'bell pepper )' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'berries' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'black or brown mustard seeds' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'block firm tofu' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'blue cheese crumbles' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'boiling water' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'bone 1 1/4 pounds' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'bone-in beef shoulder' =>
                array(
                    0 => 'gluten-free',
                ),
            'bone-in chicken thighs or breasts' =>
                array(
                    0 => 'gluten-free',
                ),
            'bone-in pork chops' =>
                array(
                    0 => 'gluten-free',
                ),
            'bone-in pork-shoulder steaks' =>
                array(
                    0 => 'gluten-free',
                ),
            'bonnet pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'bouquet garni made with a bay leaf' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'bread' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'broccoli' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'broccoli florets' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'broth (' =>
                array(
                    0 => 'gluten-free',
                ),
            'brown sugar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'brussels sprouts' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'brussels sprouts (or cruciferous vegetables like broccoli' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'bulb' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'butter' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'buttermilk' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'butter ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'button mushrooms' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cabbage' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'can fire- tomatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'can tomatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'canola oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'canola or vegetable oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'capers' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'carrots' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cashews' =>
                array(
                    0 => 'gluten-free',
                    1 => 'nut-allergen',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'cauliflower' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cayenne pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'celery' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cheddar cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'cherry or grape tomatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cherry or other small tomatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cherry tomatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'chicken' =>
                array(
                    0 => 'gluten-free',
                ),
            'chicken broth' =>
                array(
                    0 => 'gluten-free',
                ),
            'chicken broth or stock' =>
                array(
                    0 => 'gluten-free',
                ),
            'chicken broth or water' =>
                array(
                    0 => 'gluten-free',
                ),
            'chicken or vegetable stock' =>
                array(
                    0 => 'gluten-free',
                ),
            'chicken stock' =>
                array(
                    0 => 'gluten-free',
                ),
            'chicken thighs' =>
                array(
                    0 => 'gluten-free',
                ),
            'chiles' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'chiles de árbol' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'chiles in adobo' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'chiles or more' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'chili pork' =>
                array(
                    0 => 'gluten-free',
                ),
            'chili powder' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'chipotle or ancho chile powder' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'chips' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'chives' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cider vinegar or rice wine vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cilantro' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cilantro leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cilantro leaves and tender stems' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cilantro or parsley' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cilantro sprigs' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cinnamon stick' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cloves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cloves of garlic' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'coarse kosher salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'coconut milk' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'coconut milk (if necessary' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'coconut oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'coconut or canola oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'coconut palm sugar or dark brown sugar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'coconut vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'combination of chile sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'container whole-milk ricotta ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'cooked beans rinsed and drained if canned' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cooked bone-in ham' =>
                array(
                    0 => 'gluten-free',
                ),
            'cooked chicken' =>
                array(
                    0 => 'gluten-free',
                ),
            'cooked chicken (or 1.5 lbs raw' =>
                array(
                    0 => 'gluten-free',
                ),
            'cooked ham' =>
                array(
                    0 => 'gluten-free',
                ),
            'cooked jasmine or other long-grain white rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'cooked long grain white rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'cooked mashed potatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cooked rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cooked spinach' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'corn ((kernels removed from cob' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'corn starch (+ 2-3 tbsp water' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'corn tortillas' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'cornstarch' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'country bread' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'cream' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'cream cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'crumbled queso fresco or cotija cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'cumin' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cumin seeds' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'cured meat' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'curry powder' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dark beer' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'dark soy sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'dill' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dill seed' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'distilled white vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'ditalini' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'drained capers' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dried Mexican oregano' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dried currants or raisins' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dried fennel seeds' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dried fettuccine' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'dried oregano' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dried oregano ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dried parsley' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dried rice vermicelli noodles' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'dried thin egg noodles' =>
                array(
                    0 => 'egg',
                    1 => 'vegetarian',
                ),
            'dried thyme' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dried thyme leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dry jumbo pasta shells' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'dry mustard' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dry navy or great Northern beans' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dry red wine' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'dry white wine' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'dry white wine or broth' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'each ground cumin' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'each salt and white vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'egg' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'elbow macaroni' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'elbow macaroni or another small pasta' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'escarole' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'extra virgin olive oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'extra virgin olive oil or 1 tablespoon each olive oil and butter' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'extra virgin olive oil or vegan butter' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'extra-large' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'extra-virgin olive oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'extra-virgin olive oil or peanut oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'nut-allergen',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'favorite BBQ sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fennel seeds  ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'feta' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'feta cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'fillets' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fine salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fine sea salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fish sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'fish',
                ),
            'fish sauce or soy sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'fish',
                    2 => 'soy',
                ),
            'five-spice powder' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'flaky white fish fillets' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'fish',
                ),
            'flank or skirt steak' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'flank steak' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'flat-leaf parsley' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'flat-leaf parsley or basil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'flour' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'flour )' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'fresca' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresco' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh baby spinach' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh basil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh basil leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh bread crumbs' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'fresh cilantro' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh cilantro leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh cilantro leaves or dill sprigs' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh dill' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh dill or parsley' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh ginger' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh lemon juice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh lemon juice ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh lemon zest plus up to 1/2 cup lemon juice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh lime juice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh mint' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh mozzarella' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'fresh orange juice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh oregano or marjoram' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh parsley' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh parsley leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh parsley leaves and tender stems' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh rosemary' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh rosemary or thyme' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh sour orange juice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh thyme' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh thyme (or 1 teaspoon dried thyme' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh thyme leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh thyme or 1/2 teaspoon dried thyme' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresh tomatillos' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'freshly Parmesan' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'freshly Parmesan cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'freshly cracked black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'freshly ground black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'freshly lemon zest' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'freshly lemon zest plus 1 tablespoon juice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'freshly mozzarella' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'freshly squeezed lemon juice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fresno' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'from 2 sprigs rosemary' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'frozen corn' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'frozen mixed vegetables (any mix of carrots' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'frozen peas' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'frozen presteamed yakisoba noodles' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'full-fat Greek yogurt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'furikake' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'fusilli' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'garam masala' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'garlic' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'garlic clove' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'garlic powder' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'garlic powder ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ghee or neutral-tasting oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ghee or unsalted butter' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'ginger' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ginger )' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'gochujang' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'gold potatoes (medium to large' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'good-size scallions or 3 bunches thin scallions' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'granulated garlic' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'granulated onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'granulated sugar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'grape tomatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'grapeseed or canola oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'grapeseed or vegetable oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'green beans' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'green bell pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'green cabbage' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'grits' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ground beef' =>
                array(
                    0 => 'gluten-free',
                ),
            'ground beef ' =>
                array(
                    0 => 'gluten-free',
                ),
            'ground black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ground cayenne' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ground chicken' =>
                array(
                    0 => 'gluten-free',
                ),
            'ground chicken or turkey' =>
                array(
                    0 => 'gluten-free',
                ),
            'ground cinnamon' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ground coriander' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ground cumin' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ground ginger' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ground lamb' =>
                array(
                    0 => 'gluten-free',
                ),
            'ground mace' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ground paprika' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ground pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ground round' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ground turkey' =>
                array(
                    0 => 'gluten-free',
                ),
            'ground turkey or chicken' =>
                array(
                    0 => 'gluten-free',
                ),
            'ground turmeric' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ground white pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'habanero chile' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'half and half' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'heart' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'heavy cream' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'heavy cream ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'hock or smoked ham shank' =>
                array(
                    0 => 'gluten-free',
                ),
            'hoisin sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'homemade or storebought pico de gallo' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'honey' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                ),
            'honey (corn syrup' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                ),
            'honey nut or butternut squash' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'hot Italian sausage' =>
                array(
                    0 => 'gluten-free',
                ),
            'hot homemade or canned vegetable stock' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'hot or sweet Italian sausage' =>
                array(
                    0 => 'gluten-free',
                ),
            'hot or sweet smoked paprika' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'hot sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'jalapeño' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'jalapeño or 2 serrano chiles' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'jalapeños or other chiles' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'jar red bell peppers' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'jarred or homemade queso' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'jasmine rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'jerk seasoning' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'juice of one lemon' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'jumbo shrimp (16-20 count' =>
                array(
                    0 => 'gluten-free',
                    1 => 'shellfish',
                ),
            'kale' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'ketchup' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ketchup ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'kosher salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'kosher salt and black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'kosher salt*' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'lard' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large apple' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large baking potatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large beefsteak tomato' =>
                array(
                    0 => 'gluten-free',
                ),
            'large boneless' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large boneless and skinless chicken breast halves' =>
                array(
                    0 => 'gluten-free',
                ),
            'large carrot' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large celery stalks' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large cloves garlic' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large egg yolks' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'large eggs' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'large fennel' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large flour or 8 corn tortillas' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'large garlic cloves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large green bell pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large head broccoli' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large leeks' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large or 2 small bunches escarole' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'large or extra-large shrimp' =>
                array(
                    0 => 'gluten-free',
                    1 => 'shellfish',
                ),
            'large red bell pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large red or yellow onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large shallot' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large shrimp' =>
                array(
                    0 => 'gluten-free',
                    1 => 'shellfish',
                ),
            'large shrimp (I use 16-20 count size' =>
                array(
                    0 => 'gluten-free',
                    1 => 'shellfish',
                ),
            'large turnips' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large white onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'large yellow onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'large yellow or white onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'large zucchini' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'leaf' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'lean' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'lean ground beef' =>
                array(
                    0 => 'gluten-free',
                ),
            'lean ground beef (OR chorizo' =>
                array(
                    0 => 'gluten-free',
                ),
            'lean ground turkey' =>
                array(
                    0 => 'gluten-free',
                ),
            'leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'leek' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'lemon' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'lemon juice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'lemon zest' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'lemon zest plus 3 tablespoons lemon juice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'light agave syrup or honey' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                ),
            'light brown sugar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'light or dark brown sugar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'lime' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'lime juice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'lime zest' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'linguiça or uncured Spanish chorizo' =>
                array(
                    0 => 'gluten-free',
                ),
            'loin roast' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'long-grain white rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'loose sweet Italian sausage or sausage links' =>
                array(
                    0 => 'gluten-free',
                ),
            'loosely packed dill' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'loosely packed fresh holy-basil leaves or sweet Thai basil leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'low-moisture cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'low-moisture mozzarella' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'low-moisture mozzarella cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'low-sodium beef stock or broth' =>
                array(
                    0 => 'gluten-free',
                ),
            'low-sodium chicken broth ' =>
                array(
                    0 => 'gluten-free',
                ),
            'low-sodium chicken stock' =>
                array(
                    0 => 'gluten-free',
                ),
            'low-sodium soy sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'low-sodium vegetable or chicken broth' =>
                array(
                    0 => 'gluten-free',
                ),
            'makrut lime leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'maple syrup' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'margarine' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'marinara sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'masoor dal' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'matchstick carrots' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'mayonnaise' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'mayonnaise (preferably a sweeter one' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'medium Yukon gold potato' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'medium carrots' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'medium cloves garlic' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'medium green or savoy cabbage' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'medium onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'medium red bell pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'medium red onions' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'medium scallions' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'medium to large raw shrimp' =>
                array(
                    0 => 'gluten-free',
                    1 => 'shellfish',
                ),
            'medium white onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'medium white onion (half cut into quarters' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'medium white or yellow onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'medium yellow bell peppers' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'medium yellow onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'medium-size white onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'mild green olives' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'mild honey' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                ),
            'milk' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'mirin' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'miso' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'mixed fresh herbs' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'mixed fresh mushrooms' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'mixed vegetables' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'molasses' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'mostaccioli pasta' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'mozzarella' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'mozzarella cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'neutral oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'neutral-flavored oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'nickel-sized slices unpeeled fresh ginger or 1 tablespoon ground ginger' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'nori' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'nutmeg' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'nutritional yeast' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'of 1 lime' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'of 1 small lemon' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'of 8 manicotti shells' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'of French or Italian bread submerged in cold water' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'of chicken broth' =>
                array(
                    0 => 'gluten-free',
                ),
            'of choice )' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'of corn' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'of garlic' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'of torn fresh basil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'olive oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'olive or vegetable oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'onion powder' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'onions/scallions' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'optional: fresh or dried parsley' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'or cubed avocado' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'or dried bay leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'or ginger' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'or lemon' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'or metal skewers' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'or pasilla chiles' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'or red bell peppers' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'or torn basil leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'or vegetable oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'or white onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'or white sesame seeds' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'or yellow onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'orange zest' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'orecchiette' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'oregano' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'orzo' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'oyster sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'shellfish',
                ),
            'oysters' =>
                array(
                    0 => 'gluten-free',
                    1 => 'shellfish',
                ),
            'packed basil leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'packed brown sugar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'packed spinach leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'pan' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'panko' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'panko bread crumbs' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'panko or homemade bread crumbs' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'paprika' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'parmesan cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'parsley' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'parsley leaves and tender stems' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'parsnips' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'pasta or crusty bread' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'pasta shells' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'pearl couscous' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'pearled barley' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'pecorino' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'peeled' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'peeled and deveined medium shrimp' =>
                array(
                    0 => 'gluten-free',
                    1 => 'shellfish',
                ),
            'peeled shrimp or boneless chicken' =>
                array(
                    0 => 'gluten-free',
                    1 => 'shellfish',
                ),
            'penne pasta' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'peppers' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'pie crust or whole wheat yeasted olive oil crust' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'piece fresh ginger' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'piece ginger' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'piece of fresh ginger' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'pinch cayenne pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'pinch salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'pitted green olives' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'plain Greek yogurt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'plain whole-milk yogurt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'plum tomatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'plus 1 tablespoon low-sodium soy sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'plus 1 teaspoon smoked paprika' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'plus 2 tablespoons chicken stock' =>
                array(
                    0 => 'gluten-free',
                ),
            'plus 2 tablespoons distilled white vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'plus 2 tablespoons extra-virgin olive oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'pods' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'pork fennel sausages' =>
                array(
                    0 => 'gluten-free',
                ),
            'potato' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'potato starch or cornstarch' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'potatoes (medium to large' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'pre- rib eye beef )' =>
                array(
                    0 => 'gluten-free',
                ),
            'prepared horseradish' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'prepared mustard' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'prepared yellow mustard' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'quart chicken stock' =>
                array(
                    0 => 'gluten-free',
                ),
            'quick-cooking polenta' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'radishes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ranch dressing' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'red chiles or a teaspoon of cayenne' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'red kale' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'red pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'red pepper flakes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'red wine vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'red-pepper flakes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'regular soy sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'rice or noodles' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'rice or orzo' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'rice vermicelli' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'rice vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ricotta' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'ricotta cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'ricotta cheese stuffing' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'rigatoni' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'ripe tomatoes with a little of their juice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'rockfish' =>
                array(
                    0 => 'gluten-free',
                    1 => 'fish',
                ),
            'rosemary' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'russet or Yukon gold potatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'russet potatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sake' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'salmon fillet' =>
                array(
                    0 => 'gluten-free',
                    1 => 'fish',
                ),
            'salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'salt )' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'salt and black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'salt and freshly cracked black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'salt and freshly ground black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'salt and freshly ground pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'salt and ground black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'salt and pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'salted butter' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'salt ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sansho pepper )' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sauce or apple cider vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'scallions' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sea salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sea salt and black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sea salt and freshly ground black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'seasoned birria fat plus&nbsp;1 cup leftover birria meat' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'seasoning' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sesame oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sesame oil or chile oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sesame seeds' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'shallots' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sharp Cheddar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'sharp white Cheddar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'egg',
                    3 => 'vegetarian',
                ),
            'shells' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sherry vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'shiitake mushrooms' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'short-grain white rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'sirloin or flank steak' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sirloin steak' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'skin-on salmon fillets' =>
                array(
                    0 => 'gluten-free',
                    1 => 'fish',
                ),
            'skinless' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'skinless chicken breasts )' =>
                array(
                    0 => 'gluten-free',
                ),
            'skinless hake' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'slices smoked ham' =>
                array(
                    0 => 'gluten-free',
                ),
            'small Yukon gold potatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small bunch kale' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'small bunch of Fresh Basil' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'small dried red chiles' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small fennel bulb' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small garlic clove' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small green cabbage' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small head iceberg lettuce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small or 2 large leeks' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small peeled and small yellow onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small red onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small shallot' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small tomatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small white onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'small yellow onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'small-to-medium lamb shanks' =>
                array(
                    0 => 'gluten-free',
                ),
            'smoked paprika' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'smoked turkey sausage' =>
                array(
                    0 => 'gluten-free',
                ),
            'soft/silken tofu )' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'sour cream' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'soy sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'soy sauce ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'spaghetti' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'spray' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sprigs fresh rosemary' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sprigs or ½ teaspoon dried thyme' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'squash' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'squeezed juice of half a lemon' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sriracha ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'stalks' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'steak' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'steamed jasmine rice ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'stick' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'store-bought gnocchi' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'store-bought or homemade chili powder' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sturdy greens' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sugar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sugar ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sun-dried tomatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sun-dried tomatoes packed in oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sunflower oil or other neutral oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sushi nori' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'sweet Italian pork sausage' =>
                array(
                    0 => 'gluten-free',
                ),
            'sweet or spicy Italian sausage' =>
                array(
                    0 => 'gluten-free',
                ),
            'sweet paprika' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'table salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'teaspoon salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'thick-cut bacon' =>
                array(
                    0 => 'gluten-free',
                ),
            'thyme' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'thyme leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'thyme sprigs' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'to 2 tablespoons chile crisp or chile paste' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'to taste' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'tomato paste' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'tomato paste ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'tomatoes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'torn basil leaves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'tortilla chips' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'tortillas' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'trimmed radishes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'tsp. dried parsley' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'tsp. dried thyme' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'tsp. pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'turkey broth' =>
                array(
                    0 => 'gluten-free',
                ),
            'turkey meat' =>
                array(
                    0 => 'gluten-free',
                ),
            'turnips' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'uncooked Japanese short-grain rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'uncooked long-grain rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'uncooked spaghetti noodles' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'unsalted butter' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'unsalted butter ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'unseasoned rice vinegar or soy sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            'unsweetened coconut milk' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'vegetable broth' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'vegetable oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'vegetable oil ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'vegetable or chicken stock' =>
                array(
                    0 => 'gluten-free',
                ),
            'vegetable or chicken stock ' =>
                array(
                    0 => 'gluten-free',
                ),
            'vegetable stock or water' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'vegetable stock ' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'vegetables (such as snap or snow peas' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'venison loin or leg' =>
                array(
                    0 => 'gluten-free',
                ),
            'venison roast (shoulder or neck is best' =>
                array(
                    0 => 'gluten-free',
                ),
            'verde chicken' =>
                array(
                    0 => 'gluten-free',
                ),
            'wash: 1 large egg with 1 Tablespoon water' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'water' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'wedges' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'wedges for serving' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'white and black sesame seeds' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'white beans' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'white fish fillets' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'fish',
                ),
            'white miso paste' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'soy',
                    3 => 'vegetarian',
                ),
            'white or brown rice' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'white or light miso' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'soy',
                    3 => 'vegetarian',
                ),
            'white sesame seeds' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'white wine' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'white wine or chicken stock' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                ),
            'whole bird’s-eye chilies or other fiery chili' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'whole black peppercorns' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'whole cloves' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'whole egg' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'whole milk' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'whole wheat pâte brisée pie crust' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            'whole-milk yogurt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'whole-milk yogurt or sour cream' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            'yellow mustard' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'yellow onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'yolks' =>
                array(
                    0 => 'gluten-free',
                    1 => 'egg',
                    2 => 'vegetarian',
                ),
            'za’atar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'zest of 1 lemon' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'zest of 1 small lemon' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            'ziti' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            ' fresh parsley' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            ' olive oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '¼ cup extra-virgin olive oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '¼ cup flour' =>
                array(
                    0 => 'vegetarian',
                    1 => 'vegan',
                ),
            '¼ cup fresh parsley' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '¼ cup roughly fresh cilantro' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '¼ cup soy sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            '¼ teaspoon black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '¼ teaspoon cayenne pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '¼ teaspoon ground cinnamon' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '¼ teaspoon salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ Tbsp soy sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'soy',
                    2 => 'vegetarian',
                    3 => 'vegan',
                ),
            '½ batch of Pomodoro sauce' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ cup Parmesan cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            '½ cup canned black beans' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ cup cheddar cheese (or mozzarella cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            '½ cup crumbled feta cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            '½ cup frozen or canned corn' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ cup heavy cream' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            '½ cup olive oil' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ cup whole-milk Ricotta cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            '½ large onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ lb ground pork )' =>
                array(
                    0 => 'gluten-free',
                ),
            '½ lemon' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ pounds 90/10 ground sirloin' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ pounds ground pork' =>
                array(
                    0 => 'gluten-free',
                ),
            '½ red onion' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ tablespoons coarse salt and ½ teaspoon pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ tablespoons fresh rosemary' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ teaspoon black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ teaspoon dried oregano' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ teaspoon kosher salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ teaspoon lemon zest' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ teaspoon red pepper flakes' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ teaspoon salt' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ teaspoon smoked paprika' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ teaspoons garam masala' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½ tsp black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '½-1 cup mozzarella OR Mexican-blend cheese' =>
                array(
                    0 => 'gluten-free',
                    1 => 'dairy',
                    2 => 'vegetarian',
                ),
            '⅓ cup red wine vinegar' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
            '⅛ teaspoon ground black pepper' =>
                array(
                    0 => 'gluten-free',
                    1 => 'vegetarian',
                    2 => 'vegan',
                ),
        );

        $progress = $this->command->getOutput()->createProgressBar(count($ingredients));

        foreach ($ingredients as $ingredientData) {
            $ingredient = Ingredient::firstOrCreate(
                ['name' => $ingredientData['name']],
                [
                    'category' => $ingredientData['category'],
                ]
            );

            // Attach tags if they exist for this ingredient
            if (isset($tagMappings[$ingredient->name])) {
                $tagIds = [];
                foreach ($tagMappings[$ingredient->name] as $tagSlug) {
                    if (isset($tags[$tagSlug])) {
                        $tagIds[] = $tags[$tagSlug]->id;
                    }
                }

                if (!empty($tagIds)) {
                    $ingredient->tags()->syncWithoutDetaching($tagIds);
                }
            }

            $progress->advance();
        }

        $progress->finish();
        $this->command->newLine(2);

        // Show summary
        $this->command->info('Ingredient import complete!');
        $this->command->newLine();

        foreach ($tags as $tag) {
            $count = $tag->ingredients()->count();
            $this->command->line("  {$tag->name}: {$count} ingredients");
        }
    }
}
