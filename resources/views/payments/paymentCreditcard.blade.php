@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
<link rel="stylesheet" href="{{ asset('css/paymentCreditcard.css') }}">

<div class="res">
    <div class="titulo">
        <p>Carrito de compras</p>
    </div>
    <br>
    <br>
    <br>
    <br>

    <form action="#" method="POST" id="payment-form">
        <input type="hidden" name="token_id" id="token_id">
        <input type="hidden" name="use_card_points" id="use_card_points" value="false">
        <div class="pymnt-itm card active">
            <h2>Tarjeta de crédito o débito</h2>
            <div class="pymnt-cntnt">
                <div class="card-expl">
                    <div class="credit"><h4>Tarjetas de crédito</h4></div>
                    <div class="debit"><h4>Tarjetas de débito</h4></div>
                </div>
                <div class="sctn-row">
                    <div class="sctn-col l">
                        <label>Nombre del titular</label><input type="text" placeholder="Como aparece en la tarjeta" autocomplete="off" data-openpay-card="holder_name">
                    </div>
                    <div class="sctn-col">
                        <label>Número de tarjeta</label><input type="text" autocomplete="off" data-openpay-card="card_number"></div>
                    </div>
                    <div class="sctn-row">
                        <div class="sctn-col l">
                            <label>Fecha de expiración</label>
                            <div class="sctn-col half l"><input type="text" placeholder="Mes" data-openpay-card="expiration_month"></div>
                            <div class="sctn-col half l"><input type="text" placeholder="Año" data-openpay-card="expiration_year"></div>
                        </div>
                        <div class="sctn-col cvv"><label>Código de seguridad</label>
                            <div class="sctn-col half l"><input type="text" placeholder="3 dígitos" autocomplete="off" data-openpay-card="cvv2"></div>
                        </div>
                    </div>
                    <div class="openpay"><div class="logo">Transacciones realizadas vía:</div>
                    <div class="shield">Tus pagos se realizan de forma segura con encriptación de 256 bits</div>
                </div>
                <div class="sctn-row">
                        <a class="button rght" id="pay-button">Pagar</a>
                </div>
            </div>
        </div>
    </form>



   <!--<div>
        <div class="pagar">
            <p>PAGAR</p>
        </div>
        <div>
            <button class="tarjeta">
                <div class="letraTarjeta">Tarjeta</div>
            </button>
        </div>
        <div>
            <button class="paypal">
                <div class="letrapay">PayPal</div>
            </button>
        </div>
        <div class="RectanguloCredit">
            <div class="ingrese">
                <p>Ingresa los datos de tu tarjeta de crédito o débito</p>
            </div>
            <div class="nombre">
                <p>Nombre en la tarjeta</p>
                <div class="NombreTarjeta">
                    <input type="text" class="form-group form-control" placeholder="Nombre de la tarjeta" />
                </div>
            </div>
            <div class="numero">
                <p>Numero en la tarjeta</p>
                <div class="NumeroTarjeta">
                    <input type="text" class="form-group form-control" placeholder="Numero de la tarjeta" />
                </div>
            </div>
            <div class="FechaExp">
                <p>Fecha de expiración</p>
                <div class="fecha">
                    <input type="text" class="form-group form-control" placeholder="MM" />
                    <div class="aaa">
                        <input type="text" class="form-group form-control" placeholder="AAA" />
                        <div class="letrascvc">
                            <p>CVC/CVV</p>
                            <div class="CVC">
                                <input type="text" class="form-group form-control" placeholder="CVC/CVV" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        <div>
            <button class="botonPagar">Pagar</button>
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
        <div>
            <button class="botonPagar">Pagar</button>
        </div>
    </div>

    <section>
                <div class="pagoseguro">
                    <p>Pago 100% seguro</p>

                </div>
                <div class="descripcionsseguro">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </section>

            <div class="detalleC">
                        <p>DETALLE DEL PEDIDO</p>

            <div class="rectanguloDetalle">
              <div class="detallePayment">
                  <p>Lorem ipsum dolor</p>
              </div>
              <div class="anteriorPrecio">
                  <p>$ 899.99 MXN</p>
              </div>
              <div class="actualPrecio">
                  <p>$ 599.99 MX</p>
              </div>
            </div>
        </div!-->

    @endsection
