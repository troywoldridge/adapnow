<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ImageSeeder extends Seeder
{
    public function run()
    {
        // Path to the images directory
        $imagePath = public_path('images/all-images');
        
        // Check if the image directory exists
        if (!File::exists($imagePath)) {
            $this->command->error("Image directory not found: " . $imagePath);
            return;
        }

        // Retrieve all image files
        $imageFiles = File::allFiles($imagePath);

        // Get all products from the database
        $products = DB::table('products')->get();

        foreach ($products as $product) {
            $productSlug = Str::slug($product->slug);
            $matchedImages = [];

            // Check for primary image (either exact match or with -main suffix)
            foreach ($imageFiles as $file) {
                $fileName = pathinfo($file->getFilename(), PATHINFO_FILENAME);

                // Match primary image
                if ($fileName === $productSlug || $fileName === $productSlug . '-main') {
                    $matchedImages[0] = 'images/all-images/' . $file->getFilename(); // Primary image
                } elseif ($fileName === $productSlug . '-2') {
                    $matchedImages[1] = 'images/all-images/' . $file->getFilename(); // Second image
                } elseif ($fileName === $productSlug . '-3') {
                    $matchedImages[2] = 'images/all-images/' . $file->getFilename(); // Third image
                } elseif ($fileName === $productSlug . '-4') {
                    $matchedImages[3] = 'images/all-images/' . $file->getFilename(); // Fourth image
                } elseif ($fileName === $productSlug . '-5') {
                    $matchedImages[4] = 'images/all-images/' . $file->getFilename(); // Fifth image
                }
            }

            // Update the product with the matched images (up to 5)
            DB::table('products')->where('id', $product->id)->update([
                'image' => $matchedImages[0] ?? null,
                'image_2' => $matchedImages[1] ?? null,
                'image_3' => $matchedImages[2] ?? null,
                'image_4' => $matchedImages[3] ?? null,
                'image_5' => $matchedImages[4] ?? null,
            ]);

            $this->command->info("Images for product '{$product->name}' updated successfully.");
        }

        $this->command->info('Image seeder completed successfully!');
    }
}
