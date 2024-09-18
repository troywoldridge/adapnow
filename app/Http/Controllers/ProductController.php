<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function importCsv(Request $request)
    {
        $file = $request->file('csv_file'); // Assuming the form input name is 'csv_file'

        if ($file) {
            $filePath = $file->getRealPath();
            $handle = fopen($filePath, 'r');

            // Skip the header row if your CSV has headers
            $header = fgetcsv($handle);

            DB::beginTransaction();
            try {
                while (($row = fgetcsv($handle, 1000, ",")) !== false) {
                    Product::updateOrCreate(
                        ['sku' => $row[5]],  // Assuming 'sku' is the unique identifier and is in the 6th column (index 5)
                        [
                            'id' => $row[0], // CSV column 0 maps to 'id'
                            'category_id' => $row[1],  // CSV column 1 maps to 'category_id'
                            'subcategory_id' => $row[2],  // CSV column 2 maps to 'subcategory_id'
                            'name' => $row[3],  // CSV column 3 maps to 'name'
                            'slug' => $row[4],  // CSV column 4 maps to 'slug'
                            'sku' => $row[5],  // CSV column 5 maps to 'sku'
                            'description' => $row[6],  // CSV column 6 maps to 'description'
                            'category_slug' => $row[7],  // CSV column 7 maps to 'category_slug'
                            'price' => $row[8],  // CSV column 8 maps to 'price'
                            'image' => $row[9],  // CSV column 9 maps to 'image'
                            'image2' => $row[10],  // CSV column 10 maps to 'image2'
                            'image3' => $row[11],  // CSV column 11 maps to 'image3'
                            'image4' => $row[12],  // CSV column 12 maps to 'image4'
                            'image5' => $row[13],  // CSV column 13 maps to 'image5'
                            'created_at' => $row[14],  // CSV column 14 maps to 'created_at'
                            'updated_at' => $row[15],  // CSV column 15 maps to 'updated_at'
                        ]
                    );
                }
                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                return back()->withErrors(['error' => 'Error while importing data: ' . $e->getMessage()]);
            }

            fclose($handle);
            return back()->with('success', 'CSV data successfully imported into the database.');
        }

        return back()->withErrors(['error' => 'Please upload a valid CSV file.']);
    }
}
