<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Club Caramelo | Login</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/plantilla/favicon.ico') }}">
    <!-- Css de la Vista -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="imgBx">
            <img src="{{ asset('img/plantilla/bg_login1.jpg') }}" alt="Img_Login">
        </div>
        <div class="loginBox">
            <img src="{{ asset('img/plantilla/logo_horizontal.png') }}" alt="">
            <h3>Ingrese Credenciales</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="inputBox">
                    <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                    required autofocus placeholder="E-Mail">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="inputBox">
                    <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                    <input id="password" type="password" name="password" required placeholder="Contraseña">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input type="submit" value="Ingresar">
            </form>
        </div>
    </div>
</body>
</html>