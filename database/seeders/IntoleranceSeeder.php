<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntoleranceSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('intolerances')->insert([
            ['intolerance' => 'Azúcar'],
            ['intolerance' => 'Gluten'],
            ['intolerance' => 'Lactosa'],
            ['intolerance' => 'Frutos Secos'],
            ['intolerance' => 'Huevo'],
            ['intolerance' => 'Fructosa'],
     ]);
    }
}
