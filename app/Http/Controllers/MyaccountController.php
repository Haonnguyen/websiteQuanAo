<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MyaccountController extends Controller
{
    public function myAccount(){
        $user = Auth::user();
        return view('myaccount', ['user' => $user]);
    }

    public function updateProfile(Request $request){
        $user = Auth::user();
        $data = $request->only('username', 'email');
        
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->input('password'));
        }

        try {
            // Cập nhật thông tin người dùng, bao gồm cả mật khẩu nếu có
            $user->update($data);
    
            return redirect()->route('myaccount')->with('success', 'Thông tin của bạn đã được cập nhật thành công');
        } catch (\Exception $e) {
            return back()->withErrors(['message' => 'Có lỗi xảy ra trong quá trình cập nhật thông tin người dùng.']);
        }
    }
}

    
    
    


