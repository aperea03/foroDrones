@extends('layouts.app')

@section('content')
<div class="container-fluid principal" style="background-image: url({{URL::asset('images/hero3.jpg')}});">
    <div class="row justify-content-center">
        <div class="col-md-8 main-container mt-2 mb-2 rounded-3 shadow">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="titulo_1 text-center fw-bold mt-4">TU CUENTA</h2>
                    <h2 class="text-center"><i class="bi bi-caret-down"></i></h2>
                    {{-- Información básica del usuario --}}
                    <div class="user_info">
                        <div class="card-client">
                            <div class="user-picture">
                                <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>
                                </svg>
                            </div>
                            <p class="name-client"> Nombre:
                                <span>{{ Auth::user()->name }}
                                </span>
                            </p>
                            <p class="name-client"> Email: 
                                <span>{{ Auth::user()->email }}
                                </span>
                            </p>
                            <p class="name-client">Fecha creado:
                                <span>{{ Auth::user()->created_at }}
                                </span>
                            </p>
                        </div>
                    </div>
                    {{-- BOTON MODAL DELETE --}}
                    <div class="del_account text-center m-5">
                        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">Eliminar cuenta</button>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 d-flex flex-column justify-content-center">
                    {{-- GESTIÓN DE POSTS Y COMENTARIOS --}}
                    <h2 class="titulo_1 text-center fw-bold mt-4">GESTIÓN</h2>
                    <h2 class="text-center"><i class="bi bi-caret-down"></i></h2>
                    <h4 class="text-center mb-4 mt-4">Gestiona tus posts aqui: </h4>
                    <div class="text-center m-3">
                        <a class="btn shadow text-center" href="{{ route('posts.index') }}"><i class="bi bi-file-earmark-post"></i> MIS POSTS</a>
                    </div>
                    <h4 class="text-center mb-4 mt-4">Gestiona tus comentarios aqui: </h4>
                    <div class="text-center m-3">
                        <a class="btn shadow text-center" href="{{ route('posts.index') }}"><i class="bi bi-chat"></i> MIS COMENTARIOS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">¿ Estas seguro ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
            <div class="alert alert-danger" role="alert">
                Se eliminará tu cuenta junto todos tus datos, posts y comentarios publicados en nuestro foro.
              </div>
              @guest
              ...
              @else
                {{-- <a href="{{route('deleteuser',Auth::user()->id)}}" class="btn btn-danger">Eliminar {{ Auth::user()->email }}</a> --}}
              @endguest
        </div>
    </div>
    </div>
</div>
@endsection