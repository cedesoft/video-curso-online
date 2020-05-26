<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $favorite = Favorite::all();
        return response()->json($favorite);
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
        $favorite =new Favorite;
        $favorite->user_id = Auth()->user()->id;
        $favorite->course_id = $request->input('course_id');
        $favorite->save();
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
        $courses = DB::table('favorites')
        ->join('users', 'users.id' , '=', 'favorites.user_id')
        ->join('courses', 'courses.id', '=', 'favorites.course_id')
        ->select('users.name', 'courses.id', 'courses.path', 'courses.title', 'courses.description')
        ->where('users.id', '=', $id)->get();
        return view('favorites.show', compact('courses'));
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
        $favorite = Favorite::find($id)->delete();
        return response()->json($favorite);
    }
}
