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
    @yield('css')
</head>

<body id="page-top">

    @if (session('status'))
        <div class="text-center bg-success text-primary">
            {{ session('status') }}
        </div>
    @endif

    <div id="wrapper">

        <!--navegacion-->
        @include('partials.navigation')

        <div class="d-flex flex-column" id="content-wrapper">

            <div id="content">

                <!--nav content-->
                @include('partials.nav-content')

                <!--contenido-->
                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>

            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © JARO 2023</span></div>
                </div>
            </footer>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bs-init.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    @yield('javascript')
</body>

</html>
