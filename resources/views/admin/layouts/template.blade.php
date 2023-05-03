<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>LARAVEL 10</title>
</head>

<body>
    @yield('head')
    <div class="content ml-8">
        @yield('content')
    </div>
    <div class="footer">
        Footer
    </div>
</body>

</html>
