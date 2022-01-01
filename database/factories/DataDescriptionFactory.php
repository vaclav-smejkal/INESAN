<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DataDescriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'from' => $this->faker->date(),
            'to' => $this->faker->date(),
            'data' => $this->faker->boolean(),
            'label' => $this->faker->boolean(),
            'syntax' => $this->faker->boolean(),
            'questionnaire' => $this->faker->boolean(),
            'search' => $this->faker->boolean(),
        ];
    }
}
