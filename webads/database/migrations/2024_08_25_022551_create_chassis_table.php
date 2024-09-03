<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Bảng chứa thông tin về khung gầm động cơ
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chassis', function (Blueprint $table) {
            // $table->id();
            $table->id('chassis_id');
            $table->timestamps();
            $table->foreignId('car_id')->nullable()->constrained('cars', 'car_id')->onDelete('set null');
            $table->string('front_suspension'); //Hệ thống treo trước
            $table->string('rear_suspension'); //Treo sau
            $table->string('front_brake'); //Phanh trước
            $table->string('rear_brake'); // phanh sau
            $table->string('steering_assistance'); // trợ lực lái: điện, thủy lực
            $table->string('size_tire'); // Kích thước lốp: 225/50 R17
            $table->integer('weel_diameter'); // đường kính mâm (inh)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chassis');
    }
};
