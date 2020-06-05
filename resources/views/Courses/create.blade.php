@extends('layouts.app')

@section('content')
<section>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/uploadCourse2.css')}}">
  
  <div class="headeruploadcourse2">
      <h1>Subir Curso</h1>
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
    </div>
  <div class="container">
    <div class="formuploadcard2">
      <div class="formupload2">
        <h4>Programa</h4>
      </div>
      <div class="texto1">
        <form action="{{ route('course.store') }}" method="POST" role="form" enctype="multipart/form-data">
          {{ csrf_field() }}
          <label for="">Selecciona la imagen de tu curso</label>
          <input class="form-group form-control" type="file" name="path" id="path" accept="image/x-png,image/gif,image/jpeg">
          <input name="title" id="title" type="text" placeholder="titulo" class="form-group form-control">
          <input name="description" id="description" type="text" placeholder="descripcion" class="form-group form-control">
          <input name="actual_price" id="actual_price" type="text" placeholder="precio" class="form-group form-control">
          <input type="submit" class="btn btn-primary" value="guardar">
        </form>
      </div>
    </div>
  </div>

  </div>
  </div>
  </div>

</section>
@endsection