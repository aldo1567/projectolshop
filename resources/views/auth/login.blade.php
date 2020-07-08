<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="container" style="background-image: url('toko.jpg')">
        <div class="login-wrapper">
            <h1 class="title">Login</h1>
            <hr>
            <form action="{{ route('login') }}" method="POST" class="login-form">
                @csrf
                <input type="email" placeholder="Masukan Email"
                    {{ $errors->has('email')?'is-invalid':'' }} name="email"
                    value="{{ old('email') }}" required autofocus>
                @if($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <input type="password" placeholder="Masukan Password" name="password" {{$errors->has('password')?'is-invalid':''}} required>
                @if($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                <button type="submit">Login</button>
                <p class="message">Anda Belum Punya Akun?? <a href="/register">Daftar Disini</a></p>
            </form>
        </div>
    </div>

</body>

</html>
