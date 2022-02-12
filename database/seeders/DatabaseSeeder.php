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
        \App\Models\User::factory(10)->create();
        \App\Models\Company::factory(5)->create();
        \App\Models\Title::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Job::factory(25)->create();
        \App\Models\Quiz::factory(30)->create();
        // $this->call(LocationSeeder::class); // example to call seeder file
    }
}
