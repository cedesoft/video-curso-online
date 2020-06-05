@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/formlibrary.css') }}">
<link rel="stylesheet" href="{{ asset('css/Card.css') }}">
<div class="headercontentlibrary">
    <h1>Bliblioteca de cursos</h1>
</div>
<br>
<div class="container">
    <div className="row">
        <div class="col-12 col-md-6 col-lg-4 mb-4">
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
        {{-- {{dd($MiCarrito)}} --}}
        @if($courses->count())
        @foreach($courses as $course)

        @if (!array_key_exists($course->id, $MiCarrito != null ? $MiCarrito->items : [] ))

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div style="position:relative; top:30px; left:165px; display:inline-block;">
                            <form action="{{action('FavoriteController@store')}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="course_id" id="course_id" value="{{$course->id}}">
                                <button style="background-color:transparent; border:transparent;filter: invert(0.6) sepia(1) hue-rotate(300deg);"><img width="30px" height="30px" src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-heart-outline-512.png" alt=""></button>
                            </form>
                        </div>
                        <img src="{{asset('images/'.$course->path)}}" />
                    </div>
                    <div class="card-content">
                        <h1>{{$course->title}}</h1>
                        <p>{{$course->description}}</p>
                         <p class="precioCard">$ {{$course->actual_price}} MXN</p>

                        <a href="{{route('coursedetail', $course->id)}} ">Ver mas</a>
                         
                        <div class="boton_card a">
                        <a href="add-to-cart/{{$course->id}}"  >Añadir al carrito</a>
                        </div>
                    </div>

                </div>

            </div>
        @endif
        @endforeach
    </div>
    {{ $courses->links() }}
    @endif
@endsection
