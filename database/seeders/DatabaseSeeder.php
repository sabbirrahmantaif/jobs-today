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
        \App\Models\Location::factory(5)->create();
        \App\Models\Company::factory(5)->create();
        // $this->call(CompanySeeder::class);
        $this->call(TitleSeeder::class);
        // $this->call(LocationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(JobSeeder::class);
    }
}
