@extends('layouts.app')

@section('content')
<section>
<link rel="stylesheet" type="text/css" href="css/paymentlogin.css">

<div class="header">
                        <h2>Carrito de compras</h2>
            </div>

            <div class="Rectangle">
                <div class="text1">
                    <p>Inicia sesión para poder procesar tu compra</p>
                </div>
                <div class="text2">
                    <p>¿No tienes una cuenta? </p>
                    <div class="text3"> <a href='register' > Registrate</a></div>
                </div>
                <div class="correo">
                    <input type="email" class="form-group form-control" placeholder="Correo electronico" />
                </div>
                <div class="password">
                    <input type="password" class="form-group form-control" placeholder="Contraseña" />
                </div>
                <div >
                    <button class="buttonPagos">Crear cuenta</button>
                </div>
                <div class="contraseña"><a href="" >¿Olvidaste tu contraseña</a></div>
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