<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use DB;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $files = DB::table('files')
        ->join('videos','videos.id', '=', 'files.video_id')
        ->select('videos.title', 'files.path', 'files.id')->paginate(6);
        return view('Files.index', compact('files'));
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
        $file = new File;
        $file->path = $request->path;
        $file->video_id = $request->video_id;
        $file->save();
        return response()->json($file);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $file=File::find($id);
        return view('Files.edit',compact('file'));
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
        if($request->hasFile('path')){
            $file = $request->file('path');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/files/', $name);
        }
        $file = File::findOrFail($id);
        $file->title = $request->input('title');
        $file->path = $name;
        $file->save();
        return redirect()->route('adminfiles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        File::find($id)->delete();
        return redirect()->route('adminfiles.index');
    }
}
