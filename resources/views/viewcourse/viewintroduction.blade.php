@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/viewimage.css') }}">
<link rel="stylesheet" href="{{ asset('css/viewintroduction.css') }}">

<link rel="stylesheet" href="{{ asset('css/coursessummary.css') }}">
<div class="row no-gutters bg-light">
    <div class="col-xl-8 col-lg-12">
        <div class="container align-content-center p-6">
            <div>
                @foreach($course as $cour)
                <h3>{{$cour->title}}</h3>
            </div>
        </div>
    </div>
</div>
<div class="row no-gutters bg-light">
    <div class="col-xl-8 col-lg-12">
        <div class="container align-self-center p-6">
            <div class="viewimg">
                <img src="{{asset('images/'.$cour->path)}}" />
            </div>
            <div class="viewintro">
                <h5>Descripcion</h5>
                <p class="text-muted text-justify">{{$cour->description}}</p>
                <a class="btn form-control" href="{{ route('viewcoursevideo', $cour->id)}}">Iniciar curso</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10 mx-auto p-4">
        <div class="container align-self-center p-6">
            <h6 class="text-center font-weight-bold">Resumen del curso</h6>
            <h6 class="text-center font-weight-bold">Videos del curso</h6>
            <div>
                @foreach($videos as $videoss)
                <p class="text-center">
                    <!--<img width="30px" height="30px" class="circulo" src="https://cdn4.iconfinder.com/data/icons/essential-app-2/16/record-round-circle-dot-512.png" />-->
                    <!--<small class="number">1</small>-->
                    <a class="text-muted">{{$videoss->title}}</a>
                    <!--<img width="30px" height="30px" src="https://cdn1.iconfinder.com/data/icons/hawcons/32/699008-icon-22-eye-512.png" />-->
                </p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection