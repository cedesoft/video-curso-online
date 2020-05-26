@extends('layouts.app')

@section('content')
<section>
<link rel="stylesheet" type="text/css" href="css/paymentRegistration.css">
<div class="headerRegis">
         <h2>Carrito de compras</h2>
</div>
<div class="Rectangle">
                <div class="text1">
                <p>Regístrate para poder procesar tu compra</p>
                </div>
                <div class="text2">
                <p> O si ya estás registrado </p>
                <div class="text3"><a href="login" >Inicia Seción</a></div>
                </div>
                <div class="correo">
                <input type="email" class="form-group form-control" placeholder="Correo electronico"/>
                </div>
                <div class="password">
                <input type="password" class="form-group form-control" placeholder="Contraseña"/>
                </div>
                <div >
                <button class="buttonPagos">Crear Cuenta</button>
          </div>
          <div class="termino">
                <p>Cuando te registras aceptas nuestros</p>
                </div>
            </div>

            <div class="Rectangle1">
                <div class="titleResultado2">
                    <p>RESUMEN</p>

                    <div class="linepayments"></div>
                </div>
                <div class="cursoPayments">
                    <p>Curso 1:Lorem ipsum dolor</p>
                    <div class="precioPayments">
                        <p>$599.00 MXN</p>
                    </div>
                </div>

                <div class="cursoPayments2">
                    <p>Curso 2:Lorem ipsum dolor si</p>
                    <div class="precioPayments2">
                        <p>$599.00 MXN</p>
                    </div>
                </div>
                <div class="linepayments2"></div>
                <div class="Total">
                    <p>Total:</p>
                    <div class="pagarTotal">
                        <p>$ 1,199.98 MXN</p>
                    </div>
                </div>
                <div >
                <button class="botonPagar">Pagar</button>
          </div>
            </div>


</section>
@endsection