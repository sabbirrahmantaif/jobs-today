<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $location = DB::table('locations')->find($i+1);
            $titles = DB::table('titles')->find($i+1);
            $categories = DB::table('categories')->find($i+1);
            DB::table('companies')->insert([
                "name"=>Str::random(5),
                "email"=>Str::random(5),
                "phone"=>Str::random(5),
                "category"=>$categories->category,
                "location"=>$location->location,
                "title"=>$titles->title,
                "password"=>123456,
                "description"=>Str::random(4).' '.Str::random(6).' '.Str::random(3).' '.Str::random(4).' '.Str::random(4).' '.Str::random(4).' '.Str::random(4).' '.Str::random(4).' '.Str::random(4).' '.Str::random(4).' '.Str::random(4).' '.Str::random(4).' '.Str::random(4).' '.Str::random(4).' '.Str::random(4),
                "image"=>null
            ]);
        }

        // $location2 = DB::table('locations')->find(2);
        // $titles2 = DB::table('titles')->find(2);
        // $categories2 = DB::table('categories')->find(2);
        // for ($i=0; $i < 3; $i++) {
        //     # code...
        // }
        // DB::table('companies')->create([]);
    }
}
