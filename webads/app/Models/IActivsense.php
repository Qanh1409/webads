<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IActivsense extends Model
{
    use HasFactory;

    protected $table = 'i_activsense';

    protected $fillable = [
        'detail_id',
        'afs',                         // Adaptive Front-Lighting System
        'hbc',                         // High Beam Control
        'alh',                         // Adaptive LED Headlights
        'rcta',                        // Rear Cross Traffic Alert
        'ldw',                         // Lane Departure Warning
        'las',                         // Lane-keep Assist System
        'city_brake_support_front',    // Smart City Brake Support - Front
        'city_brake_support_rear',     // Smart City Brake Support - Rear
        'sbs',                         // Smart Brake Support
        'mrcc',                        // Mazda Radar Cruise Control
        'daa',                         // Driver Attention Alert
        'bsm',                         // Blind Spot Monitoring
    ];

    // Quan hệ với model CarDetail
    public function carDetail()
    {
        return $this->belongsTo(CarDetail::class, 'detail_id');
    }
}
