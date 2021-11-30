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
            background-color: white;
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
            background-color: #151A1B;
            color: white;
            border-radius: 30px;
            border: 1px #707070;
            padding: 10px 50px;
        }


        .title {
            padding: 20px 0px;
            color: white;
        }

        div#loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('{{url('assets/admin/dist/img/4.gif')}}') 50% 50% no-repeat white;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div id="loader"></div>
    <section class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="form-group" style="flex-direction: column;">
                        <img src="{{ asset('assets/logos/logo.jpg') }}" width="240" alt="">
                        <p class="title">Bem vindo!</p>
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Registrar-se</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/admin/plugins/jquery/jQuery-2.1.4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        // Este evendo é acionado após o carregamento da página
    jQuery(window).load(function() {
        //Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
        jQuery("#loader").fadeOut("slow");
    });
    </script>
</body>

</html>