<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet"
        href="{{ asset('bower_components/bootstrap-4.5.0-dist/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet"
        href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Form Register</title>
</head>

<body>
    <div class="container" style="background-image:url('toko.jpg')">
        <div class="login-wrapper">
            <h1 class="title">Silahkan Register</h1>
            <hr>
            <form action="{{ route('register') }}" method="POST" class="login-form">
                @csrf
                <input type="text" name="name" id="name" class="input" placeholder="Masukan Nama"
                    value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <input type="email" name="email" id="email" class="input" placeholder="Masukan Email"
                    value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <input type="password" name="password" class="input" placeholder="Masukan Password"
                    value="{{ old('password') }}" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <input type="password" name="password_confirmation" id="password-confirm" class="input" placeholder="Konfirmasi Password">
                <textarea name="address" id="address" rows="3" placeholder="Masukan Alamat">
                    {{old('address')}}
                </textarea>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <input type="number" name="phone" id="phone" class="input" placeholder="Masukan No. Hp"
                    value="{{ old('phone') }}">
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <button type="submit">Daftar</button>
                <p class="message">Anda Sudah Punya Akun? <a href="/login">Masuk</a></p>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('bower_components\bootstrap-4.5.0-dist\js\bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
