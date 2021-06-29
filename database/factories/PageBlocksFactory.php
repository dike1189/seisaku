<?php

namespace Database\Factories;

use App\Models\PageBlocks;
use App\Models\Pages;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageBlocksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PageBlocks::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pages_id' => Pages::factory(),
            'html' => $this->faker->realText(30),
            'tag' => $this->faker->sentence(5) ,
        ];
    }
}
