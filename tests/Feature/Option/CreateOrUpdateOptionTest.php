<?php

namespace VCComponent\Laravel\Config\Test\Feature\Option;

use Illuminate\Foundation\Testing\RefreshDatabase;
use VCComponent\Laravel\Config\Entities\Option;
use VCComponent\Laravel\Config\Test\TestCase;

class CreateOrUpdateOptionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function should_create_option()
    {
        $data = [
            'Label 1' => ['key1' => 'value1'],
            'Label 2' => ['key2' => 'value2'],
            'Label 3' => ['key3' => 'value3'],
        ];

        $response = $this->json('POST', route('options.create-or-update'), $data);
        $response->assertStatus(200);
        $check = [
            [
                'key'   => 'key1',
                'value' => 'value1'
            ],
            [
                'key'   => 'key2',
                'value' => 'value2'
            ],
            [
                'key'   => 'key3',
                'value' => 'value3'
            ],
        ];
        foreach ($check as $item) {
            $this->assertDatabaseHas('options', $item);
        }
    }

    /**
     * @test
     */
    public function should_update_existed_option()
    {

        factory(Option::class)->create(['label' => 'Lable 1','key' => 'key1', 'value' => 'value1']);

        $this->assertDatabaseHas('options', ['key' => 'key1', 'value' => 'value1']);
        $data = [
            'Lable 1' => ['key1' => 'value update'],
        ];

        $this->json('POST', route('options.create-or-update'), $data);

        $check = [
            'key'   => 'key1',
            'value' => 'value update',
        ];
        $this->assertDatabaseHas('options', $check);
        $this->assertSame('value update', Option::getOption('key1'));
    }
}
