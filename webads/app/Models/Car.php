<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // Đặt tên bảng nếu không phải là số nhiều của tên model
    protected $table = 'cars'; // Bảng này sẽ chứa dữ liệu xe

    // Thuộc tính có thể gán
    protected $fillable = [
        'image',
        'name',
        'price',
        'category_id',
        'description',
    ];

    protected static function booted()
    {
        static::created(function ($car) {
            $car->carDetail()->create(
                [
                    'car_id' => $car->id,
                ]
            );
        });
        
        static::deleting(function ($car) {
            $car->carDetail()->delete();
        });
    }


    // Nếu bạn có mối quan hệ với Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function  carDetail()
    {
        return $this->hasOne(CarDetail::class);
    }
}
