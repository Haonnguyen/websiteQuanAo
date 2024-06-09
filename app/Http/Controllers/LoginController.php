<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function loginForm() {
        return view('login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
    
        // Kiểm tra xem người dùng có tồn tại không
        $user = User::where('username', $credentials['username'])->first();
    
        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();
            
            // Kiểm tra vai trò người dùng
            if ($user->role == 1) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('home');
            }
        }
    
        return back()->withErrors([
            'password' => 'Thông tin đăng nhập không chính xác',
        ]);
    }
    
    public function register(Request $request){
        try {
            User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password), // Mã hóa mật khẩu
            ]);
    
            $request->session()->put('success', 'Đăng ký tài khoản thành công');
        } catch(\Throwable $e){
            // Xử lý ngoại lệ nếu cần
            return back()->withErrors([
                'message' => 'Đã có lỗi xảy ra trong quá trình đăng ký',
            ]);
        }
        
        return redirect()->route('loginForm');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}




