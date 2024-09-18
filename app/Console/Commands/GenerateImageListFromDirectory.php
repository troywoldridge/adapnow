<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateImageListFromDirectory extends Command
{
    protected $signature = 'generate:image-list';
    protected $description = 'Generate a list of images from the public/images/all-images directory';

    public function handle()
    {
        // Define the directory to scan
        $imageDirectory = public_path('images/all-images');
        $imageFilePath = base_path('image_list.txt');

        // Check if the directory exists
        if (!File::exists($imageDirectory)) {
            $this->error("Directory not found: {$imageDirectory}");
            return;
        }

        // Get all image files from the directory
        $images = File::allFiles($imageDirectory);

        // Prepare the image list content
        $imageList = '';
        foreach ($images as $image) {
            $imageList .= $image->getFilename() . PHP_EOL;
        }

        // Save the image list to a file
        File::put($imageFilePath, $imageList);
        $this->info("Image list saved to {$imageFilePath}");
    }
}
