<?php

namespace Database\Factories;

use App\Models\Experience;
use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    protected $model = Experience::class;

    public function definition()
    {
        $dateEnd = $this->faker->optional()->date;

        return [
            'site_id' => \App\Models\Site::factory(),
            'date_start' => $this->faker->date,
            'date_end' => $dateEnd,
            'current' => $dateEnd ? 0 : 1,
            'page_id' => Page::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}