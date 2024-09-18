<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    public function run()
    {
        $subcategories = [
            ['name' => 'Business Cards', 'slug' => Str::slug('Business Cards'), 'category_id' => 1],
            ['name' => 'Print Products', 'slug' => Str::slug('Print Products'), 'category_id' => 2],
            ['name' => 'Large Format', 'slug' => Str::slug('Large Format'), 'category_id' => 3],
            ['name' => 'Stationery', 'slug' => Str::slug('Stationery'), 'category_id' => 4],
            ['name' => 'Promotional', 'slug' => Str::slug('Promotional'), 'category_id' => 5],
            ['name' => 'Labels and Packaging', 'slug' => Str::slug('Labels and Packaging'), 'category_id' => 6],
            ['name' => 'Apparel', 'slug' => Str::slug('Apparel'), 'category_id' => 7],
        ];

        DB::table('subcategories')->insert(array_map(function ($subcategory) {
            return array_merge($subcategory, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }, $subcategories));
    }
}
