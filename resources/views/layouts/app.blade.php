<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Links --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ForoDrones</title>
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
            <a href="https://drive.google.com/file/d/1AqU91B08iVmP-2TSy9YkOA30x3CJ_Ihu/view?usp=sharing">ayuda de uso</a>
        </div>
        <div class="info2">
            <i class="bi bi-telephone-fill"></i>&nbsp;&nbsp;
            +34 664 34 56 33&nbsp;&nbsp;
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
          <a class="navbar-brand" href="{{ URL('/') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Página principal"><i class="bi bi-pin-angle"></i> INICIO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="{{ route('posts.index') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Foro principal"><i class="bi bi-newspaper"></i> FORO</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link" href="{{ route('info') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Obtén más información"><i class="bi bi-info-circle"></i> Sobre nosotros</a>
                </li>
                @guest
                @else
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link btnsmall text-center" href="{{ route('posts.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Crea tu post"><i class="bi bi-plus-square-dotted"> POST</i></a>
                </li>
                @endguest
              </ul>
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}" ><i class="bi bi-box-arrow-in-right"></i> Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}"><i class="bi bi-person-plus"></i> Regístrate</a>
                    </li>
                @else    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong><i class="bi bi-person-fill"></i>&nbsp;&nbsp;{{ Auth::user()->name }}</strong>
                        </a>
                        <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item text-primary" href="{{ route('user.index') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Gestiona tu usuario"><i class="bi bi-gear"></i> Ajustes</a>
                        </li>
                        
                        <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            ><i class="bi bi-box-arrow-left"></i> Cerrar sesión</a>
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
{{-- footer --}}
<footer class="border-top pt-5 mt-5">
    <div class="container-xl">
        <div class="row text-center">
            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="mb-4">Categorías</h3>
                <nav class="d-flex flex-column">
                    <a class="text-decoration-none text-dark">Dudas o Problemas</a>
                    <a class="text-decoration-none text-dark">Eventos</a>
                    <a class="text-decoration-none text-dark">Debates</a>
                    <a class="text-decoration-none text-dark">Ventas</a>
                    <a class="text-decoration-none text-dark">Busqueda</a>
                </nav>
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="mb-4">Información</h3>
                <nav class="d-flex flex-column">
                    <a class="text-decoration-none text-dark">¿Quienes somos?</a>
                    <a class="text-decoration-none text-dark">Ubicanos</a>
                    <a class="text-decoration-none text-dark">forodrones123@gmail.com</a>
                    <a class="text-decoration-none text-dark">664 34 56 33</a>
                    <a class="text-decoration-none text-dark" href="{{ route('info') }}">+info aquí</a>
                </nav>
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="mb-4">Siguenos</h3>
                <nav class="d-flex flex-column">
                    <h3><a class="text-decoration-none text-dark" href="https://es-es.facebook.com/"><i class="bi bi-facebook"></i></a></h3>
                    <h3><a class="text-decoration-none text-dark" href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></h3>
                    <h3><a class="text-decoration-none text-dark" href="https://twitter.com/?lang=es"><i class="bi bi-twitter"></i></a></h3>
                    <h3><a class="text-decoration-none text-dark" href="https://www.twitch.tv/"><i class="bi bi-twitch"></i></a></h3>
                </nav>
            </div>
        </div>
    </div>
</footer>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>