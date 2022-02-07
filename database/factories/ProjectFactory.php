<?php

namespace Database\Factories;

use App\Models\ContactPerson;
use App\Models\DataDescription;
use App\Models\Project;
use App\Models\ProjectDescription;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $types = ['intern', 'contractual', 'grant'];
        $dataDescriptionIDs = DataDescription::pluck('id');

        return [
            'project_number' => $this->faker->randomDigit(),
            'name' => $this->faker->name(),
            'shortcut' => $this->faker->name(),
            'region' => $this->faker->city(),
            'year' => $this->faker->date(),
            'time' => $this->faker->randomDigit(),
            'from' => $this->faker->date(),
            'to' => $this->faker->date(),
            'type' => array_rand($types),
            'cost' => $this->faker->numerify('###'),
            'own_sources' => $this->faker->numerify('###'),
            'support_amount' => $this->faker->numerify('###'),
            'provider' => $this->faker->name(),
            'data_description_id' => DataDescription::factory(),
            'contact_person_id' => ContactPerson::factory(),
            'project_description_id' => ProjectDescription::factory(),
        ];
    }
}
