<?php

namespace VCComponent\Laravel\Config\Test\Feature\Step;

use Illuminate\Foundation\Testing\RefreshDatabase;
use VCComponent\Laravel\Config\Test\TestCase;

class SaveStepConfigTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function should_save_step_config()
    {
        $this->withoutMiddleware();

        $data = [
            'Label 1' => ['key1' => 'value1'],
            'Label 2' => ['key2' => 'value2'],
            'Label 3' => ['key3' => 'value3'],
        ];

        $this->json('POST', route('steps.save.config'), $data);

        $check = [
            [
                'key' => 'key1',
                'value' => 'value1',
            ],
            [
                'key' => 'key2',
                'value' => 'value2',
            ],
            [
                'key' => 'key2',
                'value' => 'value2',
            ],
        ];
        foreach ($check as $item) {
            $this->assertDatabaseHas('options', $item);
        }
    }
}
