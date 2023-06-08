@extends('layouts.app')

@section('content')
<div class="container-fluid principal">
    <div class="row justify-content-center">
        <div class="col-md-8 main-container mt-2 mb-2 rounded-3 shadow">
            <h2 class="titulo_1 text-center fw-bold mt-4">TUS POSTS</h2>
            @if($posts->count() >= 1)
            <h4 class="text-center mb-4">A continuación podrás ver todos tus posts</h4>
                @endif
            <h2 class="text-center"><i class="bi bi-caret-down"></i></h2>
            {{-- Contenedor posts individuales --}}
            <div class="col-12 m-2 rounded border">
                @if($posts->count() < 1)
                <h5 class="text-center m-4">No hay posts disponibles.</h5>
                @endif
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
            {{-- Paginación bootstrap 5--}}
            <div class="m-3">
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
            {{-- Botón regreso --}}
            <div class="text-center m-5">
                <a class="btn shadow text-center" href="{{ route('user.index') }}"><i class="bi bi-arrow-left-square-fill"></i> VOLVER</a>
            </div>
            
        </div>
    </div>
</div>
@endsection