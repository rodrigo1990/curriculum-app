<?php

namespace Database\Factories;

use App\Models\WorkingExperience;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkingExperienceFactory extends Factory
{
    protected $model = WorkingExperience::class;

    public function definition()
    {
        $dateEnd = $this->faker->optional()->date;

        return [
            'company' => $this->faker->company,
            'date_start' => $this->faker->date,
            'date_end' => $dateEnd,
            'current' => $dateEnd ? 0 : 1,
            'tasks' => $this->faker->paragraph,
            'achievements' => $this->faker->paragraph,
            'user_id' => \App\Models\User::factory(),
            'page_id' => \App\Models\Page::factory(),
        ];
    }
}