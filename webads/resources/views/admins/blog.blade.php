@extends('layouts.admin') <!-- Kế thừa layout admin -->

@section('content')
<div style="max-width: 1200px; margin: 0 auto; padding: 32px;">
    <!-- Tiêu đề và nút Thêm bài viết -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px;">
        <h1 style="font-size: 28px; font-weight: bold; color: #1a202c;">Danh sách bài viết</h1>
        <a href="{{ route('admin.blog.add') }}"
            style="background-color: #000; color: #fff; padding: 12px 24px; border-radius: 8px; font-size: 14px; font-weight: 600; text-decoration: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); transition: transform 0.2s ease, background-color 0.3s ease;"
            onmouseover="this.style.backgroundColor='#333'"
            onmouseout="this.style.backgroundColor='#000'"
            onmousedown="this.style.transform='scale(0.95)'"
            onmouseup="this.style.transform='scale(1)'">
            + Thêm bài viết
        </a>
    </div>

    <!-- Kiểm tra nếu có bài viết -->
    @if($blogs->count())
    <div style="overflow: hidden; border-radius: 12px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);">
        <table style="width: 100%; border-collapse: collapse; background-color: #fff;">
            <thead>
                <tr style="background-color: #f7fafc; text-align: left; color: #4a5568; font-size: 14px; text-transform: uppercase;">
                    <th style="padding: 16px; border-bottom: 1px solid #e2e8f0;">Tiêu đề</th>
                    <th style="padding: 16px; border-bottom: 1px solid #e2e8f0;">Hình ảnh</th>
                    <th style="padding: 16px; border-bottom: 1px solid #e2e8f0;">Tác giả</th>
                    <th style="padding: 16px; border-bottom: 1px solid #e2e8f0;">Ngày tạo</th>
                    <th style="padding: 16px; border-bottom: 1px solid #e2e8f0; text-align: center;">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $key => $blog)
                <tr style="transition: background-color 0.3s ease;">
                    <td style="padding: 16px; border-bottom: 1px solid #e2e8f0; font-weight: 500; color: #2d3748;">{{ $blog->title }}</td>
                    <td style="padding: 16px; border-bottom: 1px solid #e2e8f0;">
                        <img src="{{ asset('images/blogs/'.$blog->img) }}" alt="{{ $blog->title }}"
                            style="width: 96px; height: 64px; object-fit: cover; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    </td>
                    <td style="padding: 16px; border-bottom: 1px solid #e2e8f0; color: #718096;">{{ $blog->user->name ?? 'Ẩn danh' }}</td>
                    <td style="padding: 16px; border-bottom: 1px solid #e2e8f0; color: #718096;">{{ $blog->created_at->format('d/m/Y') }}</td>
                    <td style="padding: 16px; border-bottom: 1px solid #e2e8f0; text-align: center;">
                        <div style="display: flex; justify-content: center; gap: 12px;">
                            <a href="{{ route('admin.blog.edit', $blog->id) }}"
                                style="background-color: #000; color: #fff; padding: 8px 16px; border-radius: 6px; font-size: 14px; font-weight: 500; text-decoration: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); transition: transform 0.2s ease, background-color 0.3s ease;"
                                onmouseover="this.style.backgroundColor='#333'"
                                onmouseout="this.style.backgroundColor='#000'"
                                onmousedown="this.style.transform='scale(0.95)'"
                                onmouseup="this.style.transform='scale(1)'">
                                Sửa
                            </a>
                            <form action="{{ route('admin.blog.delete', $blog->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    style="background-color: #000; color: #fff; padding: 8px 16px; border-radius: 6px; font-size: 14px; font-weight: 500; text-decoration: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); transition: transform 0.2s ease, background-color 0.3s ease;"
                                    onmouseover="this.style.backgroundColor='#333'"
                                    onmouseout="this.style.backgroundColor='#000'"
                                    onmousedown="this.style.transform='scale(0.95)'"
                                    onmouseup="this.style.transform='scale(1)'"
                                    onclick="return confirm('Bạn có chắc muốn xóa bài viết này?')">
                                    Xóa
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div style="text-align: center; padding: 48px;">
        <h2 style="font-size: 18px; font-weight: 600; color: #718096;">Không có bài viết nào!</h2>
        <p style="color: #a0aec0;">Hãy thêm bài viết mới để hiển thị trong danh sách.</p>
    </div>
    @endif
</div>

@endsection