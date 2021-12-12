<?php

namespace Database\Factories;

use App\Models\Training;
use Illuminate\Database\Eloquent\Factories\Factory;
use File;

class TrainingFactory extends Factory
{
    protected $model = Training::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $files = File::files("certificate");

        return [
            'name' => $this->faker->name(),
            'provider' => $this->faker->name(),
            'time' => $this->faker->randomFloat(2, 0, 120),
            'dedication' => $this->faker->text(),
            'certificate' => $files[array_rand($files)],
            'authorzation_time' => $this->faker->date(),
            'price' => $this->faker->numerify('###'),
        ];
    }
}
