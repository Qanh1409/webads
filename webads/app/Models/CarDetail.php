<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDetail extends Model
{
    use HasFactory;

    // Bảng tương ứng với model
    protected $table = 'car_details'; // Nếu tên bảng không phải là số nhiều của tên model

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

    // Mối quan hệ với Car
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
