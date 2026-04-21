<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<div class="login-container">
    <h1>Đăng nhập</h1>

    @if($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif

    <form method="post" action="{{ route('login') }}">
        @csrf
        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>Mật khẩu:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Đăng nhập</button>
    </form>

    <p>Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký</a></p>
</div>
</body>
</html>