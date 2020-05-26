@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/formlibrary.css') }}">
<link rel="stylesheet" href="{{ asset('css/Card.css') }}">
<div class="headercontentlibrary">
    <h1>Mis favoritos</h1>
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
        @foreach($courses as $curso)
    <div class="col-12 col-md-6 col-lg-4 mb-4">
    <div class="card">
        <div class="card-header">
          <img src="{{asset('images/'.$curso->path)}}" />
        </div>
        <div class="card-content">
          <h1>{{$curso->title}}</h1>
          <span>Impartido por : </span>
          <p>{{$curso->description}}</p>
          <a href="{{route('coursedetail', $curso->id)}}">Ver mas</a><button class="">Añadir al carrito</button>
        </div>
      </div>
    </div>
    @endforeach
    </div>

</div>
@endsection