<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chassis extends Model
{
    use HasFactory;

    // Specify the table name if it differs from the pluralized model name
    protected $table = 'chassis';

    // Specify the primary key type and whether it auto-increments
    protected $primaryKey = 'id';
    public $incrementing = true;
   

    // Define the attributes that are mass assignable
    protected $fillable = [
        'detail_id',
        'front_suspension',
        'rear_suspension',
        'front_brake',
        'rear_brake',
        'steering_assistance',
        'size_tire',
        'wheel_diameter',
    ];

    // Define timestamps as true if you want Laravel to handle `created_at` and `updated_at` fields automatically
    public $timestamps = true;

    /**
     * Define a relationship to the CarDetail model
     */
    public function carDetail()
    {
        return $this->belongsTo(CarDetail::class, 'detail_id');
    }
}
