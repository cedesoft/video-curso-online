<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $MiCarrito = Session::has('cart') ? Session::get('cart') : null; //recuperar carito si existe, si no será NULL

        if($MiCarrito == null){
            return back();
        }

        return view('payments.paymentPaypal',compact('MiCarrito'));
        //$MiCarrito = Session::has('cart') ? Session::get('cart') : null; //recuperar carito si existe, si no será NULL


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Registro.create');
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
        $this->validate($request, ['name' => 'required|string',
        'email'=> 'required|string|email|unique:users',
        'password' => 'required|string|min:8|confirmed']);
        $role_cliente = Role::where('name','cliente')->first();

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        $user->roles()->attach($role_cliente);
        $profile = new Profile();
        $profile->avatar = 'guest.png';
        $profile->about = 'Hola soy '. $user->name;
        $profile->user_id = $user->id;
        $profile->save();
        //Profile::create(['avatar' => 'guest.png','about' => 'Hola soy '.$user->name, 'user_id' => $user->id]);
        return back();
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    }
}
