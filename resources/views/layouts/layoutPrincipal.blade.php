<html>

<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            background-image: url("{{asset('/img/fondodef.png')}}");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center center;
            margin-top: 200px;
        }

    </style>

    <title>@yield('titulo') - MuseART</title>
</head>

<body>

    <div class="container">
        @yield('contenido')
    </div>

</body>

</html>