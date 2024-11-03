<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineTransmission extends Model
{
    use HasFactory;

    protected $table = 'engine_transmissions';

    // Các cột có thể được điền vào thông qua việc sử dụng các lệnh như create hoặc fill
    protected $fillable = [
        'detail_id',
        'type_engine',
        'fuel_system',
        'cylinder_capacity',
        'max_power',
        'max_torque',
        'transmission',
        'sport_mode',
        'GVC_system',
        'iStop',
    ];

    // Thiết lập kiểu dữ liệu cho các trường, như boolean và decimal
    protected $casts = [
        'cylinder_capacity' => 'decimal:2',
        'max_torque' => 'decimal:2',
        'max_power' => 'integer',
        'sport_mode' => 'boolean',
        'iStop' => 'boolean',
    ];

    /**
     * Định nghĩa quan hệ ngược lại với CarDetail.
     * Mỗi EngineTransmission thuộc về một CarDetail.
     */
    public function carDetail()
    {
        return $this->belongsTo(CarDetail::class, 'detail_id');
    }
}
