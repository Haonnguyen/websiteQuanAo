@extends('layout')
@section('title','Giới thiệu')
@section('content')

<div class="form-container">
    <form method="POST" action="{{ route('password.email') }}">
        <p>Quên mật khẩu? Vui lòng nhập tên đăng nhập hoặc địa chỉ email. Bạn sẽ nhận được một liên kết tạo mật khẩu mới qua email.</p>
        @csrf
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Nhập email bạn đã đăng ký tài khoản .." required>
        <button type="submit">Gửi mail</button>
    </form>




    
    @if(session('status'))
        <div class="alert alert-success mt-3">
            {{ session('status') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger mt-3">
            {{ $errors->first() }}
        </div>
    @endif
</div>

    

@endsection