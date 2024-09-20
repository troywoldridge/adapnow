<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    protected $table = 'product_stock';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
