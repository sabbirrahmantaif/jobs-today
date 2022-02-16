<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CVFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->email(),
            "user_id" => User::factory(),
            "phone" => $this->faker->phoneNumber(),
            "address" => $this->faker->streetAddress(),
            "career_objective" => $this->faker->text(20),
            "skills" => $this->faker->words(5, true),
            "experience" => $this->faker->text(25),
            "achievements" => $this->faker->text(15),
            "education" => $this->faker->text(10),
            "language_proficiency" => $this->faker->words(2,true),
        ];
    }
}
