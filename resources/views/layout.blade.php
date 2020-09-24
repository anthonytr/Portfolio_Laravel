<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anthony Trillo</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Asap|Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <nav>
            <ul class="menu">
                <li id="logo"><a href="#">Logo</a></li>
                <li class="item"><a href="{{ route('home') }}">Inicio</a></li>
                <li class="item"><a href="{{ route('about') }}">Acerca de</a></li>
                <li class="item"><a href="{{ route('project') }}">Proyectos</a></li>
                <li class="item"><a href="{{ route('blog.index') }}">Blog</a></li>
                <li class="item"><a href="{{ route('contact') }}">Contacto</a></li>
                <li class="toggle"><span class="bars"></span></li>
            </ul>
        </nav>
    </header>

    <div id="app">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-description">
                © Anthony Trillo
            </div>
            <div class="social">
                <a href="https://www.linkedin.com/in/anthonytr/" class="social-link linkedin"></a>
                <a href="https://github.com/anthonytr" class="social-link github"></a>
                <a href="https://twitter.com/anthony_tx21" class="social-link twitter"></a>
                <a href="https://www.instagram.com/anthonytrillo_/?hl=es-la" class="social-link instagram"></a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
    <script>
        $(function() {

            $(".toggle").on("click", function() {

                if ($(".item").hasClass("active")) {
                    $(".item").removeClass("active");
                } else {
                    $(".item").addClass("active");
                }
            });
        });

        const tl = gsap.timeline({defaults: {ease: 'power1.out'} });

        tl.to(".text", { y: "0%", duration: 1, stagger: 0.25 });
        tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.5 });
        tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
        tl.fromTo("nav", { opacity: 0 }, { opacity:1, duration: 1});
        tl.fromTo(".big-text", { opacity: 0 }, { opacity:1, duration: 1}, "-=1");
    </script>

</body>
</html>
