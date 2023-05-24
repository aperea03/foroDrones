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
                      <h3>Título de la imagen 1</h3>
                      <p>Descripción de la imagen 1</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{URL::asset('images/carousel/carousel2.jpg')}}" alt="Imagen 2">
                    <div class="carousel-caption">
                      <h3>Título de la imagen 2</h3>
                      <p>Descripción de la imagen 2</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{URL::asset('images/carousel/carousel3.jpg')}}" alt="Imagen 3">
                    <div class="carousel-caption">
                      <h3>Título de la imagen 3</h3>
                      <p>Descripción de la imagen 3</p>
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
              <h1 class="titulo_1 text-center fw-bold mt-2">INFORMACIÓN BÁSICA</h1>
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