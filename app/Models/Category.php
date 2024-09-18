<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // If your table follows the default Laravel naming convention ('categories'), no need to specify it.
    // If not, uncomment and specify the correct table name:
    // protected $table = 'your_table_name';

    // Specify mass-assignable fields
    protected $fillable = ['name', 'description', 'slug'];

    public $timestamps = true;

    // A Category has many Subcategories
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}

