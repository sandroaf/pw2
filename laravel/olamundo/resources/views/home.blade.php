<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Olá mundo - Home</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>
<body>
    <div>
        <h1>Olá Mundo</h1>
        <br>
        <p>Exemplo aplicação Laravel BSN - T27</p>
        <br>
        <a href="{{ url('/contato') }}">Contato</a>
    </div>
</body>
</html>
