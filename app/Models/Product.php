<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;  
use App\Models\Subcategory;

class Product extends Model
{
    use HasFactory;

    // Specify the table if it doesn't follow Laravel's default naming convention
    protected $table = 'products'; // This can be omitted if your table is named 'products' by convention

    // Specify which fields can be mass assigned
    protected $fillable = [
        'category_id',
        'subcategory_id',
        'name',
        'slug',
        'sku',
        'description',
        'category_slug',
        'price',
        'image',
        'image2',
        'image3',
        'image4',
        'image5',
        'created_at',
        'updated_at',
    ];

    // Enable timestamps by default
    public $timestamps = true;

    // Define relationship: Product belongs to a Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Define relationship: Product belongs to a Subcategory
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    // Accessor for product images to handle multiple images with a fallback
    public function getImagesAttribute()
    {
        return array_filter([
            $this->image,
            $this->image2,
            $this->image3,
            $this->image4,
            $this->image5
        ]);
    }
}

