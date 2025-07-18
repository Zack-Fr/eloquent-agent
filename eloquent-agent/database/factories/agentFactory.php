<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id" => 0,
            'status'=> $this->faker->unique()->word,
            'role'=> $this->faker->unique()->word,
            'type'=>$this->faker->unique()->word, 
        ];
    }
}
