<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anthony Trillo</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <ul class="menu">
    <li><a href="{{ route('home') }}">Inicio</a></li>
    <li><a href="{{ route('about') }}">Acerca de</a></li>
    <li><a href="{{ route('project') }}">Proyectos</a></li>
    <li><a href="{{ route('blog.index') }}">Blog</a></li>
    <li><a href="{{ route('contact') }}">Contactos</a></li>
  </ul>

  <div id="app">
    @yield('content')
  </div>

</body>
</html>