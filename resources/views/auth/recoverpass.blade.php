@extends('layouts.app')

@section('content')
<section>
<link rel="stylesheet" href="{{ asset('css/pass.css') }}">



    <div class="formulario">
        <h2>Olvidaste tu contraseña?</h2>
        <h5>Introduce tu dirección de correo electrónico a continuación. 
            Echaremos un vistazo a tu cuenta y te enviaremos un correo electrónico 
            para restablecer tu contraseña.</h5>
            <input placeholder="Correo electronico" id="email" type="email" class="form-group loginemail form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <button type="submit" class="formpassbtn">Restablecer Contraseña</button>
    </div>



</section>
@endsection