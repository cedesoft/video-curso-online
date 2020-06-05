@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/header_profile.css') }}">
<link rel="stylesheet" href="{{ asset('css/Card.css') }}">
<div class="headercontent">
  <div class="headerimage">
    @if($profile->count())
    @foreach($profile as $prof)

    <img src="../images/{{$prof->avatar}}" />

    <h2>{{$prof->name}}</h2>
    <h4>{{$prof->email}}</h4>
    <p>Usuario desde febrero de 2019</p>
    <div class="headerlink">
      <a href="" class="">
        Cerrar sesión
      </a>
    </div>
    <div class="headerbutton">
      <a href="{{action('ProfileController@edit', $prof->user_id)}}">Editar perfil</a>
    </div>
  </div>
  <div class="container text-container">
    <div class="row">
      <div class="col-12">
        <h5 class="">Acerca de mi</h5>
        <p class="text-muted text-left">{{$prof->about}}
        </p>

        <h6>Mis cursos comprados</h6>
        <div class="row">
            @if($courses->count())
                  @foreach($courses as $course)
            <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">

                <div class="card-header">
                  <img src="{{asset('images/'.$course->path)}}" />
                </div>
                <div class="card-content">
                  <h1>{{$course->title}}</h1>
                  <p>{{$course->description}}</p>
                <a href="{{route('coursedetail', $course->id)}}">Ver mas</a><a href="{{route('viewcourseintroduction',$course->id)}}">Ver curso</a>
                </div>

              </div>
            </div>

            @endforeach
            @endif
            </div>

        @endforeach
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
