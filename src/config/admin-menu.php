<?php

return [

    'vi' => [
        [
            "title" => "Tổng quan",
            "icon" => ["icon" => "dashboard", "pack" => "social-networks"],
            "modules" => "dashboard",
            "link" => '/admin/dashboard',
        ],
        [
            "title" => 'Đơn hàng',
            "icon" => ["icon" => 'order', "pack" => 'social-networks'],
            "modules" => 'order',
            "children" => [
                [
                    "title" => 'Danh sách',
                    "link" => '/admin/order',
                ],
                [
                    "title" => 'Tạo mới',
                    "link" => '/admin/order/create',
                ],
                [
                    "title" => 'Đơn hoàn trả',
                    "link" => '/admin/order/unit-pay',
                ],
                [
                    "title" => 'Đơn khiếu nại',
                    "link" => '/admin/order/unit-complain',
                ],
            ],
        ],
        [
            "title" => 'Sản phẩm',
            "icon" => ["icon" => 'product', "pack" => 'social-networks'],
            "modules" => 'product',
            "children" => [
                [
                    "title" => 'Danh sách',
                    "link" => '/admin/products',
                ],
                [
                    "title" => 'Tạo mới',
                    "link" => '/admin/products/create',
                ],
                [
                    "title" => 'Cấu hình',
                    "link" => '/admin/products/config-meta',
                ],
                [
                    "title" => 'Danh mục',
                    "link" => '/admin/products/categories',
                ],
            ],
        ],
        [
            "title" => 'Bài viết',
            "icon" => ["icon" => 'post', "pack" => 'social-networks'],
            "modules" => 'post',
            "children" => [
                [
                    "title" => 'Danh sách',
                    "link" => '/admin/posts',
                ],
                [
                    "title" => 'Tạo mới',
                    "link" => '/admin/posts/create',
                ],
                [
                    "title" => 'Danh mục',
                    "link" => '/admin/posts/categories',
                ],
                [
                    "title" => 'Cấu hình',
                    "link" => '/admin/posts/schema-posts',
                ],
            ],
        ],
        [
            "title" => 'Bài viết khác',
            "icon" => ["icon" => 'post', "pack" => 'social-networks'],
            "modules" => 'other_post',
            "children" => [
                [
                    "title" => 'Danh sách',
                    "link" => '/admin/post-types',
                ],
                [
                    "title" => 'Tạo mới',
                    "link" => '/admin/post-types/create',
                ],
                [
                    "title" => 'Danh mục',
                    "link" => '/admin/post-types/categories',
                ],
            ],
        ],
        [
            "title" => 'Khách hàng',
            "icon" => ["icon" => 'customer', "pack" => 'social-networks'],
            "modules" => 'customer',
            "children" => [
                [
                    "title" => 'Danh sách',
                    "link" => '/admin/customer',
                ],
                [
                    "title" => 'Hộp thư đến',
                    "link" => '/admin/customer/inbox',
                ],
                [
                    "title" => 'Bình Luận',
                    "link" => '/admin/customer/comment',
                ],
                [
                    "title" => 'Đánh giá',
                    "link" => '/admin/customer/evaluate',
                ],
                [
                    "title" => 'Tạo mới',
                    "link" => '/admin/customer/create',
                ],
            ],
        ],
        [
            "title" => 'Thống kê',
            "icon" => ["icon" => 'chart', "pack" => 'social-networks'],
            "modules" => 'statistical',
            "children" => [
                [
                    "title" => 'Tổng quan',
                    "link" => '/admin/statistical',
                ],
                [
                    "title" => 'Báo cáo',
                    "link" => '/admin/statistical/report',
                ],
            ],
        ],
        [
            "title" => 'Tối ưu tìm kiếm',
            "icon" => ["icon" => 'optimal', "pack" => 'social-networks'],
            "modules" => 'search-optimization',
            "link" => '/admin/search-optimization',
        ],
        [
            "title" => 'Thiết lập',
            "icon" => ["icon" => 'setting', "pack" => 'social-networks'],
            "badge" => [
                "text" => '!',
                "status" => 'danger',
            ],
            "modules" => 'setup',
            "link" => '/admin/setting',
        ],
    ],
    'en' => [
        [
            "title" => "Dashboard",
            "icon" => ["icon" => "dashboard", "pack" => "social-networks"],
            "modules" => "dashboard",
            "link" => '/admin/dashboard',
        ],
        [
            "title" => 'Order',
            "icon" => ["icon" => 'order', "pack" => 'social-networks'],
            "modules" => 'order',
            "children" => [
                [
                    "title" => 'List',
                    "link" => '/admin/order',
                ],
                [
                    "title" => 'Create',
                    "link" => '/admin/order/create',
                ],
                [
                    "title" => 'Unit Pay',
                    "link" => '/admin/order/unit-pay',
                ],
                [
                    "title" => 'Unit Complain',
                    "link" => '/admin/order/unit-complain',
                ],
            ],
        ],
        [
            "title" => 'Product',
            "icon" => ["icon" => 'product', "pack" => 'social-networks'],
            "modules" => 'product',
            "children" => [
                [
                    "title" => 'List',
                    "link" => '/admin/products',
                ],
                [
                    "title" => 'Create',
                    "link" => '/admin/products/create',
                ],
                [
                    "title" => 'Configuration',
                    "link" => '/admin/products/config-meta',
                ],
                [
                    "title" => 'Category',
                    "link" => '/admin/products/categories',
                ],
            ],
        ],
        [
            "title" => 'Post',
            "icon" => ["icon" => 'post', "pack" => 'social-networks'],
            "modules" => 'post',
            "children" => [
                [
                    "title" => 'List',
                    "link" => '/admin/posts',
                ],
                [
                    "title" => 'Create',
                    "link" => '/admin/posts/create',
                ],
                [
                    "title" => 'Category',
                    "link" => '/admin/posts/categories',
                ],
                [
                    "title" => 'Configuration',
                    "link" => '/admin/posts/schema-posts',
                ],
            ],
        ],
        [
            "title" => 'Other Posts',
            "icon" => ["icon" => 'post', "pack" => 'social-networks'],
            "modules" => 'other_post',
            "children" => [
                [
                    "title" => 'List',
                    "link" => '/admin/post-types',
                ],
                [
                    "title" => 'Create',
                    "link" => '/admin/post-types/create',
                ],
                [
                    "title" => 'Category',
                    "link" => '/admin/post-types/categories',
                ],
            ],
        ],
        [
            "title" => 'Customer',
            "icon" => ["icon" => 'customer', "pack" => 'social-networks'],
            "modules" => 'customer',
            "children" => [
                [
                    "title" => 'List',
                    "link" => '/admin/customer',
                ],
                [
                    "title" => 'Inbox',
                    "link" => '/admin/customer/inbox',
                ],
                [
                    "title" => 'Comment',
                    "link" => '/admin/customer/comment',
                ],
                [
                    "title" => 'Review',
                    "link" => '/admin/customer/evaluate',
                ],
                [
                    "title" => 'Create',
                    "link" => '/admin/customer/create',
                ],
            ],
        ],
        [
            "title" => 'Statistical',
            "icon" => ["icon" => 'chart', "pack" => 'social-networks'],
            "modules" => 'statistical',
            "children" => [
                [
                    "title" => 'Dashboard',
                    "link" => '/admin/statistical',
                ],
                [
                    "title" => 'Report',
                    "link" => '/admin/statistical/report',
                ],
            ],
        ],
        [
            "title" => 'Search Optimization',
            "icon" => ["icon" => 'optimal', "pack" => 'social-networks'],
            "modules" => 'search-optimization',
            "link" => '/admin/search-optimization',
        ],
        [
            "title" => 'Setting',
            "icon" => ["icon" => 'setting', "pack" => 'social-networks'],
            "badge" => [
                "text" => '!',
                "status" => 'danger',
            ],
            "modules" => 'setup',
            "link" => '/admin/setting',
        ],
    ],
];
