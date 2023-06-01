@extends('layouts.app')

@section('content')
<header class="hero-image" style="background-image: url({{URL::asset('images/hero3.jpg')}});">
    <div class="container">
      <h1 class="hero-text">Edita tu post aquí</h1>
    </div>
</header>
<div class="container-fluid principal">
    <div class="row justify-content-center">
        <div class="col-md-8 main-container mt-2 mb-2 rounded-3 shadow">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" id="contact">
                @csrf
                @method('PUT')
                <h3>Editar post</h3>
                <fieldset>
                    <input value="{{ $post->title }}" placeholder="Título del post" type="text" name="title" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <textarea placeholder="Escribe tu post aquí...." tabindex="5" name="content" required>{{ $post->content }}</textarea>
                </fieldset>
                <h3>Categoria</h3>
                <fieldset class="mb-4">
                    <select name="categoria" tabindex="6" class="custom-select" required>
                        <option value="Dudas/Problemas" {{ $post->category === 'Dudas/Problemas' ? 'selected' : '' }}>Dudas o Problemas</option>
                        <option value="Eventos" {{ $post->category === 'Eventos' ? 'selected' : '' }}>Eventos</option>
                        <option value="Debates" {{ $post->category === 'Debates' ? 'selected' : '' }}>Debates</option>
                        <option value="Montajes" {{ $post->category === 'Montajes' ? 'selected' : '' }}>Montajes</option>
                        <option value="Ventas" {{ $post->category === 'Ventas' ? 'selected' : '' }}>Ventas</option>
                        <option value="Busqueda" {{ $post->category === 'Busqueda' ? 'selected' : '' }}>Búsqueda</option>
                        <option value="Otro" {{ $post->category === 'Otro' ? 'selected' : '' }}>Otro</option>
                    </select>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" tabindex="7">
                        GUARDAR <i class="bi bi-cloud-plus"></i></button>
                </fieldset>
                  <p><i class="bi bi-exclamation-triangle-fill"></i> Cualquier post indebidamente publicado será eliminado por moderadores.
                    Cualquier duda, contacta con nosotros
                    </p>
            </form>
        </div>
    </div>
</div>
{{-- value="{{ $post->category }}" --}}
@endsection