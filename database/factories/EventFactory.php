<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->paragraph(1),
            'description' => fake()->paragraph(1),
            'address' => fake()->address(),
            'date' => fake()->date(),
            'timings' => fake()->time(),
            'fees' => '500',
            'note' => fake()->paragraph(1),
        ];
    }
}
