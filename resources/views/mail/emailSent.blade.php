@extends('layouts.template')
@section('content')
<html>
<head>
    <title>Mensaje enviado</title>
    <META HTTP-EQUIV="REFRESH" CONTENT=6;/>
</head>
<style>
    .msg-mail {
        display: flex;
        align-items: center;
        position: fixed;
        width: 100vw;
        height: 100vh;
        top: 0;
        background: #BD2225;
        z-index: 10000000;
    }
</style>
<body>
    <div class="text-center msg-mail ">
        <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12 text-white">
            <img src="./img/e2castillo/logos/white-logo-e2castillo.svg" style="height: 150px; width: auto" alt="">
            <h1 class="title-page text-white">Gracias por ponerse en contacto con nosotros!</h1>
            <p class="text-white">En breve sera redirigido a la pagina de inicio para que pueda seguir
                disfrutando de la web E2Castillo furniture</p>

            <p></p>
        </div>
    </div>
</body>

</html>
@endsection