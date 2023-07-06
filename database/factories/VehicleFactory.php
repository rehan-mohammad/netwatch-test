<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'make' => $this->faker->word,
            'model' => $this->faker->word(),
            'registration' => $this->faker->unique()->bothify('??##???'),
        ];
    }
}
