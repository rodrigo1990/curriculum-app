<?php

namespace Database\Factories;

use App\Models\Button;
use App\Models\Header;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ButtonHeader>
 */
class ButtonHeaderFactory extends Factory
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
            'header_id' => Header::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
