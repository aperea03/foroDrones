@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-5 pt-5 login-p">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
{{-- footer --}}
<footer class="border-top pt-5 mt-5">
    <div class="container-xl">
        <div class="row text-center">
            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="mb-4">Categorías</h3>
                <nav class="d-flex flex-column">
                    <a class="text-decoration-none text-dark" href="#">Shishas</a>
                    <a class="text-decoration-none text-dark" href="#">Pods</a>
                    <a class="text-decoration-none text-dark" href="#">Accesorios</a>
                    <a class="text-decoration-none text-dark" href="#">Encendido</a>
                    <a class="text-decoration-none text-dark" href="#">Cazoletas</a>
                </nav>
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="mb-4">Información</h3>
                <nav class="d-flex flex-column">
                    <a class="text-decoration-none text-dark" href="#">¿Quienes somos?</a>
                    <a class="text-decoration-none text-dark" href="#">Ubicanos</a>
                    <a class="text-decoration-none text-dark" href="#">forodrones123@gmail.com</a>
                    <a class="text-decoration-none text-dark" href="#">664 34 56 33</a>
                </nav>
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="mb-4">Siguenos</h3>
                <nav class="d-flex flex-column">
                    <h3><a class="text-decoration-none text-dark" href="#"><i class="bi bi-facebook"></i></a></h3>
                    <h3><a class="text-decoration-none text-dark" href="#"><i class="bi bi-instagram"></i></a></h3>
                    <h3><a class="text-decoration-none text-dark" href="#"><i class="bi bi-twitter"></i></a></h3>
                    <h3><a class="text-decoration-none text-dark" href="#"><i class="bi bi-twitch"></i></a></h3>
                </nav>
            </div>
        </div>
    </div>
</footer>
@endsection