<!DOCTYPE html>
<html>
<head>
    <title>{{ $category->name }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="category-container">
    <header>
        <h1>Cửa hàng điện tử</h1>
        <div class="search-box">
            <form method="GET" action="{{ route('search') }}">
                <input type="text" name="q" placeholder="Tìm kiếm">
                <button type="submit">Tìm</button>
            </form>
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
            <h2 class="category-title">{{ $category->name }}</h2>

            <ul class="product-list">
                @if($products->isEmpty())
                    <li>Không có sản phẩm nào trong danh mục này.</li>
                @else
                    @foreach($products as $product)
                        <li>
                            <a href="{{ route('product.show', $product->id) }}">
                                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="100">
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
</div>
</body>
</html>