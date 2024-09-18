<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GenerateSlugAndImageLists extends Command
{
    protected $signature = 'generate:lists';
    protected $description = 'Generate lists of slugs and images from the database';

    public function handle()
    {
        // Paths to save the files
        $slugFilePath = base_path('slugs_list.txt');
        $imageFilePath = base_path('images_list.txt');

        // Fetch all slugs and images from the 'products' table
        $products = DB::table('products')->select('slug', 'image', 'image_2', 'image_3', 'image_4', 'image_5')->get();

        // Prepare slug and image lists
        $slugList = '';
        $imageList = '';

        foreach ($products as $product) {
            // Add slug to slug list
            $slugList .= $product->slug . PHP_EOL;

            // Add images to image list (if they exist)
            $imageList .= $product->image ? $product->image . PHP_EOL : '';
            $imageList .= $product->image_2 ? $product->image_2 . PHP_EOL : '';
            $imageList .= $product->image_3 ? $product->image_3 . PHP_EOL : '';
            $imageList .= $product->image_4 ? $product->image_4 . PHP_EOL : '';
            $imageList .= $product->image_5 ? $product->image_5 . PHP_EOL : '';
        }

        // Save slug list to a file
        File::put($slugFilePath, $slugList);
        $this->info("Slug list saved to {$slugFilePath}");

        // Save image list to a file
        File::put($imageFilePath, $imageList);
        $this->info("Image list saved to {$imageFilePath}");
    }
}
