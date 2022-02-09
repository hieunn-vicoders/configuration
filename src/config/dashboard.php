<?php

return [

    'sections' => [
        [
            "label" => "dashboard.statistical",
            "order" => 1,
            "widgets" => [
                [
                    "type" => "analytic",
                    "order" => 1,
                    "label" => "Monthly Revenue",
                    "slug" => "monthly_revenue",
                ],
                [
                    "type" => "analytic",
                    "order" => 2,
                    "label" => "Daily Revenue",
                    "slug" => "daily_revenue",
                ],
                [
                    "type" => "analytic",
                    "order" => 3,
                    "label" => "Monthly Visited",
                    "slug" => "monthly_visited",
                ],
                [
                    "type" => "analytic",
                    "order" => 4,
                    "label" => "Total Visited",
                    "slug" => "total_visited",
                ],
            ],
        ],
        [
            "label" => "dashboard.products",
            "order" => 2,
            "widgets" => [
                [
                    "label" => "dashboard.order",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "/admin/order",
                    "color" => "#f53fc5",
                    "icon" => "/assets/icons/icon-white/product.svg",
                ],
                [
                    "label" => "dashboard.create-product",
                    "type" => "shortcut",
                    "order" => 2,
                    "url" => "/admin/products/create",
                    "color" => "#09f",
                    "icon" => "/assets/icons/icon-white/add product.svg",
                ],
                [
                    "label" => "dashboard.warehouse",
                    "type" => "shortcut",
                    "order" => 3,
                    "url" => "#",
                    "color" => "#eca03c",
                    "icon" => "/assets/icons/icon-white/warehouse.svg",
                ],
                [
                    "label" => "dashboard.create-post",
                    "type" => "shortcut",
                    "order" => 4,
                    "url" => "/admin/posts/create",
                    "color" => "#09f",
                    "icon" => "/assets/icons/icon-white/addpage.svg",
                ],
            ],
        ],
        [
            "label" => "dashboard.campaign",
            "order" => 3,
            "widgets" => [
                [
                    "label" => "dashboard.create-campaign",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "#",
                    "color" => "#04d587",
                    "icon" => "/assets/icons/icon-white/marketing.svg",
                ],
                [
                    "label" => "dashboard.statistical",
                    "type" => "shortcut",
                    "order" => 2,
                    "url" => "/admin/statistical",
                    "color" => "#e2c401",
                    "icon" => "/assets/icons/icon-white/statistical.svg",
                ],
                [
                    "label" => "dashboard.report",
                    "type" => "shortcut",
                    "order" => 3,
                    "url" => "/admin/statistical/report",
                    "color" => "#ff5d7f",
                    "icon" => "/assets/icons/icon-white/report.svg",
                ],
                [
                    "label" => "dashboard.payment",
                    "type" => "shortcut",
                    "order" => 4,
                    "url" => "#",
                    "color" => "#2b4def",
                    "icon" => "/assets/icons/icon-white/pay.svg",
                ],
            ],
        ],
        [
            "label" => "dashboard.setting",
            "order" => 4,
            "widgets" => [
                [
                    "label" => "dashboard.banner",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "#",
                    "color" => "#00b894",
                    "icon" => "/assets/icons/icon-white/banner.svg",
                ],
                [
                    "label" => "dashboard.quick-configuration",
                    "type" => "shortcut",
                    "order" => 2,
                    "url" => "/admin/system/configuration",
                    "color" => "#00b894",
                    "icon" => "/assets/icons/icon-white/layer.svg",
                ],
                [
                    "label" => "dashboard.user",
                    "type" => "shortcut",
                    "order" => 3,
                    "url" => "#",
                    "color" => "#00b894",
                    "icon" => "/assets/icons/icon-white/customer.svg",
                ],
                [
                    "label" => "dashboard.category-menu",
                    "type" => "shortcut",
                    "order" => 4,
                    "url" => "#",
                    "color" => "#00b894",
                    "icon" => "/assets/icons/icon-white/menucategory.svg",
                ],
            ],
        ],
    ],

];
