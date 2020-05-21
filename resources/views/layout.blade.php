<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anthony Trillo</title>
</head>
<body>
  <ul>
    <li><a href="{{ route('home') }}">Inicio</a></li>
    <li><a href="{{ route('about') }}">Acerca de</a></li>
    <li><a href="{{ route('project') }}">Proyectos</a></li>
    <li><a href="{{ route('blog.index') }}">Blog</a></li>
    <li><a href="{{ route('contact') }}">Contactos</a></li>
  </ul>

  <div>
    @yield('content')
  </div>

</body>
</html>