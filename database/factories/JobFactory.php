<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "company_id" => rand(1, 5),
            "title_id" => rand(1, 10),
            "category_id" => rand(1, 10),
            "position" => $this->faker->jobTitle(),
            "vacancy" => rand(1,15),
            "deadline" => $this->faker->date('d-m-Y', '15-12-2025'),
            "salary" => rand(10000, 100000),
            "description" => $this->faker->realText(100, 1),
            "nature" => $this->faker->realText(20, 1),
            "education" => $this->faker->realText(10, 1),
            "experience" => rand(1, 9) . ' years',
            "requirements" => $this->faker->realText(20, 1),
            "other_benefits" =>  $this->faker->realText(25, 1),
            "status" => false
        ];
    }
}
