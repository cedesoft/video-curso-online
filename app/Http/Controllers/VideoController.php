<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Video;
use App\Course;
use App\File;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $videos = DB::table('videos')
        ->join('courses', 'courses.id', '=', 'videos.course_id')
        ->select('courses.title', 'videos.id', 'videos.path', 'videos.description')
        ->paginate(6);
        return view('videoss.index', compact('videos'));
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id)
    {
        $course = DB::table('courses')
        ->select('courses.id','courses.title','courses.path', 'courses.description')
        ->where('courses.id', '=', $id)->get();

        $videos = DB::table('videos')
        ->join('courses', 'courses.id', '=', 'videos.course_id')
        ->select('videos.id','videos.path', 'videos.description', 'videos.title')
        ->where('courses.id', '=', $id)->get();
        return view('viewcourse.viewvideos', compact('course', 'videos'));
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
        if($request->hasFile('path')){
            $file = $request->file('path');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/files/', $name);
        }
        $file = new File;
        $file ->title=$request->input('title');
        $file ->video_id=$request->input('video_id'); 
        $file->path = $name;
        $file->save();
        return redirect()->route('vide.index');
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
        $video=Video::find($id);
        return view('videoss.edit',compact('video'));
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
            $file->move(public_path().'/videos/', $name);
        }
        if ($request->hasFile('image')) {
            $file_image = $request->file('image');
            $name_image = time() . $file_image->getClientOriginalName();
            $file_image->move(public_path() . '/images/', $name_image);
        }
        $video = Video::findOrFail($id);
        $video->path = $name;
        $video->path_image = $name_image;
        $video->title = $request->input('title');
        $video->description = $request->input('description');
        $video->save();
        return redirect()->route('vide.index');
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
        Video::find($id)->delete();
        return redirect()->route('vide.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coursesvideos($id)
    {
        //
        $course = DB::table('courses')
        ->select('courses.id','courses.path','courses.title', 'courses.description')
        ->where('courses.id', '=', $id)->get();

        $videos = DB::table('videos')
        ->join('courses', 'courses.id', '=', 'videos.course_id')
        ->select('videos.id','videos.path', 'videos.description', 'videos.title')
        ->where('courses.id', '=', $id)->get();
        return view('viewcourse.viewintroduction', compact('videos', 'course'));
    } /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function showvideo($id)
   {
       //
       $video = DB::table('videos')
       ->select('videos.id','videos.path', 'videos.path_image','videos.title', 'videos.description')
       ->where('videos.id', '=', $id)->get();

       $files = DB::table('files')
       ->join('videos', 'videos.id', '=', 'files.video_id')
       ->select('videos.id','files.path')
       ->where('videos.id', '=', $id)->get();
       $comments = DB::table('comments')
       ->join('users', 'users.id', '=', 'comments.user_id')
       ->join('profiles', 'profiles.user_id', '=', 'users.id')
       ->join('videos', 'videos.id', '=', 'comments.video_id')
       ->select('users.name', 'users.id', 'videos.id as video_id', 'comments.id as comment_id', 'comments.comment', 'profiles.avatar')
       ->where('videos.id', '=', $id)->get();
       return view('viewcourse.video', compact('video', 'files', 'comments'));
   }
   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function addcomment(Request $request){
    $comment = new Comment();
    $comment->video_id = $request->input('video_id');
    $comment->user_id = Auth()->user()->id;
    $comment->comment = $request->input('comment');
    $comment->save();
    return back();
   }
}
