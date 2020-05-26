@extends('layouts.app')

@section('content')
<div class="container">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Administrar
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{route('uploadcourses')}}">Administrar cursos</a>
            <a class="dropdown-item" href="{{route('vide.index')}}">Administra videos</a>
            <a class="dropdown-item" href="{{route('adminfiles.index')}}">Administra documentos</a>
        </div>
    </div>
    <div class="table-responsive">
        <h1>Lista de documentos</h1>
        <table class="table table-striped">
            <thead>
                <th>Video</th>
                <th>Ruta de archivo</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </thead>
            @foreach($files as $file)
            <tbody>
                <tr>
                    <td>{{$file->title}}</td>
                    <td>{{$file->path}}</td>
                    <td><a class="btn btn-secondary" href="{{action('FileController@edit', $file->id)}}">Modificar</a></td>
                    <td>
                        <form action="{{action('FileController@destroy', $file->id)}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Eliminar</span></button>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    {{$files->links()}}
</div>
@endsection