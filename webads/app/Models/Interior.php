<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interior extends Model
{
    use HasFactory;

    // Specify the table name (if different from plural of model name)
    protected $table = 'interiors';

    // Define the primary key field (optional if not named 'id')
    protected $primaryKey = 'id';

    // Allow mass assignment for specific columns
    protected $fillable = [
        'detail_id',
        'seat_material',
        'driver_seat_electric',
        'driver_seat_memory',
        'passenger_seat_electric',
        'dvd_player',
        'touchscreen',
        'speaker',
        'electric_parking_brake',
        'auto_hold',
        'button_engine_start',
        'cruise_control',
        'automatic_climate_control',
        'rear_air_vents',
        'electric_windows',
        'auto_dimming_mirror',
        'hud',
        'sunshades_center',
        'sunshades_window_2nd_row',
        'rear_armrest',
        'rear_armrest_usb',
        'rear_seats_fold_60_40',
    ];

    

    // Define the relationship to CarDetail
    public function carDetail()
    {
        return $this->belongsTo(CarDetail::class, 'detail_id');
    }
}
