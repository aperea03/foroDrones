@extends('layouts.app')

@section('content')
<header class="hero-image" style="background-image: url({{URL::asset('images/hero2.jpg')}});">
    <div class="container">
      <h1 class="hero-text">¡Bienvenido a nuestro Foro!</h1>
    </div>
</header>
<div class="container-fluid principal">
    <div class="row justify-content-center">
        <div class="col-md-8 main-container mt-2 rounded-3 shadow">
            <h2 class="titulo_1 text-center fw-bold mt-4">ÚLTIMOS POSTS</h2>
            <h4 class="text-center mb-4">Descubre los posts y preguntas más frecuentes</h4>
            <h2 class="text-center"><i class="bi bi-caret-down"></i></h2>
            {{-- Contenedor posts --}}
            <div class="col-12 m-2 rounded border">
                @foreach ($posts as $post)
                <a href="{{ route('posts.show',$post->id) }}"  class="minipost">
                    <div class="shadow m-2 p-1 p-md-2">
                        
                        <h4>
                            <i class="bi bi-sticky"></i>
                            {{ \Illuminate\Support\Str::limit($post->title,50, '...') }}</h4>
                        <p>{{ \Illuminate\Support\Str::limit($post->content, 170, '...') }}</p>
                        <p>Publicado por: <strong>{{ $post->user->name }}</strong></p>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="m-3">
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
            <h2 class="titulo_1 text-center fw-bold mt-4">CATEGORÍAS</h2>
            <h4 class="text-center mb-4">Busca posts sobre el tema que más te interesa ¿A que esperas?</h4>
            <h2 class="text-center"><i class="bi bi-caret-down"></i></h2>
            <form action="{{ route('post.category') }}" method="POST" id="contact">
                @csrf
                <fieldset class="mb-4 text-center">
                    <select name="categoria" tabindex="6" class="custom-select" required>
                        <option value="Dudas/Problemas">Dudas o Problemas</option>
                        <option value="Eventos">Eventos</option>
                        <option value="Debates">Debates</option>
                        <option value="Montajes">Montajes</option>
                        <option value="Ventas">Ventas</option>
                        <option value="Busqueda">Busqueda</option>
                        <option value="Otro">Otro</option>
                    </select>
                </fieldset>
                <fieldset class="text-center">
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" tabindex="7" style="width: 50%;">
                        <i class="bi bi-search"></i> BUSCAR
                    </button>
                </fieldset>
            </form>
            <h2 class="titulo_1 text-center fw-bold mt-4">NUEVO POST</h2>
            <h4 class="text-center mb-4">Publica tu post ¡Adelante!</h4>
            <h2 class="text-center"><i class="bi bi-caret-down"></i></h2>
            <div class="text-center mb-5">
                @guest
                <a class="btn shadow text-center" href="{{ route('login') }}"><h5>NUEVO POST <i class="bi bi-plus-square-dotted"></i></h5></a>
                @else
                <a class="btn shadow text-center" href="{{ route('posts.create') }}"><h5>NUEVO POST <i class="bi bi-plus-square-dotted"></i></h5></a>
                @endguest
                
            </div>
        </div>
    </div>
</div>

    
@endsection