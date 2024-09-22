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

        // Retrieve all image files from the directory
        $imageFiles = File::allFiles($imagePath);

        // Debug: Show how many images were found in the directory
        $this->command->info("Total images found: " . count($imageFiles));

        // Get all products from the database
        $products = DB::table('products')->get();

        foreach ($products as $product) {
            // Convert product slug to lowercase to avoid case sensitivity issues
            $productSlug = strtolower(Str::slug($product->slug));
            $matchedImages = [];

            // Debug: Show the current product slug being processed
            $this->command->info("Processing product with slug: " . $productSlug);

            // Check for primary image (either exact match or with -main suffix)
            foreach ($imageFiles as $file) {
                $fileName = strtolower(pathinfo($file->getFilename(), PATHINFO_FILENAME)); // Convert filename to lowercase

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

            // Debug: Show which images were matched for the product
            if ($matchedImages) {
                $this->command->info("Images found for product '{$product->name}': " . implode(", ", $matchedImages));
            } else {
                $this->command->info("No images found for product '{$product->name}'");
            }

            // Update the product with the matched images (up to 5)
            DB::table('products')->where('id', $product->id)->update([
                'image' => $matchedImages[0] ?? null,
                'image_2' => $matchedImages[1] ?? null,
                'image_3' => $matchedImages[2] ?? null,
                'image_4' => $matchedImages[3] ?? null,
                'image_5' => $matchedImages[4] ?? null,
            ]);

            // Debug: Confirm update for the product
            $this->command->info("Images for product '{$product->name}' updated successfully.");
        }

        $this->command->info('Image seeder completed successfully!');
    }
}
