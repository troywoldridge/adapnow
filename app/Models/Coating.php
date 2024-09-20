<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coating extends Model
{
    protected $table = 'coating';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
