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
    <h1>Lista de videos</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <th>Curso</th>
                <th>Ruta</th>
                <th>Descripcion</th>
                <th>Administrar</th>
                <th>Accion</th>
            </thead>

            @foreach($videos as $video)
            <tbody>
                <tr>
                    <td>{{$video->title}}</td>
                    <td>{{$video->path}}</td>
                    <td>{{$video->description}}</td>
                    <td><a href="{{action('VideoController@edit', $video->id)}}" class="btn btn-secondary">Administrar</a></td>
                    <td>
                        <form action="{{action('VideoController@destroy', $video->id)}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Eliminar</span></button>
                    </td>
                </tr>
            </tbody>

            @endforeach
        </table>
    </div>
    {{$videos->links()}}
</div>

@endsection