<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    //Bảng này về động cơ- hộp số
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('engine_transmissions', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->id('engine_transmission');
            $table->foreignId('car_id')->nullable()->constrained('cars', 'car_id')->onDelete('set null');
            $table->string('type_engine'); //Kiểu động cơ: Xăng-hybrid, dầu,...
            $table->string('fuel_system');//Kiểu nhiên liệu:phun xăng trực tiếp,...đa điểm
            $table->decimal('cylinder_capacity'); // Dung tích xi lanh
            $table->integer('max_power'); // Công suất cực đại
            $table->decimal('max_torque'); // Mô men xoắn
            $table->string('tranmission'); // Kiểu hộp số: Tự động AT, CVT,..
            $table->boolean('sport_mode'); // Chế độ thể thao
            $table->string('GVC_sysem'); // hệ thống GVC (Kiểm soát độ ổn định của xe): GVC, GVC Plus,i-activ,...
            $table->boolean('iStop');//Hệ thống dừng/khởi động động cơ thông minh
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engine_transmissions');
    }
};
