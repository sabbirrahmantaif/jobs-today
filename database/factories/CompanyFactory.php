<?php

namespace Database\Factories;

use App\Models\Location;
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
            'name'=>$this->faker->company('name'),
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->phoneNumber(),
            'password'=>'password',
            'location_id'=>Location::factory(),
            'description'=>$this->faker->sentence(20),
            'image'=>$this->faker->image('storage/app',150,100,null,false),
            'approved'=>false
        ];
    }
}
