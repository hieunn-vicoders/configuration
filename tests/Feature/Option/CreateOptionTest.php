<?php

namespace VCComponent\Laravel\Config\Test\Feature\Option;

use Illuminate\Foundation\Testing\RefreshDatabase;
use VCComponent\Laravel\Config\Test\TestCase;

class CreateOptionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function should_create_option()
    {
        $this->withoutMiddleware();
        $data = [
            'label' => 'Key 1',
            'key' => 'key1',
            'value' => 'value1',
        ];
        $response = $this->json('POST', route('options.create'), $data);
        $response->assertStatus(200);
        $this->assertDatabaseHas('options', $data);
        $response->assertJson(['data' => $data]);
    }

}
