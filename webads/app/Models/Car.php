<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Car extends Model
{
    protected $fillable = ['name', 'price', 'description', 'category_id', 'image'];

    // Mối quan hệ với bảng `categories` (Many-to-One)
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    protected static function booted()
    {
        static::created(function ($car) {
            // Tạo bản ghi CarDetail khi tạo Car mới
            $car->carDetail()->create([
                'engine_type' => 'Default Engine Type',
                'transmission' => 'Automatic',
                'fuel_type' => 'Petrol',
                'car_id' => $car->id, // Gán car_id cho CarDetail
            ]);
        });
    }

    // Mối quan hệ với bảng `car_details` (One-to-One hoặc One-to-Many)
    public function carDetail()
    {
        return $this->hasOne(CarDetail::class, 'car_id');  // Hoặc sử dụng `hasMany` nếu một chiếc xe có nhiều chi tiết
    }
}
