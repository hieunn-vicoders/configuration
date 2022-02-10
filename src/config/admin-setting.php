<?php

return [

    'sections' => [
        [
            "label" => "admin-setting.general-settings",
            "order" => 1,
            "widgets" => [
                [
                    "label" => "admin-setting.decentralization",
                    "description" => "admin-setting.des-decentralization",
                    "order" => 1,
                    "url" => "/admin/system/roles",
                    "icon" => "/assets/images/icon/Mask Group 257.svg",
                ],
                [
                    "label" => "admin-setting.menu",
                    "description" => "admin-setting.des-menu",
                    "order" => 2,
                    "url" => "/admin/menus",
                    "icon" => "/assets/images/icon/Mask Group 267.svg",
                ],
                [
                    "label" => "admin-setting.pages",
                    "description" => "admin-setting.des-pages",
                    "order" => 1,
                    "url" => "/admin/pages",
                    "icon" => "/assets/images/icon/Mask Group 258.svg",
                ],
                [
                    "label" => "admin-setting.languages",
                    "description" => "admin-setting.des-languages",
                    "order" => 1,
                    "url" => "/admin/languages",
                    "icon" => "/assets/images/icon/Mask Group 260.svg",
                ],
                [
                    "label" => "admin-setting.contact-info",
                    "description" => "admin-setting.des-contact-info",
                    "order" => 1,
                    "url" => "/admin/contacts/configuration",
                    "icon" => "/assets/images/icon/Mask Group 259.svg",
                ],
                [
                    "label" => "admin-setting.banner",
                    "description" => "admin-setting.des-banner",
                    "order" => 1,
                    "url" => "/admin/system/roles",
                    "icon" => "/assets/images/icon/Mask Group 268.svg",
                ],
                [
                    "label" => "admin-setting.library",
                    "description" => "admin-setting.des-library",
                    "order" => 1,
                    "url" => "/admin/media",
                    "icon" => "/assets/images/icon/Mask Group 261.svg",
                ],
            ],
        ],
        [
            "label" => "admin-setting.product",
            "order" => 2,
            "widgets" => [
                [
                    "label" => "admin-setting.product-configuration",
                    "description" => "admin-setting.des-product-configuration",
                    "order" => 1,
                    "url" => "/admin/products/config-meta",
                    "icon" => "assets/images/icon/Mask Group 262.svg",
                ],
            ],
        ],
        [
            "label" => "admin-setting.post",
            "order" => 3,
            "widgets" => [
                [
                    "label" => "admin-setting.post-configuration",
                    "description" => "admin-setting.des-post-configuration",
                    "order" => 1,
                    "url" => "/admin/posts/schema-posts",
                    "icon" => "assets/images/icon/Mask Group 262.svg",
                ],
            ],
        ],
        [
            "label" => "admin-setting.contact-customers",
            "order" => 4,
            "widgets" => [
                [
                    "label" => "admin-setting.user",
                    "description" => "admin-setting.des-user",
                    "order" => 1,
                    "url" => "/admin/system/users",
                    "icon" => "/assets/images/icon/Mask Group 269.svg",
                ],
                [
                    "label" => "admin-setting.mail-configuration",
                    "description" => "admin-setting.des-mail-configuration",
                    "order" => 1,
                    "url" => "/admin/system/config-mail",
                    "icon" => "/assets/images/icon/Mask Group 263.svg",
                ],
            ],
        ],
        [
            "label" => "admin-setting.advanced",
            "order" => 4,
            "widgets" => [
                [
                    "label" => "admin-setting.embed-code",
                    "description" => "admin-setting.des-embed-code",
                    "order" => 1,
                    "url" => "/admin/system/script-manager",
                    "icon" => "/assets/images/icon/Mask Group 265.svg",
                ],
                [
                    "label" => "admin-setting.tags",
                    "description" => "admin-setting.des-tags",
                    "order" => 1,
                    "url" => "/admin/tags",
                    "icon" => "/assets/images/icon/Mask Group 264.svg",
                ],
                [
                    "label" => "admin-setting.quick-configuration",
                    "description" => "admin-setting.des-quick-configuration",
                    "order" => 1,
                    "url" => "/admin/system/configuration",
                    "icon" => "/assets/images/icon/Mask Group 262.svg",
                ],
            ],
        ],
    ],
];
