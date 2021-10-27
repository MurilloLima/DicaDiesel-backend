<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('assets/logos/icon.png') }}" type="image/png" sizes="57x57">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        .login-page {
            background-image: url('assets/admin/img/oficina.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .input-group input {
            border-radius: 20px;
        }

        .btn-orange {
            background-color: #6F6FF7;
            width: 278px;
            color: white;
            border-radius: 30px;
        }

        .blackiconcolor {
            color: #6F6FF7;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <!-- /.login-logo -->
        <div class="card">
            <div style="border-radius: 50em !important" class="card-body login-card-body">
                <div class="login-logo" style="margin: 50px 0px 40px 0px">
                    <a href="">
                        <img src="{{ asset('assets/logos/logo.png') }}" width="150" alt="">
                    </a>
                </div>

                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required placeholder="Nome Completo">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user blackiconcolor"></span>
                            </div>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required placeholder="Login">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope blackiconcolor"></span>
                            </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock blackiconcolor"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" required placeholder="Repetir password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock blackiconcolor"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin: 40px 0px 40px 0px;">
                        <!-- /.col -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-orange">Registrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                {{-- @if (Route::has('password.request'))
                <p class="mb-1">
                    <a href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a>
                </p>
                @endif --}}
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/admin/dist/js/adminlte.min.js') }}"></script>

</body>

</html>