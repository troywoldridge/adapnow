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
        $filePath = database_path('seeders/productstableseeder.csv');
        
        // Check if the file exists
        if (!File::exists($filePath)) {
            $this->command->error('CSV file not found: ' . $filePath);
            return;
        }

        // Read the CSV file
        $csvData = array_map('str_getcsv', file($filePath));
        $header = array_shift($csvData); // Get the header row

        // Ensure the 'id' and 'slug' columns are present in the header
        if (!in_array('id', $header) || !in_array('slug', $header)) {
            $this->command->error('The CSV file is missing required columns: id or slug');
            return;
        }

        // Loop through each row and insert/update into the 'products' table
        foreach ($csvData as $row) {
            $record = array_combine($header, $row);

            if (!$record) {
                $this->command->error('Error processing row: ' . json_encode($row));
                continue;
            }

            // Log each row to see the data being processed
            $this->command->info('Processing row: ' . json_encode($record));

            // Handle missing critical data
            if (empty($record['id']) || empty($record['name']) || empty($record['slug'])) {
                $this->command->error('Missing critical data in row: ' . json_encode($record));
                continue;
            }

            // Insert or update product
            DB::table('products')->updateOrInsert(
                ['id' => $record['id'], 'slug' => $record['slug']], // Unique identifier (id or slug)
                [
                    'category_id' => $record['category_id'],
                    'subcategory_id' => $record['subcategory_id'] ?? null, // Allow null for subcategory
                    'name' => $record['name'],
                    'slug' => $record['slug'],
                    'sku' => $record['sku'] ?? null, // Optional field
                    'description' => $record['description'] ?? '', // Optional, default to empty string
                    'category_slug' => $record['category_slug'] ?? '',
                    'price' => $record['price'] ?? 0, // Optional, default to 0 if missing
                    'image' => $record['image'] ?? null, // Handle null images
                    'image_2' => $record['image_2'] ?? null,
                    'image_3' => $record['image_3'] ?? null,
                    'image_4' => $record['image_4'] ?? null,
                    'image_5' => $record['image_5'] ?? null,
                    'created_at' => Carbon::parse($record['created_at'] ?? now()), // Handle created_at
                    'updated_at' => Carbon::parse($record['updated_at'] ?? now()), // Handle updated_at
                ]
            );
        }

        $this->command->info('Products table seeded successfully!');
    }
}
