<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
class UserController extends Controller
{
    /**
     * Hiển thị trang đăng ký.
     *
     * @return \Illuminate\View\View
     */
    public function register()
    {
        return view('users.register');
    }

    /**
     * Xử lý đăng ký người dùng mới.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'phone_number' => 'required|string|regex:/^0[0-9]{9}$/|max:20|unique:users',
            'address' => 'nullable|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ];

        $messages = [
            'name.required' => 'Tên là bắt buộc',
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email phải là một địa chỉ email hợp lệ',
            'email.unique' => 'Email đã được sử dụng',
            'phone_number.required' => 'So dien thoaij la bat buoc',
            'phone_number.unique' => 'So dien thoai da ton tai',
            'phone_number.regex' => 'Số điện thoại phải bắt đầu bằng 0 và có 10 chữ số',
            'password.required' => 'Mật khẩu là bắt buộc',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp',
        ];

        $request->validate($rules,$messages);

        // Tạo người dùng mới
       $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        $verificationUrl = route('verification.verify', ['id' => $user->id, 'hash' => sha1($user->email)]);
        Mail::to($user->email)->send(new VerifyEmail($user, $verificationUrl));

        // Chuyển hướng sau khi đăng ký thành công
        return redirect()->route('user.login')->with('success', 'Đăng ký thành công!');
    }

    /**
     * Hiển thị trang đăng nhập.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('users.login');
    }

    /**
     * Xử lý đăng nhập người dùng.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

            public function signin(Request $request)
            {
                // Validate dữ liệu đầu vào
                $credentials = $request->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ]);
            
                // Kiểm tra thông tin đăng nhập
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
            
                    $user = Auth::user();
            
                    // Kiểm tra trạng thái xác nhận email
                    if (is_null($user->email_verified_at)) {
                        Auth::logout(); // Đăng xuất người dùng ngay lập tức
                        return back()->withErrors([
                            'email' => 'Tài khoản của bạn chưa được xác nhận email. Vui lòng kiểm tra email để xác nhận.',
                        ])->onlyInput('email');
                    }
            
                    // Lưu ID người dùng vào phiên
                    $request->session()->put('user_id', $user->id);
            
                    // Điều hướng dựa trên vai trò của người dùng
                    if ($user->role == 'admin') {
                        return redirect()->route('admin')->with('logined', 'Đăng nhập thành công');
                    }
            
                    return redirect()->route('home')->with('logined', 'Đăng nhập thành công');
                }
            
                return back()->withErrors([
                    'email' => 'Thông tin đăng nhập không chính xác.',
                ])->onlyInput('email');
            }
            

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


}
