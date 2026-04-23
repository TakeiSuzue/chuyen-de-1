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
            transition: background 0.3s, transform 0.3s;
            margin: 5px;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-2px);
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



        .header-link {
            color: inherit;
            text-decoration: none;
            display: inline-block;
        }

        .header-link:hover {
            text-decoration: underline;
            cursor: pointer;
        }

        .welcome-text {
            font-size: 18px;
            font-weight: 700;
            margin: 0 0 20px;
            color: #2c3e50;
        }

        .role-label {
            color: #333;
            font-weight: 600;
        }

        .role-value {
            color: #555;
        }

        .role-value.admin {
            color: #c0392b;
        }
    </style>
</head>
<body>

<div class="account-container">
    <a href="{{ route('home') }}" class="header-link"><h1>Thông tin tài khoản</h1></a>
    <p class="welcome-text">Chào mừng bạn đã đến với trang tài khoản!</p>
    <p class="account-info"><strong>Xin chào,</strong> {{ $user->username }}!</p>
    <p class="account-info"><strong>Email:</strong> {{ $user->email }}</p>
    <p class="account-info">
        <span class="role-label">Vai trò:</span>
        <span class="role-value @if($user->role === 'admin') admin @endif">
            @if($user->role === 'admin')
                Quản trị viên
            @else
                Người dùng
            @endif
        </span>
    </p>

    <div class="btn-group">
        <a href="{{ route('home') }}" class="btn back-home">Quay lại trang chủ</a>
        @if($user->role == 'admin')
            <a href="{{ route('admin.index') }}" class="btn admin-panel">Admin</a>
        @endif
    </div>
</div>

</body>
</html>