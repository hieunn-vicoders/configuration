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
                    "slug" => "monthly_revenue"
                ],
                [
                    "type" => "analytic",
                    "order" => 2,
                    "label" => "Daily Revenue",
                    "slug" => "daily_revenue"
                ],
                [
                    "type" => "analytic",
                    "order" => 3,
                    "label" => "Monthly Visited",
                    "slug" => "monthly_visited"
                ],
                [
                    "type" => "analytic",
                    "order" => 4,
                    "label" => "Total Visited",
                    "slug" => "total_visited"
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
                    "url" => "NewsScreen",
                    "color" => "#00B8D4",
                    "icon" => "receipt"
                ]

            ]
        ],
    ]
];
