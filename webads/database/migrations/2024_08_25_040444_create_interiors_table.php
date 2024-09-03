<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Đã tạo xong model, chưa sửa thuộc tính và chưa migrate + controller
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('interiors', function (Blueprint $table) {
            $table->id('interiors_id');
            $table->foreignId('car_id')->nullable()->constrained('cars', 'car_id')->onDelete('set null');
            $table->timestamps();
            $table->string('seat_material'); //Chất liệu ghế da (da, nỉ);
            $table->boolean('driverSeat_Electric'); //Ghế LÁI chỉnh điện
            $table->boolean('driverSeat_Memory'); // nhớ vị trí ghế lái
            $table->boolean('passengerSeat_Electric'); //Ghế phụ chỉnh điện
            $table->boolean('DCV_player'); // đầu DVD
            $table->string('touchscreen'); // Màn cảm ứng: 8inh, 12inh, radio,...
            $table->string('speaker'); // loa: 6 loa tiêu chuẩn/bose,....
            $table->boolean('brakeHand_electric'); // Phanh tay điện tử
            $table->boolean('autoHold'); // Phanh tay điện tử
            $table->boolean('Buton_engine'); // khởi động bằng nút bấm 
            $table->boolean('cruise_control'); // Ga tự động
            $table->string('auto_climate'); //điều hòa tự độn(có/2 vùng) 
            $table->boolean('rear_airvents'); // Cửa gió hàng ghế sau
            $table->boolean('window_electric'); // Cửa sổ chỉnh điện
            $table->boolean('autoDimming_mirror'); // Gương trung tâm chống chói
            $table->boolean('HUD'); // HUD
            $table->boolean('window2nd_sunshadesCenter'); // Rèm che kính trung tâm phía sau chỉnh điện
            $table->boolean('window2nd_sunshades'); // Rèm che cửa sổ chỉnh điện
            $table->boolean('armrest'); // Tựa tay hàng ghế sau
            $table->boolean('armrest_USB'); // Tựa tay hàng ghế sau tích hợp USB
            $table->boolean('rearSeatsFold60_40'); // Hàng ghế thứ hai gập theo tỉ lệ 60:40
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interiors');
    }
};
