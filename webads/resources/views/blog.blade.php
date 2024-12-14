<!-- TIN TỨC -->

@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<div class="news-container">
    <!-- Phần 1: Tin tức chính với ảnh lớn -->
    <div class="main-news">
        <img src="https://via.placeholder.com/600x300" alt="Main News" class="main-news-image">
        <div class="main-news-content">
            <h2 class="main-news-title">Tiêu đề Tin Tức Chính</h2>
            <p class="main-news-description">Mô tả ngắn gọn về tin tức chính, cung cấp thông tin nổi bật và hấp dẫn người đọc.</p>
        </div>
    </div>

    <!-- Phần 2: Các tin tức phụ dạng lưới -->
    <div class="grid-news">
        <div class="grid-item">
            <img src="https://via.placeholder.com/200x150" alt="News 1" class="grid-news-image">
            <h3 class="grid-news-title">Tin Tức 1</h3>
            <p class="grid-news-description">Mô tả ngắn gọn về tin tức 1.</p>
        </div>
        <div class="grid-item">
            <img src="https://via.placeholder.com/200x150" alt="News 2" class="grid-news-image">
            <h3 class="grid-news-title">Tin Tức 2</h3>
            <p class="grid-news-description">Mô tả ngắn gọn về tin tức 2.</p>
        </div>
        <div class="grid-item">
            <img src="https://via.placeholder.com/200x150" alt="News 3" class="grid-news-image">
            <h3 class="grid-news-title">Tin Tức 3</h3>
            <p class="grid-news-description">Mô tả ngắn gọn về tin tức 3.</p>
        </div>
    </div>

    <!-- Phần 3: Tin tức dạng danh sách dọc -->
    <div class="list-news">
        <div class="list-item">
            <h4 class="list-news-title">Tin Tức Danh Sách 1</h4>
            <p class="list-news-description">Chi tiết mô tả tin tức danh sách 1.</p>
        </div>
        <div class="list-item">
            <h4 class="list-news-title">Tin Tức Danh Sách 2</h4>
            <p class="list-news-description">Chi tiết mô tả tin tức danh sách 2.</p>
        </div>
        <div class="list-item">
            <h4 class="list-news-title">Tin Tức Danh Sách 3</h4>
            <p class="list-news-description">Chi tiết mô tả tin tức danh sách 3.</p>
        </div>
    </div>
</div>

<style>
    .news-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
        padding: 20px;
        background-color: #f9f9f9;
    }

    /* Phần 1: Tin tức chính */
    .main-news {
        display: flex;
        gap: 20px;
        background: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .main-news-image {
        width: 50%;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .main-news-image:hover {
        transform: scale(1.05);
    }

    .main-news-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .main-news-title {
        font-size: 24px;
        margin: 0 0 10px;
    }

    .main-news-description {
        font-size: 16px;
        color: #555;
    }

    /* Phần 2: Tin tức dạng lưới */
    .grid-news {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .grid-item {
        background: #ffffff;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .grid-item:hover {
        transform: translateY(-5px);
    }

    .grid-news-image {
        width: 100%;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .grid-news-title {
        font-size: 18px;
        margin: 0 0 5px;
    }

    .grid-news-description {
        font-size: 14px;
        color: #777;
    }

    /* Phần 3: Tin tức dạng danh sách dọc */
    .list-news {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .list-item {
        background: #ffffff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background 0.3s ease;
    }

    .list-item:hover {
        background: #f0f0f0;
    }

    .list-news-title {
        font-size: 20px;
        margin: 0 0 5px;
    }

    .list-news-description {
        font-size: 14px;
        color: #666;
    }
</style>

@endsection