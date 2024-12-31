<!-- TIN TỨC -->

@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<div style="font-family: 'Lato', sans-serif; padding: 40px; background-color: #f8f9fa; color: #333; max-width: 1200px; margin: auto;">
    <!-- Chi tiết bài viết -->
    <div id="article-detail"
        style="display: none; background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);">
        <h1 id="article-title" style="font-size: 30px; font-weight: 700; margin-bottom: 20px; color: #2c3e50;"></h1>
        <p id="article-content" style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;"></p>
        <a href="#" onclick="closeArticle()"
            style="font-size: 16px; font-weight: 600; color: #007bff; text-decoration: none;">Quay lại</a>
    </div>

    <!-- Danh sách bài viết -->
    <div style="margin-top: 40px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        @foreach ($blogs as $blog)
        <div style="background: #ffffff; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); overflow: hidden;">
            <img src="" alt="News Image"
                style="width: 100%; height: 200px; object-fit: cover;">
            <div style="padding: 20px;">
                <h3 style="font-size: 20px; font-weight: 600; color: #2c3e50; margin-bottom: 10px;"></h3>
                <p style="font-size: 14px; line-height: 1.6; color: #777;"></p>
                <div style="width: 100%; height: 2px; background-color: #007bff; margin: 15px 0;"></div>
                <a href="" onclick="showArticle('{{$blog->title}}', `{{$blog->content}}`)"
                    style="font-size: 14px; font-weight: 600; color: #007bff; text-decoration: none;">
                    Xem chi tiết
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- JavaScript -->
<script>
    function showArticle(title, content) {
        // Gắn tiêu đề và nội dung vào khối hiển thị chi tiết
        document.getElementById('article-title').textContent = title;
        document.getElementById('article-content').textContent = content;

        // Hiển thị chi tiết bài viết và ẩn danh sách
        document.getElementById('article-detail').style.display = 'block';
    }

    function closeArticle() {
        // Ẩn chi tiết bài viết và quay lại danh sách
        document.getElementById('article-detail').style.display = 'none';
    }
</script>

@endsection