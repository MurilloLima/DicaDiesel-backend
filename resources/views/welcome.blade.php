<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POP - Assistente Técnico</title>
    <link rel="icon" href="{{ asset('assets/logos/icon.png') }}" type="image/png" sizes="57x57">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body,
        html {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-group h2 {

            font-size: 56px;
            color: white;

        }

        .bg {
            background-image: url('assets/admin/img/bg-001.jpeg');
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .form-group a {
            text-decoration: none;
            background-color: #6F6FF7;
            color: white;
            border-radius: 30px;
            border: 1px #707070;
            padding: 10px 50px;
        }
       

        .title {
            padding: 20px 0px;
            color: white;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <section class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="form-group" style="flex-direction: column;">
                        <img src="{{ asset('assets/logos/logo.svg') }}" width="240" alt="">
                        <p class="title">Bem vindo!</p>
                        <a href="{{ route('login') }}" style="border: 1px solid #FFF;">Login</a>
                        <a href="{{ route('register') }}" style="border: 1px solid #FFF;">Registrar-se</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>