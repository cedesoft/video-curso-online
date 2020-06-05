@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica tu video</h1>
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
    <form method="POST" action="{{ route('vide.update', $video->id) }}" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
        
        <label for="">Selecciona el nuevo video</label>
        <input type="file" accept="video/mp4, .mkv" class="form-group form-control" name="path" id="path">
        <label for="">Selecciona la nueva miniatura de tu video</label>
        <input class="form-group form-control" accept="image/x-png,image/gif,image/jpeg" class="form-group" name="image" id="image" type="file">
        
        <label for="">Titulo</label>
        <input type="text" class="form-group form-control" name="title" id="title" value="{{$video->title}}">
        <label for="">Descripcion</label>
        <input type="text" class="form-control form-group" name="description" id="description" value="{{$video->description}}">
        <input type="submit" class="btn btn-primary" value="Modificar">
    </form>
</div>
<div class="container">
    
<h1>Agrega documentos a tu videos</h1>
    <form action="{{route('vide.index')}}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input class="form-group form-control" type="text" name="title" id="title" placeholder="Agregale un titulo a tu documento">
        <input class="form-group form-control" type="hidden" name="video_id" id="video_id" value="{{$video->id}}">
        <input accept="application/pdf, .docx," class="form-group form-control" name="path" id="path" type="file">
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>
@endsection