<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($j = 0; $j < 4; $j++) {
            for ($i = 0; $i < 5; $i++) {
                $location = DB::table('locations')->find($i + 1);
                $title = DB::table('titles')->find($i + 1);
                $category = DB::table('categories')->find($i + 1);
                DB::table('jobs')->insert([
                    "position" => Str::random(5),
                    "company_id" => $i + 1,
                    "category" => $category->category,
                    "location" => $location->location,
                    "title" => $title->title,
                    "vacancy" => Str::random(3),
                    "deadline" => '12 march 2022',
                    "salary" => random_int(10000, 100000),
                    "description" => Str::random(4) . ' ' . Str::random(6) . ' ' . Str::random(3) . ' ' . Str::random(4) . ' ' . Str::random(4) . ' ' . Str::random(4) . ' ' . Str::random(4) . ' ' . Str::random(4) . ' ' . Str::random(4) . ' ' . Str::random(4) . ' ' . Str::random(4) . ' ' . Str::random(4) . ' ' . Str::random(4) . ' ' . Str::random(4) . ' ' . Str::random(4),
                    "nature" => Str::random(7),
                    "education" => Str::random(15),
                    "experience" => random_int(0, 9) . ' years',
                    "requirements" => Str::random(40),
                    "other_benefits" => Str::random(20),
                ]);
            }
        }
    }
}
