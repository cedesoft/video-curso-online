@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/formlibrary.css') }}">
<link rel="stylesheet" href="{{ asset('css/Card.css') }}">
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mb-4">
        @if($title->count())
                @foreach($title as $tit)
            <div class="card">
                <div class="card-header">
                    <img src="{{asset('images/'.$tit->path)}}" />
                </div>
                <div class="card-content">
                    <h1>{{$tit->title}}</h1>
                    <span>Impartido por : Jesus </span>
                    <p>{{$tit->description}}</p>
                    <a href="">Ver mas</a><button class="">Añadir al carrito</button>
                </div>
            </div>
            @endforeach
            @else
        </div>
        
    </div>
    <div class="row">
    <img width="70px" height="70px" src="https://cdn1.iconfinder.com/data/icons/ios-11-glyphs/30/search-512.png" alt="">
        <h1>No hay curso con ese nombre</h1>
                    @endif
    </div>
</div>

@endsection