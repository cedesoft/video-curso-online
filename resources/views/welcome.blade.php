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
        <div class="titulo1">
            <h3>¿Qué es AppLogo?</h3>
        </div>
        <div class="titulo2">
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis. Donec sit amet arcu iaculis.
            </h5></div>
    </div>
</div>

    <div class="row">
  <div class="col-xs-6 col-sm-4">
      <img class="imagenCard" src="images/graduation.png">
        <h5 class="tituloCard">Lorem Ipsum</h5>
        <p class="parrafoCard">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>

  <div class="col-xs-6 col-sm-4">
  <img class="imagenCard" src="images/menGraduation.png">
        <h5 class="tituloCard">Lorem Ipsum</h5>
        <p class="parrafoCard">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div class="col-xs-6 col-sm-4">
  <img class="imagenCard" src="images/certification.png">
        <h5 class="tituloCard">Lorem Ipsum</h5>
        <p class="parrafoCard">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>

</div>

<div class="rectangulo">
    <div class="titulo3">
        <h3>Lorem Ipsum dolor sit amet </h3>
</div>
<div class="titulo4">
    <h5>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis.
    Donec sit amet arcu iaculis, convallis lorem quis, egestas lacus. Duis volutpat quis magna a pharetra.
    Pellentesque erat arcu, laoreet quis suscipit fringilla, malesuada sit amet sapien.
    </h5>
</div>
<div class="imagen">
    <img src ="https://images.pexels.com/photos/4040305/pexels-photo-4040305.png">
</div>

<div class="circulo1">
</div>
<div class="circulo2">
</div>
<div class="circulo3">
</div>
</div>

<div class="cards">
<div class="row">
<div className="col-12 col-md-6 col-lg-4 mb-4">
    <div class="card">
        <div class="card-header">
          <img src="https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg" />
        </div>
        <div class="card-content">
          <h1>Curso de finanzas</h1>
          <span>Impartido por : Jesus Ramirez</span>
          <p>Curso donde aprenderas como hacer finanzas</p>
          <a href="">Ver mas</a><button class="">Añadir al carrito</button>
        </div>
      </div>
    </div>

    <div className="col-12 col-md-6 col-lg-4 mb-4">
    <div class="card">
        <div class="card-header">
          <img src="https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg" />
        </div>
        <div class="card-content">
          <h1>Curso de finanzas</h1>
          <span>Impartido por : Jesus Ramirez</span>
          <p>Curso donde aprenderas como hacer finanzas</p>
          <a href="">Ver mas</a><button class="">Añadir al carrito</button>
        </div>
      </div>
    </div>

    <div className="col-12 col-md-6 col-lg-4 mb-4">
    <div class="card">
        <div class="card-header">
          <img src="https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg" />
        </div>
        <div class="card-content">
          <h1>Curso de finanzas</h1>
          <span>Impartido por : Jesus Ramirez</span>
          <p>Curso donde aprenderas como hacer finanzas</p>
          <a href="">Ver mas</a><button class="">Añadir al carrito</button>
        </div>
      </div>
    </div>

    <div className="col-12 col-md-6 col-lg-4 mb-4">
    <div class="card">
        <div class="card-header">
          <img src="https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg" />
        </div>
        <div class="card-content">
          <h1>Curso de finanzas</h1>
          <span>Impartido por : Jesus Ramirez</span>
          <p>Curso donde aprenderas como hacer finanzas</p>
          <a href="">Ver mas</a><button class="">Añadir al carrito</button>
        </div>
      </div>
    </div>

</div>
<div class="explorar">
<a href="{{'course'}}"> Explora todo en la biblioteca -></a></div>
</div>
</div>

<div class="rectangulo2">
    <h2>Lorem Ipsum dolor sit amet </h2>
    <h5> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Sed pellentesque velit gravida tempor lobortis.</h5>
 <button >Unete ahora gratis</button>
</div>

<div class="titulo5">
    <h2>Lorem Ipsum dolor sit amet</h2>
    <h5>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida
    tempor lobortis. Donec sit amet arcu iaculis, convallis lorem quis, egestas lacus. Duis
    volutpat quis magna a pharetra. Pellentesque erat arcu, laoreet quis suscipit fringilla, malesuada sit amet sapien.
    </h5>
    <img src="images/niños.png"/>
</div>


</div>




@endsection
