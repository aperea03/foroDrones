@extends('layouts.app')

@section('content')
<div class="container-fluid principal">
    <div class="row justify-content-center">
        <div class="col-md-8 main-container mt-2 mb-2 rounded-3 shadow">

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
                <form action="{{ route('post.destroy', $post) }}" method="POST" class="text-end">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="buttondel m-2">
                        <span class="button-text"><i class="bi bi-trash"></i></span>
                        <div class="fill-container"></div>
                    </button>
                </form>
                @endif
                @endguest
            </div>
            <div>
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
                <h3>Comentarios: </h3>
                @foreach ($comments as $coment)
                <div class="shadow m-4 p-2 p-md-3 comentdiv border rounded bg-superlight">
                    <div class="d-flex justify-content-between">
                        <h5><i class="bi bi-chat-right"></i> <strong>{{ $coment->user->name }}</strong></h5>
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
            <div class="m-3">
                {{ $comments->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection