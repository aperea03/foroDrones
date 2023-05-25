@extends('layouts.app')

@section('content')
<header class="hero-image" style="background-image: url({{URL::asset('images/hero.jpg')}});">
    <div class="container">
      <h1 class="hero-text">¡Bienvenido a foroDrones!</h1>
    </div>
</header>
<div class="container-fluid principal">
    <div class="row justify-content-center">
        <div class="col-md-8 main-container mt-2 rounded-3">
            <h1 class="titulo_1 text-center fw-bold mt-2">PRÓXIMOS EVENTOS</h1>
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
              <h1 class="titulo_1 text-center fw-bold mt-2 mb-2">EVENTOS RELACIONADOS</h1>

              <div class="row event1">
                <div class="col-lg-8">
                  <h3>TOMATE AIR MEETING 2023</h3>
                  <h5></h5>
                </div>
                <div class="col-lg-4">
                  <img src="{{URL::asset('images/eventos/event1.jpeg')}}" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row event2">
                <div class="col-lg-4">
                  <img src="{{URL::asset('images/eventos/event2.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-8">
                  <h3>DRONE EXPO MADRID 2023</h3>
                  <h5></h5>
                </div>
              </div>
              <div class="row event3">
                <div class="col-lg-8">
                  <h3>AGUACATE MODEL AIRSHOW</h3>
                  <h5></h5>
                </div>
                <div class="col-lg-4">
                  <img src="{{URL::asset('images/eventos/event3.jpg')}}" alt="" class="img-fluid">
                </div>
              </div>
              <h1 class="titulo_1 text-center fw-bold mt-2 mb-2">ÚNETE A NUESTRO FORO</h1>
        </div>    
    </div>
</div>



{{-- Arranca el toast al crearse una cuenta --}}
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