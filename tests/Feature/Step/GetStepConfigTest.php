<?php

namespace VCComponent\Laravel\Config\Test\Feature\Step;

use Illuminate\Foundation\Testing\RefreshDatabase;
use VCComponent\Laravel\Config\Entities\Option;
use VCComponent\Laravel\Config\Test\TestCase;

class GetStepConfigTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function should_get_step_config()
    {

        $config = $this->app['config']->get('configuration');


        $response = $this->get(route('steps.get.config'));
        $response->assertJson($config);

    }

    /**
     * @test
     */
    public function should_get_step_config_and_option_values()
    {
        $data = [
            [
                'label' => 'input 1',
                'key'   => 'input1',
                'value' => 'input 1 value',
            ],
            [
                'label' => 'Label 2',
                'key'   => 'input2',
                'value' => 'input 2.1 value',
            ],
        ];
        foreach ($data as $item) {
            $option = factory(Option::class)->create($item);
            unset($option['updated_at']);
            unset($option['created_at']);
            $this->assertDatabaseHas('options', $option->toArray());

        }
        $config = $this->app['config']->get('configuration');
        $config[0]['inputs'][0]['value'] = $data[0]['value'];
        $config[0]['inputs'][1]['value'] = $data[1]['value'];
        $config[0]['inputs'][2]['value'] = '';

        $response = $this->get(route('steps.get.config'));
        $response->assertStatus(200);
        $response->assertJson($config);

    }
}
