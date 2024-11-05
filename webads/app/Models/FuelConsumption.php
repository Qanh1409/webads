<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelConsumption extends Model
{
    use HasFactory;

    // Các cột cho phép gán hàng loạt (mass assignable)
    protected $fillable = [
        'detail_id',
        'city_consumption',
        'hightway_consumption',
        'total_consumption',
    ];

    /**
     * Định nghĩa quan hệ với model CarDetail
     * Mỗi FuelConsumption thuộc về một CarDetail
     */
    public function carDetail()
    {
        return $this->belongsTo(CarDetail::class, 'detail_id');
    }

}
