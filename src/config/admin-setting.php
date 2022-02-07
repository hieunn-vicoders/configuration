<?php

return [
    'vi' => [
        'sections' => [
            [
                "label" => "Thiết lập chung",
                "order" => 1,
                "widgets" => [
                    [
                        "label" => "Phân quyền",
                        "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                        "order" => 1,
                        "url" => "/admin/system/roles",
                        "icon" => "/assets/images/icon/Mask Group 257.svg",
                    ],
                    [
                        "label" => "Menu",
                        "description" => "Thêm mới, chỉnh sửa, xóa và sắp xếp menu hiển thị trên website của bạn theo trang, theo danh mục.",
                        "order" => 2,
                        "url" => "/admin/menus",
                        "icon" => "/assets/images/icon/Mask Group 267.svg",
                    ],
                    [
                        "label" => "Trang",
                        "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                        "order" => 1,
                        "url" => "/admin/pages",
                        "icon" => "/assets/images/icon/Mask Group 258.svg",
                    ],
                    [
                        "label" => "Ngôn ngữ",
                        "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                        "order" => 1,
                        "url" => "/admin/languages",
                        "icon" => "/assets/images/icon/Mask Group 260.svg",
                    ],
                    [
                        "label" => "Thông tin liên hệ",
                        "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                        "order" => 1,
                        "url" => "/admin/contacts/configuration",
                        "icon" => "/assets/images/icon/Mask Group 259.svg",
                    ],
                    [
                        "label" => "Banner",
                        "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                        "order" => 1,
                        "url" => "/admin/system/roles",
                        "icon" => "/assets/images/icon/Mask Group 268.svg",
                    ],
                    [
                        "label" => "Thư viện",
                        "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                        "order" => 1,
                        "url" => "/admin/media",
                        "icon" => "/assets/images/icon/Mask Group 261.svg",
                    ],
                ],
            ],
            [
                "label" => "Sản phẩm",
                "order" => 2,
                "widgets" => [
                    [
                        "label" => "Cấu hình sản phẩm",
                        "description" => "Khởi tạo các trường thông tin về sản phẩm được hiển thị trên website.",
                        "order" => 1,
                        "url" => "/admin/products/config-meta",
                        "icon" => "assets/images/icon/Mask Group 262.svg",
                    ],
                ],
            ],
            [
                "label" => "Bài viết",
                "order" => 3,
                "widgets" => [
                    [
                        "label" => "Cấu hình bài viết",
                        "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                        "order" => 1,
                        "url" => "/admin/posts/schema-posts",
                        "icon" => "assets/images/icon/Mask Group 262.svg",
                    ],
                ],
            ],
            [
                "label" => "Liên lạc khách hàng",
                "order" => 4,
                "widgets" => [
                    [
                        "label" => "Người dùng",
                        "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                        "order" => 1,
                        "url" => "/admin/system/users",
                        "icon" => "/assets/images/icon/Mask Group 269.svg",
                    ],
                    [
                        "label" => "Cấu hình Mail",
                        "description" => "Khởi tạo, chỉnh sửa hòm thư doanh nghiệp để liên hệ với người dùng kết nối trên website của bạn.",
                        "order" => 1,
                        "url" => "/admin/system/config-mail",
                        "icon" => "/assets/images/icon/Mask Group 263.svg",
                    ],
                ],
            ],
            [
                "label" => "Nâng cao",
                "order" => 4,
                "widgets" => [
                    [
                        "label" => "Quản lý mã nhúng",
                        "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                        "order" => 1,
                        "url" => "/admin/system/script-manager",
                        "icon" => "/assets/images/icon/Mask Group 265.svg",
                    ],
                    [
                        "label" => "Nhãn",
                        "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                        "order" => 1,
                        "url" => "/admin/tags",
                        "icon" => "/assets/images/icon/Mask Group 264.svg",
                    ],
                    [
                        "label" => "Cấu hình nhanh",
                        "description" => "Chỉnh sửa các thông tin nhanh được hiển thị trên website.",
                        "order" => 1,
                        "url" => "/admin/system/configuration",
                        "icon" => "/assets/images/icon/Mask Group 262.svg",
                    ],
                ],
            ],
        ],
    ],
    'en' => [
        'sections' => [
            [
                "label" => "General settings",
                "order" => 1,
                "widgets" => [
                    [
                        "label" => "Decentralization",
                        "description" => "Manage which accounts can access the admin page to edit the data displayed on the website.",
                        "order" => 1,
                        "url" => "/admin/system/roles",
                        "icon" => "/assets/images/icon/Mask Group 257.svg",
                    ],
                    [
                        "label" => "Menu",
                        "description" => "Add, edit, delete and organize the menu displayed on your website by page, by category.",
                        "order" => 2,
                        "url" => "/admin/menus",
                        "icon" => "/assets/images/icon/Mask Group 267.svg",
                    ],
                    [
                        "label" => "Pages",
                        "description" => "Manage which accounts can access the admin page to edit the data displayed on the website.",
                        "order" => 1,
                        "url" => "/admin/pages",
                        "icon" => "/assets/images/icon/Mask Group 258.svg",
                    ],
                    [
                        "label" => "Languages",
                        "description" => "Manage which accounts can access the admin page to edit the data displayed on the website.",
                        "order" => 1,
                        "url" => "/admin/languages",
                        "icon" => "/assets/images/icon/Mask Group 260.svg",
                    ],
                    [
                        "label" => "Contact Info",
                        "description" => "Manage which accounts can access the admin page to edit the data displayed on the website.",
                        "order" => 1,
                        "url" => "/admin/contacts/configuration",
                        "icon" => "/assets/images/icon/Mask Group 259.svg",
                    ],
                    [
                        "label" => "Banner",
                        "description" => "Manage which accounts can access the admin page to edit the data displayed on the website.",
                        "order" => 1,
                        "url" => "/admin/system/roles",
                        "icon" => "/assets/images/icon/Mask Group 268.svg",
                    ],
                    [
                        "label" => "Library",
                        "description" => "Manage which accounts can access the admin page to edit the data displayed on the website.",
                        "order" => 1,
                        "url" => "/admin/media",
                        "icon" => "/assets/images/icon/Mask Group 261.svg",
                    ],
                ],
            ],
            [
                "label" => "Product",
                "order" => 2,
                "widgets" => [
                    [
                        "label" => "Product configuration",
                        "description" => "Initialize the product information fields displayed on the website.",
                        "order" => 1,
                        "url" => "/admin/products/config-meta",
                        "icon" => "assets/images/icon/Mask Group 262.svg",
                    ],
                ],
            ],
            [
                "label" => "Post",
                "order" => 3,
                "widgets" => [
                    [
                        "label" => "Post configuration",
                        "description" => "Initialize the post information fields displayed on the website.",
                        "order" => 1,
                        "url" => "/admin/posts/schema-posts",
                        "icon" => "assets/images/icon/Mask Group 262.svg",
                    ],
                ],
            ],
            [
                "label" => "Contact customers",
                "order" => 4,
                "widgets" => [
                    [
                        "label" => "User",
                        "description" => "Manage which accounts can access the admin page to edit the data displayed on the website.",
                        "order" => 1,
                        "url" => "/admin/system/users",
                        "icon" => "/assets/images/icon/Mask Group 269.svg",
                    ],
                    [
                        "label" => "Mail Configuration",
                        "description" => "Create and edit business mailboxes to contact users connected on your website.",
                        "order" => 1,
                        "url" => "/admin/system/config-mail",
                        "icon" => "/assets/images/icon/Mask Group 263.svg",
                    ],
                ],
            ],
            [
                "label" => "Advanced",
                "order" => 4,
                "widgets" => [
                    [
                        "label" => "Embed Code Management",
                        "description" => "Manage which accounts can access the admin page to edit the data displayed on the website.",
                        "order" => 1,
                        "url" => "/admin/system/script-manager",
                        "icon" => "/assets/images/icon/Mask Group 265.svg",
                    ],
                    [
                        "label" => "Tags",
                        "description" => "Manage which accounts can access the admin page to edit the data displayed on the website.",
                        "order" => 1,
                        "url" => "/admin/tags",
                        "icon" => "/assets/images/icon/Mask Group 264.svg",
                    ],
                    [
                        "label" => "Quick Configuration",
                        "description" => "Edit the quick information displayed on the website.",
                        "order" => 1,
                        "url" => "/admin/system/configuration",
                        "icon" => "/assets/images/icon/Mask Group 262.svg",
                    ],
                ],
            ],
        ],
    ],
];
