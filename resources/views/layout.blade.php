<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anthony Trillo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <ul class="menu">
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('about') }}">Acerca de</a></li>
            <li><a href="{{ route('project') }}">Proyectos</a></li>
            <li><a href="{{ route('blog.index') }}">Blog</a></li>
            <li><a href="{{ route('contact') }}">Contactos</a></li>
        </ul>
    </nav>

    <div id="app">
        @yield('content')
    </div>

</body>
</html>
