<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductQuantitySeeder extends Seeder
{
    public function run()
    {
        // Define the quantities
        $defaultQuantities = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 30, 40, 50, 60, 70, 80, 90, 100];
        $businessCardQuantities = [100, 250, 500, 750, 1000, 1250, 1500, 1750, 2000, 2500, 3000, 3500, 4000, 4500, 5000, 5500, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000, 16000, 17000, 18000, 19000, 20000, 21000, 22000, 23000, 24000, 25000];

        // Get all products, but exclude Apparel category
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.name', '!=', 'Apparel')  // Exclude Apparel
            ->select('products.id', 'categories.name as category_name')
            ->get();

        foreach ($products as $product) {
            // Assign the appropriate quantity range based on the category
            if ($product->category_name === 'Business Cards') {
                $quantities = $businessCardQuantities;
            } else {
                $quantities = $defaultQuantities;
            }

            // Insert the quantities for the current product
            foreach ($quantities as $quantityValue) {
                // Get the quantity_id from the quantities table based on the quantity value
                $quantity = DB::table('quantities')->where('quantity_value', $quantityValue)->first();
                
                if ($quantity) {
                    DB::table('product_quantities')->insert([
                        'product_id' => $product->id,
                        'quantity_id' => $quantity->id,  // Use quantity_id here
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}

