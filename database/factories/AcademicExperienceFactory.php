<?php

namespace Database\Factories;

use App\Models\AcademicExperience;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcademicExperienceFactory extends Factory
{
    protected $model = AcademicExperience::class;

    public function definition()
    {
        return [
            'institution' => $this->faker->company,
            'period' => $this->faker->word,
            'career' => $this->faker->jobTitle,
            'date_start' => $this->faker->date,
            'date_end' => $this->faker->optional()->date,
            'current' => $this->faker->boolean,
            'user_id' => \App\Models\User::factory(),
            'content_id' => \App\Models\Content::factory(),
        ];
    }
}