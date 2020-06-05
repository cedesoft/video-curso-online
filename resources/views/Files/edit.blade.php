@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica tu archivo</h1>
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
        <form method="POST" action="{{ route('adminfiles.update', $file->id) }}" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
            <input type="text" name="title" id="title" class="form-control form-group" value="{{$file->title}}">
            <input type="file" accept="application/pdf, .docx," name="path" id="path" class="form-group form-control">
            <input type="submit" class="btn btn-primary" value="Modificar">
        </form>
    </div>

@endsection