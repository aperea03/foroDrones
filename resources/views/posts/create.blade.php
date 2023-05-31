@extends('layouts.app')

@section('content')
<header class="hero-image" style="background-image: url({{URL::asset('images/hero3.jpg')}});">
    <div class="container">
      <h1 class="hero-text">Publica tu post aquí</h1>
    </div>
</header>
<div class="container-fluid principal">
    <div class="row justify-content-center">
        <div class="col-md-8 main-container mt-2 mb-2 rounded-3 shadow">
            <form action="{{ route('posts.store') }}" method="POST" id="contact">
                @csrf
                <h3>Nuevo Post</h3>
                <h4>Rellena el siguiente formulario y publica tu post</h4>
                <fieldset>
                    <input placeholder="Título del post" type="text" name="title" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <textarea placeholder="Escribe tu post aquí...." tabindex="5" name="content" required></textarea>
                </fieldset>
                <h3>Categoria</h3>
                <fieldset class="mb-4">
                    <select name="categoria" tabindex="6" class="custom-select">
                        <option value="opcion1">Opción 1</option>
                        <option value="opcion2">Opción 2</option>
                        <option value="opcion3">Opción 3</option>
                        <!-- Agrega más opciones según tus necesidades -->
                    </select>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" tabindex="7">PUBLICAR <i class="bi bi-cloud-plus"></i></button>
                </fieldset>
                  <p><i class="bi bi-exclamation-triangle-fill"></i> Cualquier post indebidamente publicado será eliminado por moderadores.
                    Cualquier duda, contacta con nosotros
                    </p>
            </form>
        </div>
    </div>
</div>

@endsection