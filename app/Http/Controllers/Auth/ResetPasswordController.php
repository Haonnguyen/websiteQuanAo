<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ResetPasswordController extends Controller
{
    public function showResetForm($token)
    {
        return view('auth.pass.reset')->with(
            ['token' => $token, 'email' => request('email')]
        );
    }

    public function reset(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:8|confirmed',
        'token' => 'required|string',
    ]);

    // Kiểm tra mật khẩu mới và mật khẩu xác nhận
    if ($request->password !== $request->password_confirmation) {
        return back()->withErrors(['password' => 'Mật khẩu xác nhận không trùng khớp!']);
    }

    // Kiểm tra mật khẩu có đủ mạnh không
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $request->password)) {
        return back()->withErrors(['password' => 'Mật khẩu bạn quá yếu, hãy thêm kí tự và đặt lại.']);
    }

    // Tìm người dùng bằng địa chỉ email
    $user = User::where('email', $request->email)->first();

    // Nếu không tìm thấy người dùng, trả về lỗi
    if (!$user) {
        return back()->withErrors(['email' => 'Email not found']);
    }

    // Hash mật khẩu mới
    $hashedPassword = Hash::make($request->password);

    // Cập nhật mật khẩu mới cho người dùng
    $user->password = $hashedPassword;
    $user->save();

    return redirect()->route('loginForm')->with('status', '');
}

}
