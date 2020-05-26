@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/header_profile.css') }}">
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
        @endforeach
        @endif
      </div>
    </div>
  </div>
</div>

@endsection