<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // PHÂN QUYỀN: User của người dùng, bao gồm thông tin cá nhân, email lúc đăng ký lái thử
    //User của Admin bao gồm emails và password đăng nhập vào: có quyền chỉnh sửa, xóa các thứ
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        //Tạo bảng user
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Tạo trường ID tự động tăng
            $table->string('name'); // Tạo trường tên
            $table->string('email')->unique(); // Tạo trường email với giá trị duy nhất
            $table->timestamp('email_verified_at')->nullable(); // Tạo trường xác thực email, có thể để trống
            $table->string('password'); // Tạo trường mật khẩu
            $table->timestamp('test_driver_date')->nullable(); // Tạo trường ngày lái thử, có thể để trống
            $table->text('feedback')->nullable(); // Tạo trường phản hồi, có thể để trống và sử dụng kiểu TEXT cho phản hồi dài
            $table->string('phone_number')->unique(); // Tạo trường số điện thoại, có thể để trống
            $table->rememberToken(); // Tạo trường token nhớ cho chức năng "Remember Me"
            $table->timestamps(); // Tạo các trường created_at và updated_at
            $table->enum('role', ['admin', 'user'])->default('user');//Phân quyền quản trị
            $table->string('address')->nullable();
            $table->string('content')->nullable();
            $table->decimal('deposit');
        });
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};