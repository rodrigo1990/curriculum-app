<?php

namespace Database\Factories;

use App\Models\WorkingExperience;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkingExperienceFactory extends Factory
{
    protected $model = WorkingExperience::class;

    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'tasks' => $this->faker->paragraph,
            'achievements' => $this->faker->paragraph,
            'experience_id' => \App\Models\Experience::factory(),
        ];
    }
}