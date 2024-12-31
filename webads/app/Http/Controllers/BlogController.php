<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    //
    public function createBlog(Request $request)
    {
        // Validation rules

        $rules = [
            'user_id' => 'required|integer|exists:users,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ];

        // Custom validation messages
        $messages = [
            'user_id.required' => 'User ID is required',
            'user_id.integer' => 'User ID must be an integer',
            'user_id.exists' => 'User ID must exist in the users table',
            'title.required' => 'Title is required',
            'title.string' => 'Title must be a string',
            'title.max' => 'Title may not be greater than 255 characters',
            'content.required' => 'Content is required',
            'content.string' => 'Content must be a string',
        ];

        // Validate the request


        // Create new blog instance
        $blog = new Blog;
        $user = Auth::user();
        $blog->user_id = $user->id;
        $blog->title = $request->title;
        $blog->content = $request->content;

        // Handle the image upload
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = 'blog_image_' . time() . '.' . $extension;
            $image_path = public_path('images/blogs');
            $file->move($image_path, $filename);
            $blog->img = $filename;
        }

        // Save the blog to the database
        $blog->save();

        $validator = Validator::make($request->all(), $rules, $messages);


        // Redirect with success message
        return redirect()->route('admin.blog')->with('success', 'Blog created successfully.');
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
    public function updateBlog(Request $request, $id)
    {
        // Xác định các quy tắc validate
        $rules = [
            'title' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ];

        // Các thông báo lỗi khi validate
        $messages = [
            'title.required' => 'Tiêu đề bài viết là bắt buộc.',
            'title.string' => 'Tiêu đề bài viết phải là một chuỗi ký tự.',
            'title.max' => 'Tiêu đề bài viết không được vượt quá 255 ký tự.',
            'img.image' => 'Tệp tải lên phải là hình ảnh.',
            'img.mimes' => 'Hình ảnh phải thuộc các định dạng: jpeg, png, jpg, gif.',
            'img.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
            'content.required' => 'Nội dung bài viết là bắt buộc.',
            'content.string' => 'Nội dung bài viết phải là một chuỗi ký tự.',
        ];


        // Thực hiện validate
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            // Nếu validate không thành công, trả lại lỗi kèm dữ liệu cũ
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Tìm bài viết theo ID, hoặc báo lỗi nếu không tồn tại
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title; // Cập nhật tiêu đề
        $blog->content = $request->content; // Cập nhật nội dung
        // Handle the image upload
        if ($request->hasFile('img')) {
            $anhcu = 'images/blogs/' . $blog->img;
            if (File::exists($anhcu)) {
                File::delete($anhcu);
            }
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = 'blog_image_' . time() . '.' . $extension;
            $image_path = public_path('images/blogs');
            $file->move($image_path, $filename);
            $blog->img = $filename;
        }
        // Lưu các thay đổi
        $blog->update();

        // Trả về thông báo thành công
        return redirect()->route('admin.blog')->with('success', 'Bài viết đã được cập nhật thành công.');
    }
    public function deleteBlog($id)
    {
        // Tìm bài viết theo ID
        $post = Blog::find($id);

        // Kiểm tra nếu bài viết không tồn tại
        if (!$post) {
            return redirect()->route('admin.blog')->with('error', 'Bài viết không tồn tại.');
        }

        // Kiểm tra và xóa hình ảnh liên quan (nếu có)
        $img = 'images/blogs/' . $post->img;
        if (File::exists($img)) {
            File::delete($img);
        }

        // Xóa bài viết
        $post->delete();

        // Trả về với thông báo thành công
        return redirect()->route('admin.blog')->with('success', 'Bài viết đã được xóa thành công.');
    }
}
