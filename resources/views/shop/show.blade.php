@extends('template.user')
@section('title','Halaman Detail Produk')
@section('style')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection
@section('content')
<div class="container">
    <h2 class="title">Nama Produk</h2>
    <hr>
    <div class="row">
        <div class="wrapper">
            <div class="col-lg-4">
                <img src="{{ asset('produk.jpg') }}" alt="gambar" height="200" width="200">
            </div>
        </div>
        <div class="col-lg-4 desc">
            <h4 id="description">Deskripsi</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo, nihil amet
                voluptatum magni eveniet sit deleniti eum laboriosam commodi est saepe nisi deserunt enim placeat ipsa
                tempora totam, dolore aspernatur. Provident excepturi, consectetur molestias perferendis incidunt
                laboriosam quibusdam eveniet pariatur accusantium. Delectus temporibus assumenda quasi fugiat veritatis
                harum eligendi minus!</p>
        </div>
        <div class="col-lg-4">
            <div class="kartu">
                <p>Harga</p>
                <h2>Rp. </h2>
                <form action="/cart/store" method="POST">
                    @csrf
                    <input type="hidden" value="" name="product_id">
                    <input type="submit" class="btn btn-primary" value="Masukan Ke Cart">
                </form>
            </div>
        </div>
    </div>
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
@endsection
