@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<link rel="stylesheet" type="text/css" href="css/Card.css">


<div class="contenedorPagina">
<div class="banner" style="background: url(images/banner.png), linear-gradient(97.68deg, rgba(21, 187, 227, 0.8) 0%, rgba(196, 32, 222, 0.8) 99.99%);">
   <div class="container">
    <div class="welcome-message">
            <h1>Lorem ipsum dolor sit amet</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
    <a class="btn btn-show" href="{{'course'}}">Ver los cursos</a> 
        </div>
    </div>
</div>


    <div class="container">
        <div class="titulo1">
            <h3>¿Qué es AppLogo?</h3>
            </div>
        <div class="titulo2">
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis.
              Donec sit amet arcu iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis. Donec sit amet arcu iaculis.
            </h5></div>
         </div>
    </div>


    <div class="contenedorPagina">

<div class="container">
    <div class="contenedor">
       <div class="row">
          <div class="col-xs-6 col-sm-4">
            <img class="imagenCard" src="images/graduation.png">
              <h4 class="tituloCard">Lorem Ipsum</h4>
              <h5 class="parrafoCard">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
          </div>

          <div class="col-xs-6 col-sm-4">
            <img class="imagenCard" src="images/menGraduation.png">
            <h4 class="tituloCard">Lorem Ipsum</h4>
            <h5 class="parrafoCard">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
          </div>
         <div class="col-xs-6 col-sm-4">
           <img class="imagenCard" src="images/certification.png">
           <h4 class="tituloCard">Lorem Ipsum</h4>
           <h5 class="parrafoCard">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
         </div>
       </div>
     </div>
</div>





  <div class="contenedor2">
    <div class="container">
        <div class="row">
          <div class="col-6">
              <div class="imagenCirculo">
               <img src ="https://images.pexels.com/photos/4040305/pexels-photo-4040305.png">
              </div>
              <div class="circulo1">
              </div>
              <div class="circulo2">
              </div>
              <div class="circulo3">
              </div>
          </div>

        <div class="col-6">
            <div class="titulo3">
               <h3>Lorem Ipsum dolor sit amet </h3>
               <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis.
               Donec sit amet arcu iaculis, convallis lorem quis, egestas lacus. Duis volutpat quis magna a pharetra.
               Pellentesque erat arcu, laoreet quis suscipit fringilla, malesuada sit amet sapien.</h5>
             </div>
         </div>

    </div>
 </div>
</div>
 <div class="container">
   <div class = "contenedor3">
   <h5 class="titulo2">" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida tempor lobortis."
               </h5>

</div>
</div>
<div class="imagenFinal">
<img src="images/welcome.jpg"/>
</div>



<!--/////////////////////////////////////////////////////////////-->







<!--/////////////////////////////////////////////////////////////-->

<div class="rectangulo2">
<div class="container">


    <div class="titulo6">
    <h2>Lorem Ipsum dolor sit amet </h2>
    <h5> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Sed pellentesque velit gravida tempor lobortis.</h5>
     <button >Unete ahora gratis</button>
   </div>
 </div>
</div>

<div class="container">
  <div class="titulo5">
     <h2>Lorem Ipsum dolor sit amet</h2>
      <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque velit gravida
       tempor lobortis. Donec sit amet arcu iaculis, convallis lorem quis, egestas lacus. Duis
      volutpat quis magna a pharetra. Pellentesque erat arcu, laoreet quis suscipit fringilla, malesuada sit amet sapien.
      </h5>
   </div>

   <!--<div class="imagenniños">
<img src="images/niños.png"/>
</div>-->
</div>
</div>
</div>
</div>

@endsection

