<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Meu Site</title>
    
</head>
<body>
    
    @include('partials.navbar')

    <div class="container mt-5">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>
