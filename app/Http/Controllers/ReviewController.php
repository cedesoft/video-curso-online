<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $review = Review::all();
        return response()->json($review);
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
        $review = new Review;
        $review->recommends = $request->recommends;
        $review->review = $request->review;
        $review->user_id = $request->user_id;
        $review->course_id = $request->course_id;
        $review->save();
        return response()->json($review);
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
        $review = Review::findOrFail($id);
        $review->recommends = $request->recommends;
        $review->review = $request->review;
        $review->save();
        return response()->json($review);
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
        $review = Review::find($id)->delete();
        return response()->json($review);
    }
}
