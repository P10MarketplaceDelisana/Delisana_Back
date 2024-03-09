<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoleSeeder extends Seeder

{
    
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('roles')->insert([
            ['role' => 'admin', 'created_at' => $now, 'updated_at' => $now],
            ['role' => 'client', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}