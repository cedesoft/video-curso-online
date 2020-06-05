@extends('layouts.app')

@section('content')

@endsection
<link rel="stylesheet" type="text/css" href="css/paymentRegistration.css">
<div class="headerRegis">
         <h2>Carrito de compras</h2>

</div>



    <div class="container">
        @if(session('status'))
        <h3 class="text-xlmd:text-2xl">
        {{session('status')}}
        <a href="{{('course')}}">Seguir comprando </a>
        </h3>
        @endif
        </div>

