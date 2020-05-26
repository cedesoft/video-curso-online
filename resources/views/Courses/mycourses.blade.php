@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/formlibrary.css') }}">
<link rel="stylesheet" href="{{ asset('css/Card.css') }}">
<div class="headercontentlibrary">
    <h1>Mis cursos</h1>
</div>
<br>
<div class="container">
    <div className="row">
        <div className="col-12 col-md-6 col-lg-4 mb-4">
            <div class="dropdown move">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Todos los cursos
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
    @if($courses->count())
          @foreach($courses as $course)
    <div class="col-12 col-md-6 col-lg-4 mb-4">
    <div class="card">
   
        <div class="card-header">
          <img src="{{asset('images/'.$course->path)}}" />
        </div>
        <div class="card-content">
          <h1>{{$course->title}}</h1>
          <span>Impartido por : {{$course->name}}</span>
          <p>{{$course->description}}</p>
          <a href="{{route('coursedetail', $course->id)}}">Ver mas</a><button class="" >Añadir al carrito</button>
        </div>
        
      </div>
    </div>
    
    @endforeach
    </div>
    {{$courses->links()}}
              @endif

</div>
@endsection