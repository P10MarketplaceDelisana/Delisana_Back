<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            IntoleranceSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            IntoleranceProductSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            SaleBillSeeder::class,
            CartSeeder::class,
           ]);
               
    }
}
