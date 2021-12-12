<?php

namespace Database\Factories;

use App\Models\TrainingUser;
use App\Models\Training;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingUserFactory extends Factory
{
    protected $model = TrainingUser::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $trainingIDs = Training::pluck('id');
        $userIDs = User::pluck('id');
        return [
            'training_id' => $this->faker->randomElement($trainingIDs),
            'user_id' => $this->faker->randomElement($userIDs),
        ];
    }
}
