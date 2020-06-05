@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Modifica tu curso</h1>
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
    <form action="{{ route('course.update', $course->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
        <label for="">Selecciona la nueva imagen de tu curso</label>
          <input class="form-group form-control" type="file" name="path" id="path" accept="image/x-png,image/gif,image/jpeg" enctype="multipart/form-data">
        <input type="text" name="title" id="title" class="form-control form-group" value="{{$course->title}}">
        <input type="text" name="description" id="description" class="form-control form-group" value="{{$course->description}}">
        <input type="text" name="actual_price" id="actual_price" class="form-control form-group" value="{{$course->actual_price}}">
        <input type="text" name="previous_price" id="previous_price" class="form-control form-group" value="{{$course->previous_price}}">
        <input type="submit" class="btn btn-primary" value="Modificar">
    </form>
</div>
<div class="container">
    <h1>Registra videos en tu curso</h1>
    <form action="{{route('uploadvideo')}}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="">Selecciona el video de tu curso</label>
        <input class="form-group form-control" accept="video/mp4," class="form-group" name="path" id="path" type="file">
        <label for="">Selecciona la miniatura de tu video</label>
        <input class="form-group form-control" accept="image/x-png,image/gif,image/jpeg" class="form-group" name="image" id="image" type="file">
        <input class="form-control form-group" type="text" name="title" id="title" placeholder="ingresa un titulo">
        <input class="form-control form-group" type="text" name="description" id="description" placeholder="Ingresa una descripcion">
        <input class="form-group form-control" type="hidden" name="course_id" id="course_id" value="{{$course->id}}">
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>

@endsection