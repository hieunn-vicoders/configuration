<?php

return [
    'sections' => [
        [
            "label"  => "Thống kê",
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
            "label" => "Sản phẩm",
            "order" => 1,
            "widgets" => [
                [
                    "label" => "Đặt hàng",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "#",
                    "color" => "#f53fc5",
                    "icon" => ""
                ],
                [
                    "label" => "Tạo mới sản phẩm",
                    "type" => "shortcut",
                    "order" => 2,
                    "url" => "#",
                    "color" => "#09f",
                    "icon" => ""
                ],
                [
                    "label" => "Kho hàng",
                    "type" => "shortcut",
                    "order" => 3,
                    "url" => "#",
                    "color" => "#eca03c",
                    "icon" => ""
                ],
                [
                    "label" => "Tạo mới bài viết",
                    "type" => "shortcut",
                    "order" => 4,
                    "url" => "#",
                    "color" => "#09f",
                    "icon" => ""
                ]
            ]
        ],
        [
            "label" => "Chiến dịch",
            "order" => 2,
            "widgets" => [
                [
                    "label" => "Tạo mới chiến dịch",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "#",
                    "color" => "#04d587",
                    "icon" => ""
                ],
                [
                    "label" => "Thống kê",
                    "type" => "shortcut",
                    "order" => 2,
                    "url" => "#",
                    "color" => "#e2c401",
                    "icon" => ""
                ],
                [
                    "label" => "Báo cáo",
                    "type" => "shortcut",
                    "order" => 3,
                    "url" => "#",
                    "color" => "#ff5d7f",
                    "icon" => ""
                ],
                [
                    "label" => "Thanh toán",
                    "type" => "shortcut",
                    "order" => 4,
                    "url" => "#",
                    "color" => "#2b4def",
                    "icon" => ""
                ]
            ]
        ],
        [
            "label" => "Thiết lập",
            "order" => 3,
            "widgets" => [
                [
                    "label" => "Banner",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "#",
                    "color" => "#00b894",
                    "icon" => ""
                ],
                [
                    "label" => "Cấu hình nhanh",
                    "type" => "shortcut",
                    "order" => 2,
                    "url" => "#",
                    "color" => "#00b894",
                    "icon" => ""
                ],
                [
                    "label" => "Người dùng",
                    "type" => "shortcut",
                    "order" => 3,
                    "url" => "#",
                    "color" => "#00b894",
                    "icon" => ""
                ],
                [
                    "label" => "Menu danh mục",
                    "type" => "shortcut",
                    "order" => 4,
                    "url" => "#",
                    "color" => "#00b894",
                    "icon" => ""
                ]
            ]
        ]
    ]

];
