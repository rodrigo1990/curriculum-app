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
            'date_start' => $this->faker->date,
            'date_end' => $this->faker->optional()->date,
            'current' => $this->faker->boolean,
            'tasks' => $this->faker->paragraph,
            'achievements' => $this->faker->paragraph,
            'user_id' => \App\Models\User::factory(),
            'content_id' => \App\Models\Content::factory(),
        ];
    }
}