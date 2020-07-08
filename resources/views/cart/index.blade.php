@extends('template.user')
@section('title','Halaman Cart')
@section('style')
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
@endsection
@section('content')
    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-succes">
                {{Session::get('success')}}
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
        @endif
        <p style="text-align: center;">Cart Masi Kosong</p>
        <h3>Barang Di Cart Anda</h3>
        <div class="cart">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{asset('produk.jpg')}}" alt="gambar" width="150" height="150">
                </div>
                <div class="col-lg-9">
                    <div class="top">
                        <p class="item-name">Wakwau</p>
                        <div class="top-right">
                            <p>Rp. </p>
                            <select name="qty" id="qty" data-item="">
                                <option value="">Test</option>
                            </select>
                            <p class="total-item">Rp. </p>
                        </div>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="bottom">
                        <div class="row">
                            <p class="col-lg-6 item-desc">Test</p>
                            <div class="offset-lg-4">

                            </div>
                            <div class="col-lg-2">
                                <form action="" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="total">
            <h4 class="total-price">Total Harga : Rp. </h4>
        </div>
    </div>
    <form action="/checkout" method="POST" style="margin-left: 34%">
        @csrf
        <button class="btn btn-primary">Checkout</button>
    </form>
@endsection