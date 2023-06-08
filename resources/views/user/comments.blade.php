@extends('layouts.app')

@section('content')
<div class="container-fluid principal">
    <div class="row justify-content-center">
        <div class="col-md-8 main-container mt-2 mb-2 rounded-3 shadow">
            <h2 class="titulo_1 text-center fw-bold mt-4">TUS COMENTARIOS</h2>
            @if($comments->count() >= 1)
            <h4 class="text-center mb-4">A continuaci'on podrás ver todos tus comentarios</h4>
                @endif
            <h2 class="text-center"><i class="bi bi-caret-down"></i></h2>
            {{-- Contenedor posts individuales --}}
            <div class="col-12 m-2">
                @if($comments->count() < 1)
                <h5 class="text-center m-4">No hay comentarios disponibles.</h5>
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
            {{-- Botón regreso --}}
            <div class="text-center m-5">
                <a class="btn shadow text-center" href="{{ route('user.index') }}"><i class="bi bi-arrow-left-square-fill"></i> VOLVER</a>
            </div>
            
        </div>
    </div>
</div>
@endsection