<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;

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
    public function definition(): array
    {
        return [
            'person_id' => Person::factory(),
            'title' => $this->faker->text(),
            'description' => $this->faker->text(255),
            'creation_time' => $this->faker->dateTimeThisDecade(),
            'status' => $this->faker->randomElement(['New', 'In-progress', 'Completed'])
        ];
    }
}
