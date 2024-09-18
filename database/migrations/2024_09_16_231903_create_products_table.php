<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary key (auto-incrementing)
            $table->unsignedBigInteger('category_id'); // Foreign key to categories table
            $table->unsignedBigInteger('subcategory_id')->nullable(); // Foreign key to subcategories table, nullable
            $table->string('name'); // Product name
            $table->string('slug'); // Product slug
            $table->string('sku')->nullable(); // Product SKU, nullable
            $table->text('description')->nullable(); // Product description, nullable
            $table->string('category_slug'); // Category slug
            $table->decimal('price', 10, 2); // Product price (decimal type with 2 decimal places)
            $table->string('image')->nullable(); // Main image
            $table->string('image_2')->nullable(); // Second image, nullable
            $table->string('image_3')->nullable(); // Third image, nullable
            $table->string('image_4')->nullable(); // Fourth image, nullable
            $table->string('image_5')->nullable(); // Fifth image, nullable
            $table->timestamps(); // created_at and updated_at columns
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
