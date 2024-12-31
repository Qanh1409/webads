<!-- TIN TỨC -->

@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<div style="font-family: 'Lato', sans-serif; padding: 40px; background-color: #f8f9fa; color: #333; max-width: 1200px; margin: auto;">
    <!-- Phần 1: Tin tức chính với ảnh lớn -->
    <div style="display: flex; gap: 40px; background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); align-items: center;">
        <img src="{{ asset('images/blogs/'.$latestBlog->img) }}" alt="Main News"
            style="width: 60%; border-radius: 12px; transition: transform 0.3s ease;">
        <div style="flex: 1;">
            <h1 style="font-size: 30px; font-weight: 700; margin: 0; color: #2c3e50;">{{$latestBlog->title}}</h1>
            <p style="font-size: 16px; line-height: 1.8; color: #555; margin-top: 15px;">{{$latestBlog->content}}</p>
            <div style="width: 100%; height: 2px; background-color: #007bff; margin: 20px 0;"></div>
            <a href="{{ url('blog/' . $latestBlog->id) }}"
                style="font-size: 16px; font-weight: 600; color: #007bff; text-decoration: none;">
                Xem chi tiết
            </a>
        </div>
    </div>

    <!-- Phần 2: Các tin tức phụ dạng lưới -->
    <div style="margin-top: 40px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        @foreach ($blogs as $blog)
        <div style="background: #ffffff; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.3s ease;">
            <img src="{{ asset('images/blogs/'.$blog->img) }}" alt="News Image"
                style="width: 100%; height: 200px; object-fit: cover;">
            <div style="padding: 20px;">
                <h3 style="font-size: 20px; font-weight: 600; color: #2c3e50; margin-bottom: 10px;">{{$blog->title}}</h3>
                <p style="font-size: 14px; line-height: 1.6; color: #777;">{{ Str::limit($blog->content, 80) }}</p>
                <div style="width: 100%; height: 2px; background-color: #007bff; margin: 15px 0;"></div>
                <a href="{{ url('blog/' . $blog->id) }}"
                    style="font-size: 14px; font-weight: 600; color: #007bff; text-decoration: none;">
                    Xem chi tiết
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Phần 3: Tin tức dạng danh sách dọc -->
    <div style="margin-top: 40px; display: flex; flex-direction: column; gap: 20px;">
        @foreach ($blogs as $blog)
        <div style="display: flex; align-items: center; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.3s ease; padding: 15px;">
            <!-- Hình ảnh bài viết -->
            <div style="flex-shrink: 0;">
                <img src="{{ asset('images/blogs/' . $blog->img) }}" alt="News Image"
                    style="width: 180px; height: 120px; object-fit: cover; border-radius: 8px;">
            </div>

            <!-- Nội dung bài viết -->
            <div style="flex-grow: 1; margin-left: 20px;">
                <!-- Tiêu đề -->
                <h3 style="font-size: 22px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">{{$blog->title}}</h3>
                <!-- Nội dung rút gọn -->
                <p style="font-size: 16px; line-height: 1.6; color: #555; margin-bottom: 10px;">
                    {{ Str::limit($blog->content, 100) }}
                </p>
                <!-- Nút xem chi tiết -->
                <div style="width: 100%; height: 2px; background-color: #007bff; margin: 15px 0;"></div>
                <a href="{{ url('blog/' . $blog->id) }}"
                    style="font-size: 14px; font-weight: 600; color: #007bff; text-decoration: none;">
                    Xem chi tiết
                </a>
            </div>
        </div>
        @endforeach
    </div>

</div>

<!-- Thêm liên kết Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;600;700&display=swap" rel="stylesheet">


<div style="margin: 40px auto; font-family: 'Arial', sans-serif; background-color: #f4f4f9;">
    <div style="max-width: 1200px; margin: auto; padding: 20px;">
        <h1 style="text-align: center; font-size: 28px; color: #34495e; margin-bottom: 40px;">Tin tức xe mới nhất</h1>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
            @foreach ($blogs as $blog)
            <div style="background: #ffffff; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.3s ease; padding: 15px;">
                <!-- Hình ảnh bài viết -->
                <div style="width: 100%; height: 200px; overflow: hidden; border-radius: 8px;">
                    <img src="{{ asset('images/blogs/' . $blog->img) }}" alt="Blog Image"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>

                <!-- Nội dung bài viết -->
                <div style="margin-top: 15px;">
                    <!-- Tiêu đề -->
                    <h3 style="font-size: 20px; font-weight: 700; color: #2c3e50; margin-bottom: 10px;">{{$blog->title}}</h3>
                    <!-- Nội dung rút gọn -->
                    <p style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 15px;">
                        {{ Str::limit($blog->content, 100) }}
                    </p>
                    <!-- Nút xem chi tiết -->
                    <div style="width: 100%; height: 2px; background-color: #007bff; margin: 15px 0;"></div>
                    <a href="{{ url('blog/' . $blog->id) }}"
                        style="font-size: 14px; font-weight: 600; color: #007bff; text-decoration: none;">
                        Xem chi tiết
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <style>
        @media (max-width: 1024px) {
            div[style*="grid-template-columns"] {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }

        @media (max-width: 768px) {
            div[style*="grid-template-columns"] {
                grid-template-columns: 1fr;
            }
        }
    </style>
</div>

@endsection