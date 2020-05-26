@extends('layouts.app')

@section('content')
<section>
    
    <link rel="stylesheet" href="{{ asset('css/formlogin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <div class="row no-gutters bg-light">
        <div class="col-xl-6 col-lg-12 imagelogin abs-center">
            <div class="position-absolute p-6">
                <h3 class="font-weight-bold  text-center fontt">Unete hoy</h3>
            </div>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto p-4">
            <div class="container align-self-center p-6">
                <h1 class="text-center textcolor">Registro</h1>
                <div class="formlo">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                                <input placeholder="Nombre" id="name" type="text" class="form-group form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <input placeholder="Correo electronico" id="email" type="email" class="form-group form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <input placeholder="Contraseña" id="password" type="password" class="form-group form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <input placeholder="Confirma contraseña" id="password-confirm" type="password" class="form-group form-control" name="password_confirmation" required autocomplete="new-password">
 

                                <button type="submit" class=" form-group formloginbtn btn">
                                    {{ __('Register') }}
                                </button>
                                
                    </form>
                    <p style="position: relative; top: 50px;" class="text-center text-muted">¿Tienes cuenta? <a class="formlogina" href="{{ route('login')}}">Inicia sesion</a></p>
                    
                </div>
            </div>
        </div>
    </div>
</section>


@endsection