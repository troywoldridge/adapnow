<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $filePath = database_path('seeders/cleaned_products_data.csv');
        
        // Check if the file exists
        if (!File::exists($filePath)) {
            $this->command->error('CSV file not found: ' . $filePath);
            return;
        }

        // Read the CSV file
        $csvData = array_map('str_getcsv', file($filePath));
        $header = array_shift($csvData); // Get the header row

        // Loop through each row and insert into the 'products' table
        foreach ($csvData as $row) {
            $record = array_combine($header, $row);

            // Insert into the database
            DB::table('products')->insert([
                'id' => $record['id'],
                'category_id' => $record['category_id'],
                'subcategory_id' => $record['subcategory_id'] ?? null,
                'name' => $record['name'],
                'slug' => $record['slug'],
                'sku' => $record['sku'] ?? null,
                'description' => $record['description'],
                'category_slug' => $record['category_slug'],
                'price' => $record['price'],
                'image' => null, // Nulling out the images for now
                'image_2' => null,
                'image_3' => null,
                'image_4' => null,
                'image_5' => null,
                'created_at' => Carbon::parse($record['created_at']),
                'updated_at' => Carbon::parse($record['updated_at']),
            ]);
        }

        $this->command->info('Products table seeded successfully!');
    }
}
