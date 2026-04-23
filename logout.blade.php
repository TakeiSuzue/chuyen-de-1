<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng xuất</title>
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
        .logout-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background: #e74c3c;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .logout-btn:hover {
            background: #c0392b;
        }
        .cancel-link {
            display: inline-block;
            margin-top: 15px;
            color: #3498db;
            text-decoration: none;
        }
        .cancel-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="logout-container">
    <h1>Đăng xuất</h1>
    <p>Bạn có chắc muốn đăng xuất không?</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-btn">Xác nhận đăng xuất</button>
    </form>
    <a href="{{ route('home') }}" class="cancel-link">Hủy, quay lại trang chủ</a>
</div>
</body>
</html>
