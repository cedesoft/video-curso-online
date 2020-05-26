@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/shopping.css') }}">
<link rel="stylesheet" type="text/css" href="css/paymentPaypal.css">

        {{-- {{dd($MiCarrito->items)}} --}}

        <div class="res">
            <div class="titulo">
                <p>Carrito de compras</p>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        </div>

        <div class="row">
        <div class="container">
        @forelse ($MiCarrito != null ? $MiCarrito->items : []  as $item)
        <div class="card mb-3" style="max-width: 540px;">
            <div class="card-body">
                    <h4 class="card-title">{{$item['item']['title']}}</h4>
                    <h5 >{{$item['item']['description']}}</h5>
                    <h5 >${{number_format($item['price'], 2, '.', '')}}</h5>
                </div>
            </div>
        </div>

            <div>
                <div class="resultado">
                <div class="titleResultado">
                    <p>Resultado</p>
                    <div class="linepayments"></div>
                </div>
                <div class="numCurso">
                    <h5>{{count($MiCarrito->items)}} cursos a comprar</h5>
                </div>

<br>
                <div>
                    <ul>
                        @forelse ($MiCarrito != null ? $MiCarrito->items : [] as $itemCart)
                            <li>{{$itemCart['item']['title']}} - ${{number_format($itemCart['price'], 2, '.', '')}} MXN</li>
                        @empty
                            <li>* Sin cursos en el carrito</li>
                        @endforelse
                    </ul>
                </div>
                <div class="Total">
                    <p>Total:</p>
                    <div class="pagarTotal">
                        <p>{{number_format($MiCarrito->totalPrice, 2, '.', '')}} MXN</p>
                    </div>
                </div>
                <div class="botonDePagar">
                    <a class="btn navbtnlogin" href="{{route('paymentPaypal.index')}}">Tramitar pedido</a>

                </div>

                </div>
                </div>


                <div class="seguirComprando">
                <a href="{{('course')}}">Seguir comprando </a>
                </div>

        </div>
    </div>



        @empty
        <div class="container">
            <h1 >No hay datos en el carrito</h1>
            <a href="{{('course')}}">Comprar Cursos</a>
        </div>
        @endforelse

    @endsection
