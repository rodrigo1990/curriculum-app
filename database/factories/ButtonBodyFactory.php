<?php

namespace Database\Factories;

use App\Models\Body;
use App\Models\Button;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ButtonBody>
 */
class ButtonBodyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'button_id' => Button::factory(),
            'body_id' => Body::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
