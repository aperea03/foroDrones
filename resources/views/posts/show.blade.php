@extends('layouts.app')

@section('content')
<div class="container-fluid principal" style="background-image: url({{URL::asset('images/background_chat.jpg')}});">
    <div class="row justify-content-center">
        <div class="col-md-8 main-container mt-2 mb-2 rounded-3 shadow">
            {{-- BOTÓN REGRESO --}}
            <div class="text-left m-3">
                <a class="btn shadow text-center" href="{{ route('posts.index') }}"><i class="bi bi-arrow-left-square-fill"></i> VOLVER</a>
            </div>
            {{-- CONTENIDO PRINCIPAL POST --}}
            <div class="shadow m-2 p-1 p-md-2 mt-3 bg-superlight">
                <p class="minitxt mb-4">Categoría: <strong>{{ $post->category }}</strong></p>
                <p class="minitxt">Título:</p>
                <h3 class="m-4">
                    <i class="bi bi-caret-right-square"></i>
                    {{ $post->title}}
                </h3>
                <p class="minitxt">Contenido:</p>
                <p class="m-4">{{ $post->content }}</p>
                <p>Publicado por: <strong>{{ $post->user->name }}</strong></p>
                @guest
                @else
                @if($post->user->id == Auth::user()->id)
                <div class="d-flex flex-row-reverse">
                    <!-- BOTON MODAL 1 -->
                    <button type="button" class="buttondel m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span class="button-text"><i class="bi bi-trash"></i></span>
                        <div class="fill-container"></div>
                    </button>
                    <!-- MODAL 1 -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                            <h5 class="modal-title" id="exampleModalLabel">¡ CUIDADO !</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="alert alert-danger" role="alert">
                                    ¿Seguro que quieres eliminar el post?
                                </div>
                                {{-- BOTÓN ELIMINAR POST --}}
                                <form action="{{ route('post.destroy', $post) }}" method="POST" class="text-center">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="buttondel m-2">
                                        <span class="button-text">ELIMINAR</span>
                                        <div class="fill-container"></div>
                                    </button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    {{-- BOTON EDITAR POST --}}
                    <form action="{{ route('post.edit', $post) }}" method="POST" class="text-end">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="buttondel buttonedit m-2">
                            <span class="button-text"><i class="bi bi-pencil"></i></span>
                            <div class="fill-container"></div>
                        </button>
                    </form>
                </div>
                @endif
                @endguest
                <div class="d-flex align-items-center justify-content-center">
                    <p class="minitxt mb-4">Última modificación: <strong>{{ $post->updated_at }}</strong></p>
                </div>
            </div>
            <div>
                {{-- FORMULARIO PUBLICACIÓN COMENTARIO --}}
                @guest
                <form action="" id="contact" class="text-center">
                    <h3>Publica tu comentario: </h3>
                    <p>¿Quieres comentar? Inicia sesión y házlo</p>
                    <a class="btn shadow text-center" href="{{ route('login') }}"><h5><i class="bi bi-chat"></i> Comentar</h5></a>
                </form>
                @else
                <form action="{{ route('posts.comments.store',$post->id) }}" method="POST" id="contact">
                    @csrf
                    <h3>Publica tu comentario: </h3>
                    <fieldset>
                        <input placeholder="Escribe tu comentario..." type="text" name="content" tabindex="1" required autofocus>
                    </fieldset>
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" tabindex="2"><i class="bi bi-chat"></i> Comentar</button>
                    </fieldset>
                </form>
                @endguest
                {{-- SECTION COMENTARIOS --}}
                <h3>Comentarios: </h3>
                @if($comments->count() < 1)
                <h5 class="text-center">No ha comentarios disponibles.</h5>
                @endif
                {{-- LISTADO COMENTARIOS --}}
                @foreach ($comments as $coment)
                <div class="shadow m-4 p-2 p-md-3 comentdiv border rounded bg-superlight">
                    <div class="d-flex justify-content-between">
                        <h5>
                            <i class="bi bi-chat-right"></i> <strong>{{ $coment->user->name }}</strong>
                            <p class="minitxt mb-4">{{ $coment->user->email }}</p>
                        </h5>
                        @guest
                        @else
                        @if($coment->user->id == Auth::user()->id)
                        <form action="{{ route('comment.destroy', $coment) }}" method="POST" class="text-end">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="buttondel buttondel2 m-2">
                                <span class="button-text"><i class="bi bi-trash"></i></span>
                                <div class="fill-container"></div>
                            </button>
                        </form>
                        @endif
                        @endguest
                    </div>
                    <h5>{{ $coment->content }}</h5>
                    <h5 class="minitxt text-end"><i class="bi bi-calendar3"></i> {{ $coment->created_at }}</h5>
                </div>
                @endforeach
            </div>
            {{-- PAGINACIÓN BOOTSTRAP --}}
            <div class="m-3">
                {{ $comments->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection