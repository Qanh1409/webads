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

            $carDetail->exterior()->create([
                'low_beam' => 'Default Low Beam',
                'high_beam' => 'Default High Beam',
                'LED_light_day' => 1,
                'auto_headlights' => 1,
                'auto_leveling' => 0,
                'power_mirror' => 1,
                'auto_folding' => 0,
                'auto_wipers' => 1,
                'rear_LED_light' => 1,
                'sunroof' => 0,
                'double_exhaust' => 0,
            ]);

            $carDetail->fuelConsumption()->create([
                'city_consumption' => 8.5,
                'hightway_consumption' => 6.0,
            ]);

            $carDetail->iActivsense()->create([
                'afs' => 1,                         // Adaptive Front-Lighting System
                'hbc' => 1,                         // High Beam Control
                'alh' => 0,                         // Adaptive LED Headlights
                'rcta' => 1,                        // Rear Cross Traffic Alert
                'ldw' => 1,                         // Lane Departure Warning
                'las' => 0,                         // Lane-keep Assist System
                'city_brake_support_front' => 1,    // Smart City Brake Support - Front
                'city_brake_support_rear' => 0,     // Smart City Brake Support - Rear
                'sbs' => 1,                         // Smart Brake Support
                'mrcc' => 1,                        // Mazda Radar Cruise Control
                'daa' => 0,                         // Driver Attention Alert
                'bsm' => 1,                         // Blind Spot Monitoring
            ]);

            $carDetail->safety()->create([
                'air_bag' => 1,
                'abs' => 1,
                'ebd' => 1,
                'eba' => 0,
                'ess' => 1,
                'dsc' => 0,
                'tcs' => 1,
                'hla' => 1,
                'immobilizer' => 0,
                'burgler_alarm' => 1,
                'rear_camera' => 1,
                'front_sensor' => 0,
                'rear_sensor' => 1,
                'camera360' => 0,
                'seatbelt_warning' => 1
            ]);
        
        });

        // Xóa các bản ghi liên quan khi CarDetail bị xóa
        static::deleting(function ($carDetail) {
            $carDetail->chassis()->delete();
            $carDetail->engineTransmission()->delete();
            $carDetail->exterior()->delete();
            $carDetail->fuelConsumption()->delete();
            $carDetail->safety()->delete();
            
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

    public function safety(){
        return $this->hasOne(Safety::class,'detail_id','id');
    }
    public function exterior()
    {
        return $this->hasOne(Exterior::class, 'detail_id', 'id');
    }

    public function fuelConsumption()
    {
        return $this->hasOne(FuelConsumption::class, 'detail_id', 'id');
    }

    public function iActivsense()
    {
        return $this->hasOne(IActivsense::class, 'detail_id', 'id');
    }
}
