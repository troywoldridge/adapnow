<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Product([
            'id'             => $row['id'],               // CSV header for id
            'category_id'    => $row['category_id'],      // CSV header for category_id
            'subcategory_id' => $row['subcategory_id'],   // CSV header for subcategory_id
            'name'           => $row['name'],             // CSV header for name
            'slug'           => $row['slug'],             // CSV header for slug
            'sku'            => $row['sku'],              // CSV header for sku
            'description'    => $row['description'],      // CSV header for description
            'category_slug'  => $row['category_slug'],    // CSV header for category_slug
            'image'          => $row['image'],            // CSV header for image
            'image_2'        => $row['image_2'],          // CSV header for image_2
            'image_3'        => $row['image_3'],          // CSV header for image_3
            'image_4'        => $row['image_4'],          // CSV header for image_4
            'image_5'        => $row['image_5'],          // CSV header for image_5
            'created_at'     => $row['created_at'],       // CSV header for created_at
            'updated_at'     => $row['updated_at'],       // CSV header for updated_at
        ]);
    }
}
