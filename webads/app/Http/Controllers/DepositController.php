<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\Car;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DepositController extends Controller
{
    
    public function deposit(Request $request, $id)
    {
        // Kiểm tra phương thức thanh toán
        $paymentMethod = $request->input('payment_method');
    
        // Kiểm tra trạng thái quét mã QR chỉ khi khách hàng chọn phương thức "Chuyển khoản ngân hàng"
       
        $car = Car::find($id);
    
        if(Auth::check()) {
            $user = Auth::user();
        }
        // Định nghĩa các quy tắc xác thực
        $rules = [
            'car_id' => 'required|exists:cars,id',  // car_id phải tồn tại trong bảng cars
            'user_id' => 'required|exists:users,id',  // user_id phải tồn tại trong bảng users
            'amount' => 'required|numeric|min:0',  // Số tiền phải là số và >= 0
            'color' => 'required|string|max:255',  // Màu xe phải là chuỗi và không quá 255 ký tự
        ];
    
        // Định nghĩa các thông báo lỗi
        $messages = [
            'car_id.required' => 'Car is required',
            'car_id.exists' => 'Selected car does not exist',
            'user_id.required' => 'User is required',
            'user_id.exists' => 'Selected user does not exist',
            'amount.required' => 'Deposit amount is required',
            'amount.numeric' => 'Deposit amount must be a number',
            'amount.min' => 'Deposit amount must be at least 0',
            'color.required' => 'Color is required',
            'color.string' => 'Color must be a string',
            'color.max' => 'Color may not be greater than 255 characters',
        ];
    
        // Tiến hành xác thực
        $request->validate($rules, $messages);
    
        // Tiến hành lưu thông tin deposit
        $deposit = new Deposit();
        $deposit->car_id = $car->id;
        $deposit->user_id = $user->id;
        $deposit->amount = $request->dat_coc;
        $deposit->color = $request->mau_xe;
        $deposit->qr_scanned = true;  // Đánh dấu là đã quét mã QR
        $deposit->save();
    
        // Trả về thông báo thành công
        return redirect()->route('deposit.confirm')->with('success', 'Deposit successfully added!');
    }
    

    //Khai báo mục Xác nhận thanh toán
    public function purchase()
    {
        $categories = Category::all();
        return view('deposit', compact('categories'));
    }
}
