@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<link rel="stylesheet" type="text/css" href="css/Card.css">

<div class="banner" style="background: url(images/banner.png), linear-gradient(97.68deg, rgba(21, 187, 227, 0.8) 0%, rgba(196, 32, 222, 0.8) 99.99%);">
    <div class="container">

        <div class="welcome-message">
            <h1>Lorem ipsum dolor sit amet</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
            <a class="btn btn-show" href="{{'course'}}">Ver los cursos</a> <a class="btn btn-register" href="{{'Registeruser/create'}}">Únete ahora gratis</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="container">
        <h3>Preguntas Frecuentes</h3>
        <h5>Pregunta 1
        </h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis. Donec sit amet arcu iaculis.
        </p>
        <h5>Pregunta 2
        </h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis. Donec sit amet arcu iaculis.
        </p>
        <h5>Pregunta 3
        </h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis. Donec sit amet arcu iaculis.
        </p>
        <h5>Pregunta 4
        </h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis. Donec sit amet arcu iaculis.
        </p>
        <h5>Pregunta 5
        </h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis. Donec sit amet arcu iaculis.
        </p>
        <h5>Pregunta 6
        </h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis. Donec sit amet arcu iaculis.
        </p>
        <h5>Pregunta 7
        </h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis. Donec sit amet arcu iaculis.
        </p>
        <h5>Pregunta 8
        </h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis. Donec sit amet arcu iaculis.
        </p>
        <h5>Pregunta 9
        </h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis. Donec sit amet arcu iaculis.
        </p>
        <h5>Pregunta 10
        </h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis. Donec sit amet arcu iaculis.
        </p>
    </div>
</div>

<div class="rectangulo2">
    <h2>Lorem Ipsum dolor sit amet </h2>
    <h5> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Sed pellentesque velit gravida tempor lobortis.</h5>
    <button>Unete ahora gratis</button>
</div>

<div class="titulo5">
    <h2>Lorem Ipsum dolor sit amet</h2>
    <h5>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida
        tempor lobortis. Donec sit amet arcu iaculis, convallis lorem quis, egestas lacus. Duis
        volutpat quis magna a pharetra. Pellentesque erat arcu, laoreet quis suscipit fringilla, malesuada sit amet sapien.
    </h5>
    <img src="images/niños.png" />
</div>
</div>

@endsection