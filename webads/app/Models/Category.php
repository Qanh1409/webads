<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'img',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($category) {
            $category->car()->delete();
        });
    }

     public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
