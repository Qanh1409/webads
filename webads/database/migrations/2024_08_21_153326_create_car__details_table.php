<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    //Bảng này về car_details: Chi tiết về sản phẩm và các chi tiết kỹ thuật (kích thước - khối lượng)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car__details', function (Blueprint $table) {
            $table->id('detail_id'); //Định danh chi tiết
            $table->timestamps();
            $table->foreignId('car_id')->nullable()->constrained('cars', 'car_id')->onDelete('set null');
            $table->decimal('size');
            $table->decimal('wheelbase'); //Chiều dài cơ sở
            $table->decimal('turning_radius'); //Bán kính vòng quay
            $table->decimal('ground_clearance'); //Khoảng sáng gầm
            $table->decimal('curb_weight'); //Khối lượng không tải
            $table->decimal('gross_weight'); //Khối lượng toàn tải
            $table->integer('cargo_volume'); //Thể tích khoang hành lý
            $table->integer('fuel_tank_capacity'); // Dung tích bình nhiên liệu
            $table->decimal('deposit_required'); //Đặt cọc (cân nhắc)

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car__details');
    }
};
