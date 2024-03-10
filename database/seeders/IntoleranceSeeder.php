<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IntoleranceSeeder extends Seeder
{
    
    public function run(): void
    {
        $now = Carbon::now();
        
        DB::table('intolerances')->insert([
            ['intolerance' => 'Sin Azúcar', 'created_at' => $now, 'updated_at' => $now],
            ['intolerance' => 'Sin Gluten', 'created_at' => $now, 'updated_at' => $now],
            ['intolerance' => 'Sin Lactosa', 'created_at' => $now, 'updated_at' => $now],
            ['intolerance' => 'Sin Frutos Secos', 'created_at' => $now, 'updated_at' => $now],
            ['intolerance' => 'Sin Huevo', 'created_at' => $now, 'updated_at' => $now],
            ['intolerance' => 'Sin Fructosa', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
