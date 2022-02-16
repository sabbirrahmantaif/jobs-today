<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Location::factory(2)->create();
        // \App\Models\Company::factory(2)->create();
        // \App\Models\Title::factory(2)->create();
        // \App\Models\Category::factory(2)->create();

        \App\Models\Job::factory(5)->create();
        \App\Models\Quiz::factory(5)->create();
        \App\Models\Application::factory(5)->create();
        \App\Models\CV::factory(5)->create();


        // \App\Models\Application::factory(5)->create(); // example to call factory file
        // $this->call(LocationSeeder::class); // example to call seeder file
    }
}
