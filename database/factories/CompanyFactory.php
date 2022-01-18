<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->phoneNumber(),
            'category'=>Str::random(5),
            'location'=>$this->faker->streetAddress(),
            'title'=>Str::random(5),
            'password'=>'password',
            'description'=>Str::random(80),
            'image'=>$this->faker->image(),
        ];
    }
}
