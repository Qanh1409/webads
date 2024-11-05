<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Safety extends Model
{
    use HasFactory;

    protected $table = 'safeties';

    // Các trường có thể gán hàng loạt
    protected $fillable = [
        'detail_id',
        'air_bag',
        'abs',
        'ebd',
        'eba',
        'ess',
        'dsc',
        'tcs',
        'hla',
        'immobilizer',
        'burgler_alarm',
        'rear_camera',
        'front_sensor',
        'rear_sensor',
        'camera360',
        'seatbelt_warning'
    ];

    // Định nghĩa quan hệ với model CarDetail
    public function carDetail()
    {
        return $this->belongsTo(CarDetail::class, 'detail_id');
    }
}
