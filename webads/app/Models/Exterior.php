<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exterior extends Model
{
    use HasFactory;

    // Tên bảng trong database
    protected $table = 'exteriors';

    // Các cột có thể gán giá trị hàng loạt
    protected $fillable = [
        'detail_id',
        'low_beam',
        'high_beam',
        'LED_light_day',
        'auto_headlights',
        'auto_leveling',
        'power_mirror',
        'auto_folding',
        'auto_wipers',
        'rear_LED_light',
        'sunroof',
        'double_exhaust',
    ];

    // Quan hệ với model `CarDetail`
    public function carDetail()
    {
        return $this->belongsTo(CarDetail::class, 'detail_id');
    }
}
