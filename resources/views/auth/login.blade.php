@extends('layouts.simple')

@section('content')
<header class="hero-image" style="background-image: url({{URL::asset('images/login_hero.jpg')}});">
    <div class="container">
      <h1 class="hero-text">¡Bienvenido!</h1>
    </div>
</header>
<div class="custom-login mt-3 mt-lg-5">
    <form class="form_main" action="{{ route('authenticate') }}" method="post">
        @csrf
        <p class="heading"><i class="bi bi-door-open"></i> Iniciar sesión</p>

        {{-- Input Email --}}
        <div class="inputContainer">
            <i class="bi bi-envelope inputIcon"></i>
            <input placeholder="Email" type="email" class="inputField @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
        </div>
        
        {{-- Input contraseña --}}
        <div class="inputContainer">
            <i class="bi bi-lock-fill inputIcon"></i>
            <input placeholder="Contraseña" id="password" class="inputField @error('password') is-invalid @enderror" type="password" name="password">
        </div>
    @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif         
    @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif  
    <button id="button" value="Login">ACEPTAR</button>
        <div class="signupContainer">
            <p>¿No tienes una cuenta?</p>
            <a href="{{ route('register') }}">Registrate</a>
        </div>
    </form>
    
</div>
{{-- <div class="row justify-content-center mt-5 pt-5 login-p">
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
</div> --}}

@endsection