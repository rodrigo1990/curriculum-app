<?php

namespace Database\Factories;

use App\Models\CurriculumUserData;
use Illuminate\Database\Eloquent\Factories\Factory;

class CurriculumUserDataFactory extends Factory
{
    protected $model = CurriculumUserData::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'birthday' => $this->faker->date,
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $this->faker->phoneNumber,
            'profile_picture' => $this->faker->optional()->imageUrl,
            'site_id' => \App\Models\Site::factory(),
        ];
    }
}