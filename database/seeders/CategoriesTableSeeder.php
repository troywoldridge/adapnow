<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['id' => 1, 'name' => 'Business Cards', 'slug' => Str::slug('Business Cards')],
            ['id' => 2, 'name' => 'Print Products', 'slug' => Str::slug('Print Products')],
            ['id' => 3, 'name' => 'Large Format', 'slug' => Str::slug('Large Format')],
            ['id' => 4, 'name' => 'Stationery', 'slug' => Str::slug('Stationery')],
            ['id' => 5, 'name' => 'Promotional', 'slug' => Str::slug('Promotional')],
            ['id' => 6, 'name' => 'Labels and Packaging', 'slug' => Str::slug('Labels and Packaging')],
            ['id' => 7, 'name' => 'Apparel', 'slug' => Str::slug('Apparel')],
        ];

        // Insert the categories into the 'categories' table
        DB::table('categories')->insert(array_map(function ($category) {
            return array_merge($category, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }, $categories));
    }
}
