<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    // If your table follows the default Laravel naming convention ('subcategories'), no need to specify it.
    // If not, uncomment and specify the correct table name:
    // protected $table = 'your_table_name';

    public $timestamps = true;

    // A Subcategory belongs to a Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // A Subcategory can have many Products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
