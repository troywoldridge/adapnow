<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the ImageSeeder to seed images into the database
        $this->call(ImageSeeder::class);
        $this->call(ProductsTableSeeder::class);

    }
}
