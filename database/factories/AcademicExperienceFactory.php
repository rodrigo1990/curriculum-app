<?php

namespace Database\Factories;

use App\Models\AcademicExperience;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcademicExperienceFactory extends Factory
{
    protected $model = AcademicExperience::class;

    public function definition()
    {
        $dateEnd = $this->faker->optional()->date;

        return [
            'institution' => $this->faker->company,
            'career' => $this->faker->jobTitle,
            'date_start' => $this->faker->date,
            'date_end' => $dateEnd,
            'current' => $dateEnd ? 0 : 1,
            'user_id' => \App\Models\User::factory(),
            'content_id' => \App\Models\Content::factory(),
        ];
    }
}