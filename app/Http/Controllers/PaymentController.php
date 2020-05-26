<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use Session;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$payment = Payment::all(); //no es necesario
        //return response()->json($payment);
        $MiCarrito = Session::has('cart') ? Session::get('cart') : null; //recuperar carito si existe, si no será NULL
        /* dd($MiCarrito); */
        return view('payments.shoppingcart', compact('MiCarrito'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $payment = new Payment;
        $payment->amount = $request->amount;
        $payment->user_id = $request->user_id;
        $payment->course_id = $request->course_id;
        $payment->save();
        return response()->json($payment);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $payment = Payment::findOrFail($id);
        $payment->amount = $request->amount;
        $payment->save();
        return response()->json($payment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $payment = Payment::find($id)->delete();
        return response()->json($payment);
    }
}
