<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseDetail;
class CourseDetailController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coursedetail = CourseDetail::all();
        return response()->json($coursedetail);
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
        $detail = new CourseDetail();
        $detail->learning = $request->learning;
        $detail->requirements = $request->requirements;
        $detail->target_students = $request->target_students;
        $detail->course_id = $request->course_id;
        $detail->save();
        return response()->json($detail);
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
        return $id;
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
        $detail = CourseDetail::findOrFail($id);
        $detail->learning = $request->learning;
        $detail->requirements = $request->requirements;
        $detail->target_students = $request->target_students;
        $detail->save();
        return response()->json($detail);
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
        $detail = CourseDetail::find($id)->delete();
        return response()->json($detail);
    }
}
