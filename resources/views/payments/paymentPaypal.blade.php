@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/shopping.css') }}">

@if(session('status'))
<h3 class="text-xlmd:text-2xl">
{{session('status')}}

</h3>
@endif



@section('content')
@if (!Auth::user())
<section>
    Formulario de registro o Login
</section>
@else
<section>
    <link rel="stylesheet" type="text/css" href="css/paymentPaypal.css">
    <div class="headerRegis">
        <h2>Carrito de compras</h2>
    </div>

    <div>
        <div class="pagar">
            <p>PAGAR</p>
        </div>

        <div class="RectRed">
            <div class="ConPayPal">
                <p>Para completar tu transacción, te conectamos directamente con PayPal</p>
            </div>
            <div class="desPay">
                <p>Al completar la compra, aceptas las <a href="">Condiciones de uso</a>.</p>
            </div>

        </div>


    <div class="Rectangle1">
                <div class="titleResultado2">
                    <p>RESUMEN</p>
                    <br>
                    <div class="cantidad">
                        <h5>{{count($MiCarrito->items)}} cursos a comprar</h5>
                    </div>

                    <div class="linepayments"></div>
                </div>
                <div class="cursoPayments">
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
                    <a class="btn navbtnlogin" href="{{url('paypal')}}">Pagar</a>
                </div>

            <div class="pagoseguro">
                    <p>Pago 100% seguro</p>

                </div>
                <div class="descripcionsseguro">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

                <div class="detalleC">
                        <p>DETALLE DEL PEDIDO</p>
            <div class="rectanguloDetalle">
                @forelse ($MiCarrito != null ? $MiCarrito->items : [] as $item)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="card-body">
                            <h4  class="card-title">{{$item['item']['title']}}</h4>
                            <h5 >{{$item['item']['description']}}</h5>
                            <h5 >${{number_format($item['price'], 2, '.', '')}}</h5>
                            <!--<h5>{{$item['qty']}}</h5>!-->
                            <!--<h5>{{$item['item']['id']}}</h5>!-->

                        </div>
                    </div>
            @empty
                <li>* Sin cursos en el carrito</li>
            @endforelse

            </div>
            </div>


</section>
@endif



@endsection
