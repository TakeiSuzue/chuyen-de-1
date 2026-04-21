<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản trị</title>
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

        .admin-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .admin-menu {
            list-style: none;
            padding: 0;
        }

        .admin-menu li {
            margin: 10px 0;
        }

        .admin-menu a {
            display: block;
            padding: 10px;
            background: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .admin-menu a:hover {
            background: #2980b9;
        }

        .back-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            font-size: 14px;
            text-decoration: none;
            background: #e67e22;
            color: #fff !important;
            font-weight: bold;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .back-btn:hover {
            background: #d35400;
        }
    </style>
</head>
<body>

<div class="admin-container">
    <h1>Chào mừng, {{ Auth::user()->username }}!</h1>

    <ul class="admin-menu">
        <li><a href="{{ route('admin.products.index') }}">Quản lý sản phẩm</a></li>
        <li><a href="{{ route('admin.categories.index') }}">Quản lý danh mục</a></li>
        <li><a href="{{ route('admin.orders.index') }}">Quản lý đơn hàng</a></li>
        <li><a href="{{ route('admin.posts.index') }}">Quản lý bài viết</a></li>
    </ul>

    <a href="{{ route('account') }}" class="back-btn">Quay lại</a>
</div>

</body>
</html>