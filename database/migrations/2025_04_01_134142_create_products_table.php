<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name', 50);
            $table->string('description', 255);
            $table->boolean('active')->default(true);
            $table->decimal('rating', 2, 1)->default(0);
            $table->integer('rating_count')->default(0);
            $table->decimal('price', 10, 2);
            $table->integer('stock_quantity')->default(0);
            $table->foreignId('dealer_id');
            $table->foreignId('sub_category_id');
            $table->boolean('featured')->default(false);
            $table->string('brand')->nullable();
            $table->integer('views')->default(0);
            $table->decimal('weight', 8, 2)->nullable();
            $table->boolean('status')->default(true);
            $table->string('dimensions')->nullable();
            $table->dateTime('available_since')->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
