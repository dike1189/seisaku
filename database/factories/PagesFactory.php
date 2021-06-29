<?php

namespace Database\Factories;

use App\Models\Pages;
use Illuminate\Database\Eloquent\Factories\Factory;

class PagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pages::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->dateTimeThisMonth->format('Y-m-d')
        ];
    }
}

