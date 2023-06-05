@extends('layouts.simple')

@section('content')
<header class="hero-image" style="background-image: url({{URL::asset('images/register_hero.jpg')}});">
    <div class="container">
      <h1 class="hero-text">¡Bienvenido!</h1>
    </div>
</header>
<div class="custom-login mt-3 mt-lg-5">
    <form class="form_main" action="{{ route('store') }}" method="post">
        @csrf
        <p class="heading"><i class="bi bi-person-plus"></i> Regístrate</p>

        {{-- Input Nombre --}}
        <div class="inputContainer">
            <i class="bi bi-person-vcard inputIcon"></i>
            <input placeholder="Nombre" type="text" class="inputField @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="text-danger p-2">{{ $errors->first('name') }}</span>
                @endif
        </div>

        {{-- Input Email --}}
        <div class="inputContainer">
            <i class="bi bi-envelope inputIcon"></i>
            <input placeholder="Email" type="email" class="inputField @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="text-danger p-2">{{ $errors->first('email') }}</span>
                @endif
        </div>
        
        {{-- Input contraseña --}}
        <div class="inputContainer">
            <i class="bi bi-lock-fill inputIcon"></i>
            <input placeholder="Contraseña" id="password" class="inputField @error('password') is-invalid @enderror" type="password" name="password">
                @if ($errors->has('password'))
                    <span class="text-danger p-2">{{ $errors->first('password') }}</span>
                @endif
        </div>

        {{-- Input repetir contraseña --}}
        <div class="inputContainer">
            <i class="bi bi-lock-fill inputIcon"></i>
            <input placeholder="Repetir Contraseña" id="password_confirmation" class="inputField" type="password" name="password_confirmation">
        </div>
    <button id="button" value="Register">ACEPTAR</button>
        <div class="signupContainer">
            <p>¿Ya tienes una cuenta?</p>
            <a href="{{ route('register') }}">Iniciar sesión</a>
        </div>
    </form>
    
</div>

{{-- <div class="row justify-content-center pt-5 pb-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Register</div>
            <div class="card-body">
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
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
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Register">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div> --}}

@endsection