<!DOCTYPE html>
<html>
<head>
    <title>Thanh toán thành công</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

<header>
    <h1>Cửa hàng điện thoại</h1>
    <div class="search-box">
        <input type="text" placeholder="Tìm kiếm">
        <button>Tìm</button>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Trang chủ</a></li>
            <li><a href="{{ route('cart.index') }}">Giỏ hàng</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <main class="main-content">
        <h2>Thanh toán thành công!</h2>
        <p>Cảm ơn quý khách đã mua hàng.</p>
        <p>Mã đơn hàng của quý khách là: <strong>{{ session('order_id', 'N/A') }}</strong></p>
        <p>Tổng số tiền: <strong>{{ number_format(session('total_amount', 0)) }} VNĐ</strong></p>
        <a href="{{ route('home') }}">Quay lại trang chủ</a>
    </main>
</div>

<footer>
    <p>Chính sách bảo mật | Quy định riêng tư | Chăm sóc khách hàng</p>
</footer>

</body>
</html>