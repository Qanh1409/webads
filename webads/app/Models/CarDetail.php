<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDetail extends Model
{
    use HasFactory;

    // Bảng tương ứng với model
    protected $table = 'car_details';

    // Thuộc tính có thể gán
    protected $fillable = [
        'car_id',
        'size',
        'wheelbase',
        'turning_radius',
        'ground_clearance',
        'curb_weight',
        'gross_weight',
        'cargo_volume',
        'fuel_tank_capacity',
        'deposit_required',
    ];

    // Khởi tạo các bản ghi liên quan khi CarDetail được tạo
    protected static function booted()
    {
        // Tạo bản ghi `chassis` và `engine_transmissions` khi tạo CarDetail mới
        static::created(function ($carDetail) {
            $carDetail->chassis()->create([
                'front_suspension' => 'Default Front Suspension',
                'rear_suspension' => 'Default Rear Suspension',
                'front_brake' => 'Default Front Brake',
                'rear_brake' => 'Default Rear Brake',
                'steering_assistance' => 'Default Steering Assistance',
                'size_tire' => 'Default Tire Size',
                'wheel_diameter' => 15,
            ]);

            $carDetail->engineTransmission()->create([
                'type_engine' => 'Default Engine Type',
                'fuel_system' => 'Default Fuel System',
                'cylinder_capacity' => 2.0,
                'max_power' => 150,
                'max_torque' => 250.0,
                'transmission' => 'Automatic',
                'sport_mode' => false,
                'GVC_system' => 'Default GVC',
                'iStop' => true,
            ]);
        });

        // Xóa các bản ghi liên quan khi CarDetail bị xóa
        static::deleting(function ($carDetail) {
            $carDetail->chassis()->delete();
            $carDetail->engineTransmission()->delete();
        });
    }

    // Quan hệ với model Car
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    // Quan hệ với model Chassis
    public function chassis()
    {
        return $this->hasOne(Chassis::class, 'detail_id', 'id');
    }

    // Quan hệ với model EngineTransmission
    public function engineTransmission()
    {
        return $this->hasOne(EngineTransmission::class, 'detail_id', 'id');
    }
}
