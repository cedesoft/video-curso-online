<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Validator;
use Hash;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //return view('Profile.edit');
    return view('payments.paymentCreditcard');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new Profile;
        $profile->avatar = $request->avatar;
        $profile->about = $request->about;
        $profile->user_id = $request->user_id;
        $profile->save();
        return redirect()->route('profile.index')->with('success', 'Registro creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $profile = DB::table('profiles')
        ->join('users', 'users.id', '=' , 'profiles.user_id')
        ->select('profiles.user_id','profiles.about', 'profiles.avatar', 'users.name', 'users.email', 'users.id')
        ->where('users.id', '=', $user_id)->get();
        //$profile = Profile::where('user_id', '=', $user_id)->get();
        $courses = DB::table('pagos')
        ->join('courses', 'courses.id', '=', 'pagos.course_id')
        ->join('users', 'users.id', '=', 'pagos.user_id')
        ->select('courses.id','courses.path','courses.title', 'courses.description', 'users.name', 'users.id as user_id')
        ->where('users.id', '=', $user_id)->paginate(6);

        return view('profile.show', compact('profile','courses'));


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
        $profile = DB::table('profiles')
        ->join('users', 'users.id', '=' , 'profiles.user_id')
        ->select('profiles.user_id','profiles.about', 'profiles.avatar', 'users.name', 'users.email', 'users.id', 'profiles.id as profile_id')
        ->where('users.id', '=', $id)->get();
        return view('profile.edit',compact('profile'));
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
        $this->validate($request,['avatar'=>'required','about'=>'required']);
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $profile = Profile::findOrFail($id);
        $profile->avatar = $name;
        $profile->about = $request->input('about');
        $profile->save();
        return back();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        $this->validate($request,['name'=>'required']);
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->save();
        return back();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizarcorreo(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'mypassword' => 'required',
            'newemail' => 'required|string|email'
        ]);
        
       $this->validate($request,['mypassword'=>'required','newemail'=>'required|string|email']);
            if(Hash::check($request->mypassword, Auth::user()->password)){
                $user = new User();
                $user -> where('email', '=', Auth::user()->email)
                ->update(['email' => $request->newemail]);
                return back();
            }
        //$user = User::findOrFail($id);
        //$user->email = $request->input('email');
        //$user->save();
        //return back();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizarcon(Request $request)
    {
       $validator = Validator::make($request->all(), [
        'mypassword' => 'required',
        'password' => 'required|confirmed'
       ]);
       $this->validate($request,['mypassword'=>'required','password'=>'required|confirmed']);
                if(Hash::check($request->mypassword, Auth::user()->password)){
                    $user = new User();
                    $user -> where('email', '=', Auth::user()->email)
                    ->update(['password' => bcrypt($request->password)]);
                    return back();
                }
        //$user = User::findOrFail($id);
        //$user->email = $request->input('email');
        //$user->save();
        //return redirect()->route('home')->with('success', "Actualizado");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }


    public function prof($user_id)
    {
        $profile = DB::table('profiles')
        ->join('users', 'users.id', '=' , 'profiles.user_id')
        ->select('profiles.user_id','profiles.about', 'profiles.avatar', 'users.name', 'users.email', 'users.id')
        ->where('users.id', '=', $user_id)->get();
        //$profile = Profile::where('user_id', '=', $user_id)->get();

        $courses = DB::table('pagos')
        ->join('courses', 'courses.id', '=', 'pagos.course_id')
        ->join('users', 'users.id', '=', 'pagos.user_id')
        ->select('courses.id','courses.path','courses.title', 'courses.description', 'users.name', 'users.id as user_id')
        ->where('users.id', '=', $user_id)->paginate(6);

        return view('profile.userprofile', compact('profile','courses'));
    }

}
