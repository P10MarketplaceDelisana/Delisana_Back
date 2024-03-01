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
            CategorySeeder::class]);

//         User::factory(10)->create();
//         Product::factory(10)->create();
//         Order::factory(20)->create();    
    }
}
