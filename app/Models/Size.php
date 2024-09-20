<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
