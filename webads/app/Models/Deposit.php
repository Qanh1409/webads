<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    /**
     * Tên bảng trong cơ sở dữ liệu.
     *
     * @var string
     */
    protected $table = 'deposits';

    /**
     * Các trường có thể gán giá trị hàng loạt.
     *
     * @var array
     */
    protected $fillable = [
        'car_id',
        'user_id',
        'amount',
        'color',
    ];

    /**
     * Định nghĩa mối quan hệ với model Car.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    /**
     * Định nghĩa mối quan hệ với model User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
