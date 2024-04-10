 <?php
/**
 * @return array
 */
function getStores()
{
    return [
        [
            "id" => 1,
            "name" => "Albert Heijn",
        ],
        [
            "id" => 2,
            "name" => "Jumbo",
        ],
        [
            "id" => 3,
            "name" => "Lidl",
        ],
        [
            "id" => 4,
            "name" => "Plus",
        ],
        [
            "id" => 5,
            "name" => "Spar",
        ],
        [
            "id" => 6,
            "name" => "Coop",
        ],
        [
            "id" => 7,
            "name" => "Dirk",
        ],
        [
            "id" => 8,
            "name" => "Hoogvliet",
        ],
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getStoreDetails($id)
{
    $tags = [
        1 => [ //Appie
            "locatie" => "Snelleweg 45",
            "telnr" => "+31 0612345678",
            "type" => ['In Store Winkelen', 'In Store Pickup'],
            "openingstijden" => ['Ma/Za: 8:00 - 22:00', 'Zo: 9:00 - 18:00']
        ],
        2 => [ //Jumbo
            "locatie" => "Kantoorrand 12",
            "telnr" => "+31 0622446688",
            "type" => ['In Store Winkelen'],
            "openingstijden" => ['Ma/Za: 8:00 - 20:00', 'Zo: 9:00 - 17:00']
        ],
        3 => [ //Lidl
            "locatie" => "Pentra 99",
            "telnr" => "+31 0687654321",
            "type" => ['In Store Winkelen', 'In Store Pickup'],
            "openingstijden" => ['Ma/Za: 8:00 - 21:00']
        ],
        4 => [ //Plus
            "locatie" => "MLK Straat 01",
            "telnr" => "+31 0611223344",
            "type" => ['In Store Winkelen', 'In Store Pickup'],
            "openingstijden" => ['Ma/Za: 12:00 - 24:00', 'Zo: 7:00 - 15:00']
        ],
        5 => [ //Spar
            "locatie" => "Mandrieweg 02",
            "telnr" => "+31 0666778899",
            "type" => ['In Store Winkelen'],
            "openingstijden" => ['Ma/Za: 9:00 - 20:00']
        ],
        6 => [ //Coop
            "locatie" => "Anariastraat 22",
            "telnr" => "+31 0698789864",
            "type" => ['In Store Winkelen'],
            "openingstijden" => ['Ma/Za: 8:00 - 22:00']
        ],
        7 => [ //Dirk
            "locatie" => "Kannier 9",
            "telnr" => "+31 0678594302",
            "type" => ['In Store Winkelen'],
            "openingstijden" => ['Ma/Za: 8:00 - 22:00']
        ],
        8 => [ //Hoogvliet
            "locatie" => "Langejanweg 35",
            "telnr" => "+31 0657483920",
            "type" => ['In Store Winkelen', 'In Store Pickup'],
            "openingstijden" => ['Ma/Za: 8:00 - 22:00', 'Zo: 9:00 - 18:00']
        ],
    ];

    return $tags[$id];
}

/**
 * @param $id
 * @return mixed
 */
function getStoreProductDetails($id)
{
    $tags = [
        // Appie
        1 => [
            "products" => [
                [
                    "naam" => "Bananen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Melk",
                    "product_type" => "Zuivel",
                    "prijs" => "€0.90",
                    "prijs_per_kilo" => "-"
                ],
                [
                    "naam" => "Appels",
                    "product_type" => "Fruit",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€1.50"
                ],
                [
                    "naam" => "Brood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.20",
                    "prijs_per_kilo" => "-"
                ],
                [
                    "naam" => "Yoghurt",
                    "product_type" => "Zuivel",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "-"
                ]
            ]
        ],

        // Jumbo
        2 => [
            "products" => [
                [
                    "naam" => "Chips",
                    "product_type" => "Snacks",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Sinaasappelsap",
                    "product_type" => "Drank",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "-"
                ],
                [
                    "naam" => "Kaas",
                    "product_type" => "Zuivel",
                    "prijs" => "€3.50",
                    "prijs_per_kilo" => "€7.00"
                ],
                [
                    "naam" => "Pasta",
                    "product_type" => "Pasta",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "-"
                ],
                [
                    "naam" => "Tomaten",
                    "product_type" => "Groente",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ]
            ]
        ],

        // Lidl
        3 => [
            "products" => [
                [
                    "naam" => "Aardappelen",
                    "product_type" => "Groente",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€0.75"
                ],
                [
                    "naam" => "Komkommer",
                    "product_type" => "Groente",
                    "prijs" => "€0.80",
                    "prijs_per_kilo" => "€1.60"
                ],
                [
                    "naam" => "Rijst",
                    "product_type" => "Droogwaren",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "-"
                ]
            ]
        ],

        // Plus
        4 => [
            "products" => [
                [
                    "naam" => "Kipfilet",
                    "product_type" => "Vlees",
                    "prijs" => "€4.50",
                    "prijs_per_kilo" => "€9.00"
                ],
                [
                    "naam" => "Boterhamworst",
                    "product_type" => "Vleeswaren",
                    "prijs" => "€2.20",
                    "prijs_per_kilo" => "€4.40"
                ],
                [
                    "naam" => "Witte Bonen",
                    "product_type" => "Groente",
                    "prijs" => "€0.90",
                    "prijs_per_kilo" => "-"
                ],
                [
                    "naam" => "Chocolade",
                    "product_type" => "Snoep",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Karnemelk",
                    "product_type" => "Zuivel",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "-"
                ]
            ]
        ],

        // Spar
        5 => [
            "products" => [
                [
                    "naam" => "Rundergehakt",
                    "product_type" => "Vlees",
                    "prijs" => "€5.00",
                    "prijs_per_kilo" => "€10.00"
                ],
                [
                    "naam" => "Bosbessen",
                    "product_type" => "Fruit",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "-"
                ],
                [
                    "naam" => "Olijven",
                    "product_type" => "Snacks",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Muesli",
                    "product_type" => "Ontbijtgranen",
                    "prijs" => "€3.00",
                    "prijs_per_kilo" => "-"
                ],
                [
                    "naam" => "Wortelen",
                    "product_type" => "Groente",
                    "prijs" => "€0.70",
                    "prijs_per_kilo" => "€1.40"
                ]
            ]
        ],
        // Coop
        6 => [
            "products" => [
                [
                    "naam" => "Tonijn",
                    "product_type" => "Vis",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€5.00"
                ],
                [
                    "naam" => "Eieren",
                    "product_type" => "Eieren",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "-"
                ],
                [
                    "naam" => "Aardbeien",
                    "product_type" => "Fruit",
                    "prijs" => "€3.00",
                    "prijs_per_kilo" => "-"
                ],
                [
                    "naam" => "Ham",
                    "product_type" => "Vleeswaren",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Pindakaas",
                    "product_type" => "Broodbeleg",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "-"
                ]
            ]
        ],
        // Dirk
        7 => [
            "products" => [
                [
                    "naam" => "Koekjes",
                    "product_type" => "Snacks",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "-"
                ],
                [
                    "naam" => "Sla",
                    "product_type" => "Groente",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Worst",
                    "product_type" => "Vleeswaren",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€5.00"
                ],
                [
                    "naam" => "Thee",
                    "product_type" => "Drank",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "-"
                ],
                [
                    "naam" => "Knoflook",
                    "product_type" => "Kruiden",
                    "prijs" => "€0.60",
                    "prijs_per_kilo" => "€6.00"
                ]
            ]
        ],
        // Hoogvliet
        8 => [
            "products" => [
                [
                    "naam" => "Kipfilet",
                    "product_type" => "Vlees",
                    "prijs" => "€3.50",
                    "prijs_per_kilo" => "€7.00"
                ],
                [
                    "naam" => "Goudse Kaas",
                    "product_type" => "Zuivel",
                    "prijs" => "€2.80",
                    "prijs_per_kilo" => "€5.60"
                ],
                [
                    "naam" => "Wortels",
                    "product_type" => "Groente",
                    "prijs" => "€0.80",
                    "prijs_per_kilo" => "€1.60"
                ],
                [
                    "naam" => "Zalm",
                    "product_type" => "Vis",
                    "prijs" => "€4.00",
                    "prijs_per_kilo" => "€8.00"
                ],
                [
                    "naam" => "Spaghetti",
                    "product_type" => "Pasta",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "-"
                ]
            ]
        ]
    ];
    return $tags[$id];
}