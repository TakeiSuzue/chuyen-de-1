<!DOCTYPE html>
<html>
<head>
    <title>Cửa hàng điện thoại</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

<header>
    <h1>Cửa hàng điện thoại</h1>
    <div class="search-box">
        <form class="search-box" method="GET" action="{{ route('search') }}">
            <input type="text" name="q" placeholder="Tìm kiếm">
            <button type="submit">Tìm</button>
        </form>
    </div>
    <nav>
        <ul>
            <li>
                @auth
                    <a href="{{ route('account') }}">Tài khoản</a>
                @else
                    <a href="{{ route('login') }}">Đăng nhập</a>
                @endauth
            </li>
            <li><a href="{{ route('news.index') }}">Tin tức</a></li>
            <li><a href="{{ route('cart.index') }}">Giỏ hàng</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <aside class="sidebar">
        <h2>Danh mục sản phẩm:</h2>
        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </aside>

    <main class="main-content">
        <h2>Danh sách sản phẩm:</h2>
        <ul class="product-list">
            @if($products->isEmpty())
                <li>Không có sản phẩm nào.</li>
            @else
                @foreach($products as $product)
                    <li>
                        <a href="{{ route('product.show', $product->id) }}">
                            <img style="max-width: 100%; height: auto;" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                            {{ $product->name }} - {{ $product->price }}
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
    </main>
</div>

<footer>
    <div class="footer-container">
        <div class="footer-column">
            <h3>Thông tin</h3>
            <p>Cửa hàng điện tử chuyên cung cấp các sản phẩm chất lượng.</p>
            <p>Địa chỉ: Trường Đại Học Công Nghệ Đông Á</p>
            <p>Hotline: 0385901312</p>
            <p>Email: support@cuahangdientu.com</p>
        </div>

        <div class="footer-column">
            <h3>Chính sách</h3>
            <ul>
                <li><a href="#">Chính sách bảo mật</a></li>
                <li><a href="#">Chính sách đổi trả</a></li>
                <li><a href="#">Điều khoản sử dụng</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>Kết nối với chúng tôi</h3>
            <ul class="social-links">
                <li><a href="#"><img src="{{ asset('images/FB.png') }}" alt="Facebook"></a></li>
                <li><a href="#"><img src="{{ asset('images/twitter.png') }}" alt="Twitter"></a></li>
                <li><a href="#"><img src="{{ asset('images/ig.png') }}" alt="Instagram"></a></li>
            </ul>
        </div>
    </div>
    <p class="footer-bottom">&copy; 2025 Cửa hàng điện thoại. All rights reserved.</p>
</footer>

</body>
</html>