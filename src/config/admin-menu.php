<?php

return [
    [
        "title" => "admin-menu.dashboard",
        "icon" => ["icon" => "dashboard", "pack" => "social-networks"],
        "modules" => "dashboard",
        "link" => '/admin/dashboard',
    ],
    [
        "title" => 'admin-menu.order',
        "icon" => ["icon" => 'order', "pack" => 'social-networks'],
        "modules" => 'order',
        "children" => [
            [
                "title" => 'admin-menu.list-order',
                "link" => '/admin/order',
            ],
            [
                "title" => 'admin-menu.create-order',
                "link" => '/admin/order/create',
            ],
            [
                "title" => 'admin-menu.unit-pay-order',
                "link" => '/admin/order/unit-pay',
            ],
            [
                "title" => 'admin-menu.unit-complain-order',
                "link" => '/admin/order/unit-complain',
            ],
        ],
    ],
    [
        "title" => 'admin-menu.product',
        "icon" => ["icon" => 'product', "pack" => 'social-networks'],
        "modules" => 'product',
        "children" => [
            [
                "title" => 'admin-menu.list-product',
                "link" => '/admin/products',
            ],
            [
                "title" => 'admin-menu.create-product',
                "link" => '/admin/products/create',
            ],
            [
                "title" => 'admin-menu.configuration-product',
                "link" => '/admin/products/config-meta',
            ],
            [
                "title" => 'admin-menu.category-product',
                "link" => '/admin/products/categories',
            ],
        ],
    ],
    [
        "title" => 'admin-menu.post',
        "icon" => ["icon" => 'post', "pack" => 'social-networks'],
        "modules" => 'post',
        "children" => [
            [
                "title" => 'admin-menu.list-post',
                "link" => '/admin/posts',
            ],
            [
                "title" => 'admin-menu.create-post',
                "link" => '/admin/posts/create',
            ],
            [
                "title" => 'admin-menu.category-post',
                "link" => '/admin/posts/categories',
            ],
            [
                "title" => 'admin-menu.configuration-post',
                "link" => '/admin/posts/schema-posts',
            ],
        ],
    ],
    [
        "title" => 'admin-menu.other-posts',
        "icon" => ["icon" => 'post', "pack" => 'social-networks'],
        "modules" => 'other_post',
        "children" => [
            [
                "title" => 'admin-menu.list-other-posts',
                "link" => '/admin/post-types',
            ],
            [
                "title" => 'admin-menu.create-other-posts',
                "link" => '/admin/post-types/create',
            ],
            [
                "title" => 'admin-menu.category-other-posts',
                "link" => '/admin/post-types/categories',
            ],
        ],
    ],
    [
        "title" => 'admin-menu.customer',
        "icon" => ["icon" => 'customer', "pack" => 'social-networks'],
        "modules" => 'customer',
        "children" => [
            [
                "title" => 'admin-menu.list-customer',
                "link" => '/admin/customer',
            ],
            [
                "title" => 'admin-menu.inbox-customer',
                "link" => '/admin/customer/inbox',
            ],
            [
                "title" => 'admin-menu.comment-customer',
                "link" => '/admin/customer/comment',
            ],
            [
                "title" => 'admin-menu.review-customer',
                "link" => '/admin/customer/evaluate',
            ],
            [
                "title" => 'admin-menu.create-customer',
                "link" => '/admin/customer/create',
            ],
        ],
    ],
    [
        "title" => 'admin-menu.statistical',
        "icon" => ["icon" => 'chart', "pack" => 'social-networks'],
        "modules" => 'statistical',
        "children" => [
            [
                "title" => 'admin-menu.dashboard-statistical',
                "link" => '/admin/statistical',
            ],
            [
                "title" => 'admin-menu.report-statistical',
                "link" => '/admin/statistical/report',
            ],
        ],
    ],
    [
        "title" => 'admin-menu.search-optimization',
        "icon" => ["icon" => 'optimal', "pack" => 'social-networks'],
        "modules" => 'search-optimization',
        "link" => '/admin/search-optimization',
    ],
    [
        "title" => 'admin-menu.setting',
        "icon" => ["icon" => 'setting', "pack" => 'social-networks'],
        "badge" => [
            "text" => '!',
            "status" => 'danger',
        ],
        "modules" => 'setup',
        "link" => '/admin/setting',
    ],

];
