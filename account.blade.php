<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin tài khoản</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .account-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            position: relative;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin: 10px 0;
        }

        .btn-group {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 8px 15px;
            font-size: 14px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
            margin: 5px;
        }

        .back-home {
            background: #3498db;
            color: #fff;
        }

        .back-home:hover {
            background: #2980b9;
        }

        .admin-panel {
            background: #f39c12;
            color: #fff;
        }

        .admin-panel:hover {
            background: #e67e22;
        }

        .logout-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 12px;
            background: #e74c3c;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .logout-btn:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>

<div class="account-container">
    <a href="{{ route('logout') }}" class="logout-btn">Đăng xuất</a>

    <h1>Thông tin tài khoản</h1>
    <p><strong>Xin chào, {{ $user->username }}!</strong></p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Vai trò:</strong> {{ $user->role == 'admin' ? '<span style="color: red;">Quản trị viên</span>' : 'Người dùng' }}</p>

    <div class="btn-group">
        <a href="{{ route('home') }}" class="btn back-home">Quay lại trang chủ</a>
        @if($user->role == 'admin')
            <a href="{{ route('admin.index') }}" class="btn admin-panel">Admin</a>
        @endif
    </div>
</div>

</body>
</html>