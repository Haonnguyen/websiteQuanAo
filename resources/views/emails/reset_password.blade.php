@component('mail::message')
# Đặt Lại Mật Khẩu

Bạn nhận được email này vì chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn.

@component('mail::button', ['url' => route('password.reset', ['token' => $token, 'email' => $email])])
Đặt Lại Mật Khẩu
@endcomponent

Nếu bạn không yêu cầu đặt lại mật khẩu, không cần thực hiện thêm hành động nào.

Cảm ơn,<br>
{{ config('app.name') }}
@endcomponent
