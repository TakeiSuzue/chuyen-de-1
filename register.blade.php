<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<div class="register-container">
    <h1>Đăng ký</h1>

    @if($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="post" action="{{ route('register') }}">
        @csrf
        <label>Tên đăng nhập:</label><br>
        <input type="text" name="username" value="{{ old('username') }}" required><br><br>

        <label></label>form>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required><br><br>

        <label>Mật khẩu:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Xác nhận mật khẩu:</label><br>
        <input type="password" name="password_confirmation" required><br><br>

        <button type="submit">Đăng ký</button>
    </form>
    <p>Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a></p>
</div>
</body>
</html>