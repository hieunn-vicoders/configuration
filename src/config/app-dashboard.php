<?php

return [
    'sections' => [
        [
            "label"  => "Statistical",
            "order"  => 1,
            "widgets" => [
                [
                    "type" => "analytic",
                    "order" => 1,
                    "label" => "Monthly Revenue",
                    "slug" => "monthly_revenue",
                    "icon"  => "cash-usd",
                    "color" => "#3A3B3C"
                ],
                [
                    "type" => "analytic",
                    "order" => 2,
                    "label" => "Daily Revenue",
                    "slug" => "daily_revenue",
                    "icon"  => "cash-multiple",
                    "color" => "#FF5200"
                ],
                [
                    "type" => "analytic",
                    "order" => 3,
                    "label" => "Monthly Visited",
                    "slug" => "monthly_visited",
                    "icon"  => "cube",
                    "color" => "#2BBD69"
                ],
                [
                    "type" => "analytic",
                    "order" => 4,
                    "label" => "Total Visited",
                    "slug" => "total_visited",
                    "icon"  => "receipt",
                    "color" => "#00B8D4"
                ]
            ]
        ],
        [
            "label" => "products and Posts",
            "order" => 2,
            "widgets" => [
                [
                    "label" => "Products",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "ProductScreen",
                    "color" => "#2BBD69",
                    "icon" => "cube"
                ],
                [
                    "label" => "Posts",
                    "type" => "shortcut",
                    "order" => 2,
                    "url" => "PostsScreen",
                    "color" => "#00B8D4",
                    "icon" => "receipt"
                ]

            ]
        ],
    ]
];
