<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //bảng cars: sản phẩm ô tô (categories về các dòng sedan, hatchback, SUV gồm những xe gì, h/a, giá bán)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id('car_id');
            $table->string('image');
            $table->string('name');
            $table->decimal('price');
            $table->foreignId('category_id')->nullable()->constrained('categories','id')->onDelete('set null');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
