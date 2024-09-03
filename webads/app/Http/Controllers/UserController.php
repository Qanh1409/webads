<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
            'phone_number' => 'nullable|string|regex:/^0[0-9]{9}$/|max:20',
            'address' => 'nullable|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ];

        $messages = [
            'name.required' => 'Tên là bắt buộc',
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email phải là một địa chỉ email hợp lệ',
            'email.unique' => 'Email đã được sử dụng',
            'phone_number.regex' => 'Số điện thoại phải bắt đầu bằng 0 và có 10 chữ số',
            'password.required' => 'Mật khẩu là bắt buộc',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Tạo người dùng mới
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

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
        // Xử lý đăng nhập ở đây
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home')->with('success', 'Đăng ký thành công!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
