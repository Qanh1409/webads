<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Bảng chứa thông tin về nội thất
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exteriors', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->foreignId('car_id')->nullable()->constrained('cars', 'car_id')->onDelete('set null');
            $table->id('exteriors_id');
            $table->string('low_beam');//Đèn chiếu gần
            $table->string('hight_beam'); //Đèn chiếu xa
            $table->boolean('LEDLight_Day'); // Đèn Led ban ngày
            $table->boolean('auto_headlights'); // tự động bật tắt đèn
            $table->boolean('auto_leveling'); // cân bằng góc chiếu
            $table->boolean('power_mirror'); // gương chỉnh điện
            $table->boolean('auto_folding'); // gương gập điện
            $table->boolean('auto_wipers'); // gạt mưa tự động 
            $table->boolean('rear_LEDLight'); // Đèn Led phía sau
            $table->boolean('sunroof'); // Đèn Led ban ngày
            $table->boolean('double_exhaust'); // Đèn Led ban ngày
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exteriors');
    }
};
