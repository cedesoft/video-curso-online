@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/viewimage.css') }}">
<link rel="stylesheet" href="{{ asset('css/viewintroduction.css') }}">
<link rel="stylesheet" href="{{ asset('css/viewresources.css') }}">
<link rel="stylesheet" href="{{ asset('css/viewbtnvideo.css') }}">

<link rel="stylesheet" href="{{ asset('css/coursessummary.css') }}">
<div class="row no-gutters bg-light">
    <div class="col-lg-12">
        <div class="container align-content-center p-6">
            <div>
                @foreach($video as $vide)
                <h3>{{$vide->title}}</h3>
            </div>
        </div>
    </div>
</div>
<div class="row no-gutters bg-light">
    <div class="col-lg-12">
        <div class="container align-self-center p-6">
            <div class="viewimg">
                <video width="100%" height="60%" autoPlay controls src="{{asset('videos/'.$vide->path)}}" poster="{{asset('images/'.$vide->path_image)}}">
            </div>
            <div class="viewintro">
                <h5>Introduccion</h5>
                <p class="text-muted text-justify">{{$vide->description}}</p>
                    <div class="viewre">
                        @endforeach
                        @foreach($files as $file)
                <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/699833-icon-70-document-file-pdf-512.png"/>
                    <a download class="text-muted" href="{{asset('files/'.$file->path)}}">Archvio adicional</a>
                    @endforeach
                </div>
                <div>
                <a class="btn btnfirst form-group" href="#">Marcar como finlizado</a>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="row no-gutters bg-light">
    <div class="col-lg-12">
        <div class="container">
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
            @foreach($video as $vid)
            <form action="{{ route('comment')}}" method="post" role="form">
            {{ csrf_field() }}
                <input type="hidden" name="video_id" id="video_id" value="{{$vid->id}}">
                <label for="">Comentarios</label>
                <input class="form-group form-control" type="text" name="comment" id="comment" placeholder="Agrega el comentario">
                <input class="btn btn-primary form-group" type="submit" value="Agregar comentario">
            </form>
            @endforeach
        </div>
    </div>
</div>
<div class="row no-gutters bg-gray">
    <div class="col-lg-12">
        <div class="container">
            @foreach($comments as $comment)
            <a target="_blank" href="{{route('user_profile',$comment->id)}}"><img width="60px" height="60px" style="border-radius: 100%;" src="{{asset('images/'.$comment->avatar)}}"></a>
            <a target="_blank" href="{{route('user_profile',$comment->id)}}"><p style="position: relative; left:80px; top:-40px" class="text-muted">{{$comment->name}}</p></a>
            <p style="position: relative; top:-20px" class="c">{{$comment->comment}}</p>
        <hr>
        @endforeach
        </div>
    </div>
</div>
@endsection