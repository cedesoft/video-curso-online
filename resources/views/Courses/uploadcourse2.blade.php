@extends('layouts.app')

@section('content')
<section>
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
            <h1>Lista de cursos</h1>
            <table class="table table-striped">
                <thead>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Administrar</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @foreach($courses as $curso)
                    <tr>
                        <td>{{$curso->title}}</td>
                        <td>{{$curso->description}}</td>
                        <td><a class="btn btn-secondary" href="{{action('CourseController@edit', $curso->id)}}">Administrar</a></td>
                        <td>
                            <form action="{{action('CourseController@destroy', $curso->id)}}" method="POST">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$courses->links()}}
    </div>
</section>
@endsection