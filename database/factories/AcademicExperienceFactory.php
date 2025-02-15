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
            'career' => $this->faker->jobTitle,
            'experience_id' => \App\Models\Experience::factory(),
        ];
    }
}