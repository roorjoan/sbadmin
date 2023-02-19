<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SB Admin - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome5-overrides.min.css') }}">
</head>

<body class="bg-gradient-primary">

    @if (session('status'))
        <div class="text-center bg-success text-primary">
            {{ session('status') }}
        </div>
    @endif

    <div class="container">
        @yield('auth_content')
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bs-init.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
</body>

</html>
