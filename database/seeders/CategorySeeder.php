<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('categories')->insert([
            ['category' => 'Magdalenas', 'created_at' => $now, 'updated_at' => $now],
            ['category' => 'Galletas', 'created_at' => $now, 'updated_at' => $now],
            ['category' => 'Tartas', 'created_at' => $now, 'updated_at' => $now],
            ['category' => 'Donuts', 'created_at' => $now, 'updated_at' => $now],
            ['category' => 'Croissants', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
