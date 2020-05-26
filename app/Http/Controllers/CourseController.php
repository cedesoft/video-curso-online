<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Video;
use App\Cart;
use DB;
use Session;
use App\Calification;

use function GuzzleHttp\Promise\all;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $courses = Course::orderBy('id', 'DESC')->paginate(6);
        $MiCarrito = Session::has('cart') ? Session::get('cart') : null; //recuperar carito si existe, si no será NULL
        return view('Courses.index', compact('courses', 'MiCarrito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $request->user()->authorizeRoles('admin');
        return view('Courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
        }
        $course = new Course;
        $course->path = $name;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->actual_price = $request->actual_price;
        $course->previous_price = '0.00';
        $course->user_id = 2;
        $course->save();
        return redirect()->route('course.index')->with('succes', 'guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $title
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$title)
    {
        $title = $request->input('search');
        $course = Course::where('title', 'like', $title)->get();
        return view('courses.show', compact('course'));
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
        $course = Course::find($id);
        return view('courses.edit', compact('course'));
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
        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
        }
        $course = Course::findOrFail($id);
        $course->path = $name;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->actual_price = $request->actual_price;
        $course->previous_price = $request->previous_price;
        $course->save();
        return redirect()->route('uploadcourses');
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
        Course::find($id)->delete();
        return redirect()->route('uploadcourses');
    }
    /**
     * Display the specified resource.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function courses($id)
    {
        $courses = DB::table('courses')
            ->join('users', 'users.id', '=', 'courses.user_id')
            ->select('courses.id','courses.path','courses.title', 'courses.description', 'users.name', 'users.id as user_id')
            ->where('users.id', '=', $id)->paginate(6);
        return view('courses.mycourses', compact('courses'));
    }
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allcourses()
    {
        $courses = Course::all();
        return view('admin.admincourse1', compact('courses'));
    }
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userscourses()
    {
        $courses = Course::all();
        return view('admin.admincourse2', compact('courses'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function favcourses()
    {
        $courses = Course::all();
        return view('admin.admincourse3', compact('courses'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admincourses(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $courses = Course::orderBy('id', 'DESC')->paginate(6);
        return view('Courses.uploadcourse2', compact('courses'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearvideo(Request $request)
    {
        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/videos/', $name);

        }
        if ($request->hasFile('image')) {
            $file_image = $request->file('image');
            $name_image = time() . $file_image->getClientOriginalName();
            $file_image->move(public_path() . '/images/', $name_image);
        }

        $video = new Video();
        $video->path = $name;
        $video->path_image = $name_image;
        $video->title = $request->input('title');
        $video->description = $request->input('description');
        $video->course_id = $request->input('course_id');
        $video->save();
        return redirect()->route('uploadcourses');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $title = Course::where('title', 'like', $request->input('search'))->get();
        return view('courses.show', compact('title'));
    }

    public function getAddToCart(Request $request, $id){
        $course = Course::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);


        // add($item, $id);
        $cart->add($course, $course->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));

        return back();
    }




    public function info($id){
        $courses =  DB::table('courses')
        ->join('users', 'users.id', '=', 'courses.user_id')
        ->select('courses.id', 'courses.path', 'courses.title', 'courses.description', 'courses.actual_price', 'users.id as user_id','users.name', 'users.email')
        ->where('courses.id', '=', $id)->get();
        $cant = DB::table('videos')
        ->join('courses', 'courses.id', '=', 'videos.course_id')
        ->where('courses.id', '=', $id)
        ->count();
        $videos = DB::table('videos')
        ->join('courses', 'courses.id', '=', 'videos.course_id')
        ->select('videos.id','videos.title', 'videos.description','videos.path_image',)
        ->where('courses.id', '=', $id)
        ->get();
        $files =  DB::table('videos')
        ->join('courses', 'courses.id', '=', 'videos.course_id')
        ->join('files', 'files.video_id', '=', 'videos.id')
        ->select('videos.id','videos.title', 'videos.description','videos.path_image', 'files.id as file_id', 'files.title as file_title')
        ->where('courses.id', '=', $id)
        ->get();
        $califications = DB::table('califications')
        ->join('users', 'users.id', '=', 'califications.user_id')
        ->join('profiles', 'profiles.user_id', '=', 'users.id')
        ->join('courses', 'courses.id', '=', 'califications.course_id')
        ->select('users.name','users.id', 'profiles.avatar', 'califications.recomend', 'califications.comment')
        ->where('courses.id', '=', $id)
        ->get();
        return view('Courses.courseDetail', compact('courses', 'cant', 'videos','files', 'califications'));
    }
    public function calif(Request $request){
        $calification = new Calification;
        $calification->course_id = $request->input('course_id');
        $calification->user_id = Auth()->user()->id;
        $calification->recomend = $request->input('recommend');
        $calification->comment = $request->input('comment');
        $calification->save();
        return back();
    }


}
