<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anthony Trillo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Asap|Fjalla+One&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <div>
            {{-- <a href="#">
                <img src="#" height="50" alt=""/>
            </a> --}}
            <nav>
                <ul class="menu">
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('about') }}">Acerca de</a></li>
                    <li><a href="{{ route('project') }}">Proyectos</a></li>
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contactos</a></li>
                </ul>
            </nav>
        </div>

    </header>

    <div id="app">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-description">
                Anthony Trillo 2020
            </div>
            <div class="social">
                <a href="https://www.linkedin.com/in/anthonytr/" class="social-link linkedin"></a>
                <a href="https://github.com/anthonytr" class="social-link github"></a>
                <a href="https://twitter.com/anthony_tx21" class="social-link twitter"></a>
                <a href="https://www.instagram.com/anthonytrillo_/?hl=es-la" class="social-link instagram"></a>
            </div>
        </div>
    </footer>

</body>
</html>
