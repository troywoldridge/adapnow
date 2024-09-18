<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ImageSeeder extends Seeder
{
    public function run(): void
    {
        // Define the base directory where the images are stored
        $baseDirectory = public_path('images/all-images'); // Path where all images are stored

        // Get all image files in the directory
        $images = File::files($baseDirectory);

        // Loop through the images and map them to the correct product
        foreach ($images as $image) {
            $fileName = $image->getFilename();

            // We'll assume the file name without the extension is the product name or other identifier
            $nameWithoutExtension = pathinfo($fileName, PATHINFO_FILENAME);

            // Try to find a product by matching the name or some other identifier in the database
            $product = Product::where('name', $nameWithoutExtension)
                              ->orWhere('slug', $nameWithoutExtension)
                              ->first();

            if (!$product) {
                $this->command->info("No product found with name or slug: $nameWithoutExtension");
                continue;
            }

            // Assuming 'image' is the field in your product table where you store the image path
            $product->update([
                'image' => 'images/all-images/' . $fileName, // Adjust column if necessary
            ]);

            $this->command->info("Updated product '{$product->name}' with image {$fileName}");
        }
    }
}
