<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'blogs';

    // Khóa chính
    protected $primaryKey = 'id';

    // Các trường có thể gán giá trị hàng loạt
    protected $fillable = [
        'user_id',
        'title',
        'img',
        'content',
        'created_at',
        'updated_at',
    ];

    // Tùy chọn khi khóa chính không tự động tăng (mặc định đã đúng với AUTO_INCREMENT trong bảng)
    public $incrementing = true;

    // Kiểu dữ liệu của khóa chính
    protected $keyType = 'integer';

    // Nếu bảng không có các trường thời gian created_at và updated_at, đặt thuộc tính này thành false
    public $timestamps = true;

    // Các mối quan hệ

    /**
     * Blog thuộc về một User (One-to-Many Inverse Relationship)
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
