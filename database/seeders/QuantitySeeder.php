<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuantitySeeder extends Seeder
{
    /**
     * Run the database seeds for the quantities table.
     *
     * @return void
     */
    public function run()
    {
        $quantities = [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
            30, 40, 50, 60, 70, 80, 90, 100, 250, 500, 750, 1000, 1250, 1500, 1750,
            2000, 2500, 3000, 3500, 4000, 4500, 5000, 5500, 6000, 7000, 8000, 9000,
            10000, 11000, 12000, 13000, 14000, 15000, 16000, 17000, 18000, 19000,
            20000, 21000, 22000, 23000, 24000, 25000
        ];

        foreach ($quantities as $quantity) {
            DB::table('quantities')->insert([
                'quantity_value' => $quantity,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
