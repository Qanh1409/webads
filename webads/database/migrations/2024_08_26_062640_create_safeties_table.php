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
        Schema::create('safeties', function (Blueprint $table) {
            $table->id('safeties_id'); //id liên kết
            $table->foreignId('car_id')->nullable()->constrained('cars', 'car_id')->onDelete('set null');
            $table->timestamps();
            $table->boolean('air_bag');// túi khí
            $table->boolean('abs');//ABS
            $table->boolean('ebd');//Phân bổ phanh điện tử EBD
            $table->boolean('eba');// hỗ trợ phanh khẩn cấp EBA
            $table->boolean('ess');// cảnh báo phanh khẩn cấp ESS
            $table->boolean('dsc');//Cân bằng điện tử DSC
            $table->boolean('tcs');//Kiểm soát lực kéo chống trượt TCS
            $table->boolean('hla');//khởi hành ngang dốc HLA
            $table->boolean('immobilizer');//Mã hóa chìa
            $table->boolean('burgler_alarm'); //cảnh báo chống trộm
            $table->boolean('rear_camera'); //cam lùi
            $table->boolean('front_sensor');//Cảm biến va chạm phía trước
            $table->boolean('rear_sensor');//Cảm biến va chạm phía sau
            $table->boolean('camera360'); //Cam 360
            $table->boolean('seatbelt_warning'); //Cảnh báo thắt dây an toàn
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('safeties');
    }
};
