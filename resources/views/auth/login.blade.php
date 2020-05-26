@extends('layouts.app')

@section('content')
<section>

    <link rel="stylesheet" href="{{ asset('css/formlogin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <div class="row no-gutters bg-light">
        <div class="col-xl-6 col-lg-12 imagelogin abs-center">
            <div class="position-absolute p-6">
                <h3 class="font-weight-bold  text-center fontt">Bienvenido</h3>
            </div>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto p-4">
            <div class="container align-self-center p-6">
                <h1 class="text-center textcolor">Inicio de sesion</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input placeholder="Correo electronico" id="email" type="email" class="form-group formloginemail form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input placeholder="Contraseña" id="password" type="password" class="formloginpass form-group form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password ">
                    <br>
                    <p class="text-muted"><a href="{{route('recoverpass.index')}}" class="formlogina">¿Olvidaste tu contraseña?</a></p>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  
                    @enderror
                    <button type="submit" class="btn formloginbtn">
                        {{ __('Login') }}
                    </button>
                    
                    <div class="mover">
                 
                   
                    <p class="text-center text-muted">¿Aun no tienes cuenta? <a class="formlogina" href="{{route('register')}}">Registrate</a></p>
                    <p class="text-center text-muted">Cuando te registras aceptas nuestros</p>
                    <p class="text-center text-muted"><a href="" class="formlogina">Terminos y politicas de privacidad</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection