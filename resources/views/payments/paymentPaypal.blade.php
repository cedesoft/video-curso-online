@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/shopping.css') }}">

<!--@if(session('status'))
<h3 class="text-xlmd:text-2xl">
{{session('status')}}

</h3>
@endif!-->



@section('content')
@if (!Auth::user())
<section>
    <link rel="stylesheet" href="{{ asset('css/formlogin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <div class="row no-gutters bg-light">
        <div class="col-xl-6 col-lg-12 imagelogin abs-center">
            <div class="position-absolute p-6">
                <h5 class="font-weight-bold  text-center fontt">Bienvenido</h5>
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
