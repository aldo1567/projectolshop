<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="{{ asset('bower_components/bootstrap-4.5.0-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Toko Kita</title>
</head>

<body>
    @guest
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand text-primary" href="#">Toko Kita</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link underline" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline" href="#">Our Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline" href="/login">Sign In</a>
                    </li>
                </ul>
            </div>
        </nav>
    @else
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">Toko Kita</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link underline" href="/cart"><i class="fa fa-shopping-cart"
                                aria-hidden="true"></i> Cart</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link underline" href="/home">Homes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/logout">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a href="http://" class="dropdown-item"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form action="/logout" id="logout-form" method="POST">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    @endguest'
    <div class="content" style="background-image: url('toko.jpg');margin-top:-40px;">
        <h1 class="tittle bg-secondary">Toko Kita</h1>
        <h3 class="tittle bg-secondary">Solusi Kebutuhan Anda</h3>
    </div>
    <div class="container">
        <div class="products">
            <div class="row list-product">
                @foreach ($product as $item)
                <div class="col-lg-4 col-md-6">
                    <a href="http://">
                        <img src="{{asset('produk.jpg')}}" alt="gambar" style="height:150px;widht:150px;">
                    </a>
                    <p class="product_name"><a href="http://">{{$item->product_name}}</a></p>
                    <p class="product_price">Rp. {{number_format($item->price,2,',','.')}}</p>
                </div>
                @endforeach
            </div>
        </div>
        <a href="http://">View More Product</a>
    </div>

    <footer class="footer-distributed">
        <div class="footer-right">
            <a href="http://"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="http://"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="http://"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="http://"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="footer-left">
            <p class="footer-links">
                <a href="http://" class="nav-link underline">Home</a>
                <a href="http://" class="nav-link underline">Shop</a>
                <a href="http://" class="nav-link underline">About</a>
                <a href="http://" class="nav-link underline">FAQ</a>
            </p>
            <p>Toko Kita &copy; {{date('Y')}}</p>
        </div>
    </footer>
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('bower_components\bootstrap-4.5.0-dist\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

</body>

</html>
