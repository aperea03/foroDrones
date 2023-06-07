@extends('layouts.app')

@section('content')
<header class="hero-image" style="background-image: url({{URL::asset('images/hero.jpg')}});">
    <div class="container">
      <h1 class="hero-text">¡Bienvenido a foroDrones!</h1>
    </div>
</header>
<div class="container-fluid principal">
    <div class="row justify-content-center">
        <div class="col-md-8 main-container mt-2 mb-2 rounded-3 shadow">
            <h2 class="titulo_1 text-center fw-bold mt-4">PRÓXIMOS EVENTOS</h2>
            <h4 class="text-center mb-4">¿Quieres saber cuales son los eventos más cercanos? Infórmate y participa</h4>
            {{-- Carousel --}}
            <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{URL::asset('images/carousel/carousel1.jpg')}}" alt="Imagen 1">
                    <div class="carousel-caption">
                      <h2>Mollerussa Drone Party 2023</h2>
                      <p>20-21-22 Junio</p>
                      <p>Participa en nuestro evento anual en el que se realizarán carreras y competiciones contrareloj  ¿A que esperas?.
                      </p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{URL::asset('images/carousel/carousel2.jpg')}}" alt="Imagen 2">
                    <div class="carousel-caption">
                      <h2>Quedada DDC Valencia</h2>
                      <p>4-5 Agosto</p>
                      <p>Asiste a nuestras carreras en las nuevas instalaciones al aire libre ¡No olvides tu drone! </p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{URL::asset('images/carousel/carousel3.jpg')}}" alt="Imagen 3">
                    <div class="carousel-caption">
                      <h2>Convocatoria nuevos pilotos DRL</h2>
                      <p>12-13 Julio</p>
                      <p>Vente con nosotros y compite para ser el mejor piloto de la Drone Racing Leage.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </a>
              </div>
              {{-- APARTADO EVENTOS RELACIONADOS --}}
              <h2 class="titulo_1 text-center fw-bold mt-4 mb-2">EVENTOS RELACIONADOS</h2>
              <h2 class="text-center"><i class="bi bi-caret-down"></i></h2>

              {{-- EVENTO 1 --}}
              <div class="row event1 shadow">
                <div class="col-lg-8 d-flex flex-column justify-content-center">
                  <h2 class="mb-4">TOMATE AIR MEETING 2022</h2>
                  <h6>El XIV “Tomate Air Meeting” se desarrolló durante tres jornadas, del viernes, 30 de septiembre, 
                    hasta ayer domingo 2 de octubre, aunque bien es cierto que desde el jueves por la tarde ya comenzaron 
                    a llegar muchas autocaravanas. El evento se cerró con un balance muy positivo, según lo informado 
                    por el Club Radio Control Los Palacios, entidad organizadora que ha contado, como es habitual, con la 
                    colaboración de la Delegación de Deportes del Ayuntamiento palaciego.</h6>
                    <p class="mt-3">Más info en <a href="https://www.facebook.com/pages/category/sports/Club-RC-Los-Palacios-Aeromodelismo-114156876631388/">
                      https://www.facebook.com/Club-RC-Los-Palacios-Aeromodelismo-114156876631388/</a></p>
                </div>
                <div class="col-lg-4">
                  <img src="{{URL::asset('images/eventos/event1.jpeg')}}" alt="" class="img-fluid">
                </div>
              </div>

              {{-- EVENTO 2 --}}
              <div class="row event2 shadow">
                <div class="col-lg-4">
                  <img src="{{URL::asset('images/eventos/event2.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-8 d-flex flex-column justify-content-center">
                  <h2>DRONE EXPO MADRID 2023</h2>
                  <h6>DRONExpo es el encuentro referente de los profesionales de los drones y sus aplicaciones, 
                    diseñado a medida de la industria española de drones, integrando todos los subsectores, para 
                    presentar las novedades del sector, encontrar oportunidades de colaboración entre empresas y 
                    con las administraciones, promover proyectos y negocios, y estar a la vanguardia en información 
                    sobre el futuro tecnológico no tripulado.</h6>
                    <p class="mt-3">Más info en <a href="https://www.dronexpo.es/">https://www.dronexpo.es/</a></p>
                </div>
              </div>

              {{-- EVENTO 3 --}}
              <div class="row event3 shadow">
                <div class="col-lg-8">
                  <h2>AGUACATE MODEL AIRSHOW</h2>
                  <h6>¡Vuelve a arrancar motores el Aguacate Model Airshow!
                    <br>
                    Tras el éxito de la primera edición, el Aguacate Model Airshow 2023 se prepara para volver a llenar los cielos de Vélez Málaga pero no solo de aeromodelos.
                    <br>
                    Y es que, tendemos a pensar en réplicas de pequeño tamaño, pero en este festival podremos ver maquetas de más de tres metros volando a 300 km/h.
                    <br>
                    Sin duda, es un evento espectacular que no te puedes perder. ¿Quieres saber los detalles? ¡Te lo contamos todo!</h6>
                    <p class="mt-3">Más info en <a href="https://www.oneair.es/aguacate-model-air-show/">https://www.oneair.es/aguacate-model-air-show/</a></p>
                </div>
                <div class="col-lg-4">
                  <img src="{{URL::asset('images/eventos/event3.jpg')}}" alt="" class="img-fluid">
                </div>
              </div>

              {{-- SECTION FINAL DEL INICIO --}}
              <h2 class="titulo_1 text-center fw-bold mt-4 mb-2">ÚNETE A NUESTRO FORO</h2>
              <h4 class="text-center mb-4">¿Necesitas más información sobre eventos o dudas generales sobre tus drones?
                <br>
                Inicia sesión y podrás participar en nuestro fantástico foro sobre dudas que
                tengas de este "mundillo".
              </h4>
              <div class="row foroinfo border border-5 rounded m-3 p-3">
                <div class="col-6 foroinfo_img d-flex justify-content-center">
                  <img src="{{URL::asset('images/logo.png')}}" alt="ForoDrones" class="img-fluid">
                </div>
                <div class="col-6 foroinfo_btn d-flex justify-content-center align-items-center">
                    <a class="btn shadow" href="{{ route('register') }}"><h4>ÚNETE AHORA</h4></a>
                </div>
              </div>
              <h4 class="text-center mb-4">Más información</h4>
              <h2 class="text-center"><i class="bi bi-caret-down"></i></h2>
        </div>    
    </div>
</div>



{{-- Arranca el toast al llegar un mensaje del controlador --}}
@if ($message = Session::get('success'))
            
<script>
    window.addEventListener('load', function() {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'));
        var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl);
        });
        toastList.forEach((toast) => toast.show());
    });
</script>
{{-- TOAST --}}
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="{{URL::asset('images/loading.gif')}}" class="rounded me-2" alt="...">
        <strong class="me-auto">ForoDrones</strong>
        <small>hace 0 minutos</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        {{ $message }}
    </div>
    </div>
</div>
@else
    
@endif 
@endsection