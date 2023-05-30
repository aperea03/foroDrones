<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Links --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ForoDrones | Inicio</title>
    <link rel="icon" type="image/x-icon" href="{{URL::asset('images/loading.gif')}}" />
    {{-- Scripts --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- Animación pre carga de pagina --}}
    <div class="contenedor_loader">
        <div class="loader">
            <img src="{{URL::asset('images/loading.gif')}}" alt="" class="img-fluid">
        </div>
    </div>
    {{-- BARRA INFORMACIÓN BÁSICA --}}
    <div class="info_bar d-flex justify-content-left w-100">
        <div class="info1">
            <i class="bi bi-info-square"></i>
            +info 
        </div>
        <div class="info2">
            <i class="bi bi-telephone-fill"></i>&nbsp;&nbsp;
            +34 655 93 44 32&nbsp;&nbsp;
            <i class="bi bi-whatsapp"></i>
        </div>
        <div class="info3">
        Registrate y únete a la comunidad
        </div>
    </div>
    <!-- LOGO PRINCIPAL -->
    <div class="d-flex logo">
        <a href="{{ url('/') }}">
          <!-- <-----REDIRECCION -->
          <img src="{{URL::asset('images/logo.png')}}" alt="ForoDrones" class="img-fluid" />
        </a>
        <div class="logo_info">
            El mejor foro sobre drones en español, lo tienes aquí
            <img src="{{URL::asset('images/bandera.png')}}" alt="ForoDrones" class="img-fluid">
        </div>
    </div>

    {{-- Barra de navegacións --}}
    <nav class="navbar navbar-expand-md navbar-custom sticky-top shadow">
        <div class="container">
          <a class="navbar-brand" href="{{ URL('/') }}">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="{{ route('posts.index') }}">Foro</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="#">Sobre nosotros</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                  <a class="nav-link" href="#">+ POST</a>
                </li>
              </ul>
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @else    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong><i class="bi bi-person-circle"></i>&nbsp;&nbsp;{{ Auth::user()->name }}</strong>
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </li>
                @endguest
            </ul>
          </div>
        </div>
    </nav>    

    @yield('content')

<div class="text-white footer-lg">
    <p class="text-center p-2 m-0">
      &copy; 2023 ForoDrones. Todos los derechos reservados.
    </p>
  </div>
<!-- Aviso de cookies -->
<div id="cookie-notice" class="cookie-notice">
    <p>Utilizamos cookies para mejorar tu experiencia en este sitio web. Al continuar navegando, aceptas el uso de cookies.</p>
    <button id="accept-cookies-btn" class="accept-cookies-btn">Aceptar</button>
</div>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>