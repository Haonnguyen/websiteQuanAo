@extends('layout')
@section('title','Giới thiệu')
@section('content')

<!-- resources/views/auth/passwords/reset.blade.php -->
<style>
    .form-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-container input[type="email"],
    .form-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .form-container button[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    .form-container button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<div class="form-container">
 
  
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="email" name="email" value="{{ $email }}" placeholder="Email" required>
        <input type="password" name="password" placeholder="Mật khẩu mới" required>
        <input type="password" name="password_confirmation" placeholder="Xác nhận lại mật khẩu" required>
        <button type="submit">Đặt lại mật khẩu</button>
    </form>

    @if ($errors->has('password_confirmation'))
        <div class="alert alert-danger mt-3">
            {{ $errors->first('password_confirmation') }}
        </div>
    @elseif ($errors->has('password'))
        <div class="alert alert-danger mt-3">
            {{ $errors->first('password') }}
        </div>
    @elseif ($errors->has('email'))
        <div class="alert alert-danger mt-3">
            {{ $errors->first('email') }}
        </div>
    @endif
</div>





    

@endsection