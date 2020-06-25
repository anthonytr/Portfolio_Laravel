@extends('layout')

@section('content')

            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/photography-of-person-typing-1181675.jpg" class="img-fluid d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/woman-sitting-on-the-floor-using-a-laptop-4050299.jpg" class="img-fluid d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/business-code-coding-computer-270360.jpg" class="img-fluid d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <h1>Acerca de mi</h1>
            <br>
            <h4>Comencé mi experiencia profesional el año 2009 trabajando en los Laboratorios Smasac, ascendí rápidamente debido a mis habilidades de trabajo en equipo y proactividad, con solo 18 años se me ascendió a Jefe de Operaciones, estando a cargo de una de las áreas mas importantes de la empresa.</h4>
            <br>
            <h4>Ese mismo año viaje al sur del Perú para prestar servicio en una organización no gubernamental, cada noche un colega y yo elaborábamos un horario y fijábamos metas numéricas para el día siguiente, capacité y elaboré reuniones para grupos de entre 20 y 24 representantes; ese proceso me enseñó a fijar metas, a trabajar con los demás y a comunicarme eficazmente con personas de diferentes culturas.</h4>
            <br>
            <h4>Terminado mi servicio voluntario viaje a Argentina donde trabaje en Náutica Boat Tech (Concesionario oficial de Yamaha Motors) como administrativo y soporte técnico, también empece a estudiar Ingeniería en computación (En curso) y me capacité en DigitalHouse>Coding School como Desarrollador Fullstack.</h4>
            <br>
            <h4>Actualmente estoy buscando nuevas oportunidades; gracias a mi experiencia y conocimientos puedo proponer, analizar y diseñar soluciones, dar soporte técnico funcional, participar en el armado de estándares de desarrollo y detectar oportunidades de mejora continua e investigar nuevas tecnologías.
            </h4>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $('.carousel').carousel({
        interval: 3000
    });
</script>

@endsection
