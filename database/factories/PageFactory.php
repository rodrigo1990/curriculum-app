<?php

namespace Database\Factories;

use App\Models\Body;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => ucfirst($this->faker->word()),
            'slug' => $this->faker->slug(),
            'body_id' => Body::factory(),
            'default' => $this->faker->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
