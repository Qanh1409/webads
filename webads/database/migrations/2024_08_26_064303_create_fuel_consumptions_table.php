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
        Schema::create('fuel_consumptions', function (Blueprint $table) {
            $table->id('fuel_consumptions_id'); //Liên kết khóa chính
            $table->foreignId('car_id')->nullable()->constrained('cars', 'car_id')->onDelete('set null');

            $table->timestamps();
            $table->decimal('city_consumption'); // trong thành phố
            $table->decimal('hightway_consumption'); // Đường trường
            $table->decimal('total_consumption'); // hỗn hợp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_consumptions');
    }
};

