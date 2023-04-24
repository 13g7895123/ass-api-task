<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'cate' => fake()->randomElement(['web' ,'python']),
            'status' => fake()->randomElement(['ongoing' ,'not yet start', 'finished']),
            'amount' => fake()->numberBetween(3000, 50000),
            'start_contact_date' => now()
        ];
    }
}
