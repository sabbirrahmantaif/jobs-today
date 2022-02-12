<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "category_id" => rand(1, 10),
            "question" => $this->faker->sentence(4, true),
            "option1" => $this->faker->words(3,true),
            "option2" => $this->faker->words(3,true),
            "option3" => $this->faker->words(3,true),
            "option4" => $this->faker->words(3,true),
            "correct_answer" => $this->faker->randomElement(["option1","option2","option3","option4"]),
        ];
    }
}
