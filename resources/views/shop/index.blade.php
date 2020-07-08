@extends('template.user')
@section('tittle','Halaman Produk')
@section('style')
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="category">
                        <h2 class="category-label">Kategori</h2>
                        <ul class="list-gorup">
                            <li class="list-group-item">
                                <a href="">All</a>
                            </li>
                            <li class="list-group-item">
                                <a href=""></a>
                            </li>
                        </ul>
                    </div>
                    <h2 class="text-center mt-5" id="category-label">Cari Produk</h2>
                    <form action="/shop" class="form-inline ml-5" method="GET">
                        <input type="text" placeholder="Masukan Nama Produk" class="form-control" name="search">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </form>
                </div>
                <div class="col-lg-8">
                    <div class="item-list">
                        <h1>Produk Kami</h1>
                        <hr style="margin-bottom: 2em;">
                        <div class="row list-product">
                            <div class="col-lg-4 item-mb-5">
                                <a href="http://">
                                    <img src="{{asset('produk.jpg')}}" alt="" height="150" width="150">
                                </a>
                                <p class="product-name mt-3 font-weight-bold">
                                    <a href="http://"></a>
                                </p>
                                <p class="product-price">Rp.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    
@endsection