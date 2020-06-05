@extends('layouts.app')

@section('content')
<section>

      <link rel="stylesheet" type="text/css" href="{{asset('css/courseDetail.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/commentary.css')}}">
      <link rel="stylesheet" href="{{ asset('css/Card.css') }}">
      @foreach($courses as $course)
      <div class="headercontentcourse">
            <h1>{{$course->title}}</h1>
            <!--<h3>Por {{$course->name}}</h3>!-->
            <h5>{{$course->description}}</h5>
      </div>

      <div class="stylecard">
            <div class="card">
                  <div class="card-header">
                        <img src="{{asset('images/'.$course->path)}}" />
                  </div>
                  <div class="card-content">
                        <h1>{{$course->title}}</h1>
                        <!--<span>Impartido por : {{$course->name}}</span>!-->
                        <p>{{$course->description}}</p>
                        <!-- <button class="">Añadir al carrito</button>!-->
                  </div>
            </div>
      </div>
      @endforeach
      <div class="container">
            <div style="position: relative; top:-400px" class="">
                  <h3>Contenido</h3>
                  <h5>Cantidad de videos: {{$cant}}</h5>
            </div>
            @foreach($videos as $video)
            <div style="position: relative; top:-300px" class="">
                  <h5>Video del curso</h5>
                  <p class="text-bold">Titulo: {{$video->title}}</p>
                  <p class="text-muted">Descripcion: {{$video->description}}</p>
                  <img width="200px" height="100px" src="{{asset('images/'.$video->path_image)}}" alt="">
                  <hr>
            </div>
            @endforeach
            @foreach($files as $file)
            <div style="position: relative; top:-250px">
                  <h5>Archivos del curso</h5>
                  <img width="50px" height="50px" src="https://cdn1.iconfinder.com/data/icons/hawcons/32/699833-icon-70-document-file-pdf-512.png" alt="">
                  <p> titulo de documento: {{$file->file_title}}</p>
            </div>
            @endforeach
            
            @foreach($courses as $coursess)
            <div style="position: relative; top:-150px">
                  <h3>Agrega una recomendacion</h3>
                  @if (count($errors) > 0)
            <div class="alert alert-danger">
                  <strong> Error! </strong> Reviseloscampos
                  obligatorios.<br><br>
                  <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                  </ul>
            </div>
            @endif
            @if(Session::has('success'))
            <div class="alert alert-info">
                  {{Session::get('success')}}
            </div>
            @endif
                  <form action="{{route('calification')}}" method="POST" role="form">

                        {{ csrf_field() }}
                        <input type="hidden" name="course_id" value="{{$coursess->id}}">
                        <label for="">Selecciona una opcion</label>
                        <select class="form-group form-control" name="recommend">
                              <option value="Recomiendo">Recomendado</option>
                              <option value="No recomiendo">No recomendado</option>
                        </select>
                        <label for="">Comentario</label>
                        <input name="comment" type="text" class="form-group form-control" placeholder="Comentario">
                        <input class="btn btn-primary form-group" type="submit" value="Guardar recomendacion">
                  </form>
            </div>
            @endforeach
            @foreach($califications as $cual)
            <div style="position: relative; top:-100px" class="">

                  <div class="commentary">
                        <a target="_blank" href="{{route('user_profile',$cual->id)}}"><img src="{{asset('images/'.$cual->avatar)}}" /></a>
                        <a style="color: black; text-decoration: none" target="_blank" href="{{route('user_profile',$cual->id)}}">
                              <h5>{{$cual->name}}</h5>
                        </a>
                        <h6>{{$cual->recomend}}</h6>
                        <div class="description">
                              <h10>{{$cual->comment}}</h10>
                        </div>
                        <br></br>
                  </div>
            </div>
            @endforeach

</section>
@endsection