<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Exception\PayPalConnectionException;
use Session;
use App\Pagos;



class paypalController extends Controller
{

    private $apiContext;

    //
    public function __construct()
    {
        $payPalConfig = Config::get('paypal');

       $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                'AeDyPwSg7cSeiPwo7J3RYekuleP4KVbaUOIFkMH3AEsg-51uArQNMTVCzOwhswaTR_-KW8L0BUs51Z_o',  // ClientID
                'EFLHHI-Ga9UJHhALRaNslToDiC0grn21Gx9r-i8naJykkjDbDnZSgD2Y6T2MY0QKyrNfKyNi_6SMoYbC' //$payPalConfig['secret']        // ClientSecret
            )
     );

    }
     public function payWithPayPal()
     {
        $MiCarrito = Session::has('cart') ? Session::get('cart') : null; //recuperar carito si existe, si no será NULL

        if($MiCarrito == null){
            return back();
        }
        // After Step 2
       $payer = new Payer();
       $payer->setPaymentMethod('paypal');
       $amount = new Amount();
       $amount->setTotal(number_format($MiCarrito->totalPrice, 2, '.', ''));//number_format($MiCarrito->totalPrice, 2, '.', '')
       $amount->setCurrency('MXN');

       $transaction = new Transaction();
       $transaction->setAmount($amount);
       //$transaction->setDescription('see your ID results');
       $callbackUrl=url('paypal/status');

    $redirectUrls = new RedirectUrls();
    $redirectUrls->setReturnUrl($callbackUrl)
    ->setCancelUrl($callbackUrl);

    $payment = new Payment();
    $payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions(array($transaction))
    ->setRedirectUrls($redirectUrls);



    // After Step 3-------------------- crear el pago
try {

    $payment->create($this->apiContext);
    //echo $payment;
    // Recorrer los items del carrito y hacer el registro de cursos al usuario ( BD )
    // Eliminar el carrito de compras (SESSION = Cart) $MiCarrito::unset();
    //foreach ($MiCarrito != null ? $MiCarrito->items : [] as $item){
       // $pay = new Pagos();
       // $pay->amount= $item['item']['price'];
       // $pay->user_id = Auth()->user()->id;
       // $pay->course_id = $item['item']['id'];
       // $pay->save();
   // }
    return redirect()->away($payment->getApprovalLink());
}
catch (PayPalConnectionException $ex) {
    echo $ex->getData();
}

}

public function payPalStatus(Request $request){

//($request->all());
$paymentId =$request->input('paymentId');
$payerId =$request->input('PayerID');
$token =$request->input('token');


if(!$paymentId || !$payerId ||!$token){
    $status = 'No se pudo proceder con el pago a traves de PayPal.';
return redirect('paymentPaypal')->with(compact('status'));
}

$payment =Payment::get($paymentId,$this->apiContext);

$execution = new PaymentExecution();
$execution->setPayerId($payerId);

$result = $payment->execute($execution,$this->apiContext);
//dd($result);

if($result->getState() === 'approved'){
    $status = 'Gracias!El pago a traves de paypal se ha realizado correctamente';
    return redirect('paymentPaypal')->with(compact('status'));
}
$status = 'Lo sentimos! El pago a traves de PayPal no se pudo realizar';
return redirect('paymentPaypal')->with(compact('status'));;
}

}
