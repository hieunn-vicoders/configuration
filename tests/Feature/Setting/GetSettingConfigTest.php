<?php

namespace VCComponent\Laravel\Config\Test\Feature\Setting;

use Illuminate\Foundation\Testing\RefreshDatabase;
use VCComponent\Laravel\Config\Test\TestCase;

class GetSettingConfigTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function should_get_setting_config()
    {
        $this->withoutMiddleware();
        $settings = [
            "dashboard" => [
                'sections' => [
                    [
                        "label" => "Thiết lập",
                        "order" => 4,
                        "widgets" => [
                            [
                                "label" => "Cấu hình nhanh",
                                "type" => "shortcut",
                                "order" => 2,
                                "url" => "/admin/system/configuration",
                                "color" => "#00b894",
                                "icon" => "/assets/icons/icon-white/layer.svg",
                            ],

                        ],
                    ],
                ],
            ],
            "admin_setting" => [
                'sections' => [
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
                ],
            ],
            "admin_menu" => [
                [
                    "title" => "Tổng quan",
                    "icon" => ["icon" => "dashboard", "pack" => "social-networks"],
                    "modules" => "dashboard",
                    "link" => '/admin/dashboard',
                ],
            ],
        ];
        $response = $this->json('GET', 'api/settings');
        $response->assertStatus(200);
        $response->assertJson($settings);
    }
    /**
     * @test
     */
    public function should_get_setting_param_language_config()
    {
        $this->withoutMiddleware();
        $settings = [
            "dashboard" => [
                'sections' => [
                    [
                        "label" => "Setting",
                        "order" => 4,
                        "widgets" => [
                            [
                                "label" => "Quick configuration",
                                "type" => "shortcut",
                                "order" => 2,
                                "url" => "/admin/system/configuration",
                                "color" => "#00b894",
                                "icon" => "/assets/icons/icon-white/layer.svg",
                            ],

                        ],
                    ],
                ],
            ],
            "admin_setting" => [
                'sections' => [
                    [
                        "label" => "Post",
                        "order" => 3,
                        "widgets" => [
                            [
                                "label" => "Setting post",
                                "description" => "lorem",
                                "order" => 1,
                                "url" => "/admin/posts/schema-posts",
                                "icon" => "assets/images/icon/Mask Group 262.svg",
                            ],
                        ],
                    ],
                ],
            ],
            "admin_menu" => [
                [
                    "title" => "Dashboard",
                    "icon" => ["icon" => "dashboard", "pack" => "social-networks"],
                    "modules" => "dashboard",
                    "link" => '/admin/dashboard',
                ],
            ],
        ];
        $response = $this->json('GET', 'api/settings?language=en');
        $response->assertStatus(200);
        $response->assertJson($settings);
    }

}
