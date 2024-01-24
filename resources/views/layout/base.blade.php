<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} :: @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="logo">
        <img src="{{ asset('img/brasao_colorido.png') }}" alt="SEMSA" width="5%">
    </div>

    <div class="container">
        @yield('conteudo')
    </div>

    <footer>
        <p>Digital - 2024</p>
    </footer>
</body>
</html>
