@extends('layouts.app')


@section('content')

<link rel="stylesheet" type="text/css" href="css/admincourses.css">
<link rel="stylesheet" type="text/css" href="css/formplancourse.css">
<link rel="stylesheet" type="text/css" href="css/userscourses.css">
<div>
    <div class="row no-gutters res">
        <h2 class="admintext">Administrador</h2>
    </div>
    <br />
    <div class="row no-gutters bg-light">
        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10 mx-auto p-4">
            <div class="container align-content-center p-6">
                <div>
                    <div class="cardplan">
                        <label>Planifica tu curso</label><br></br>
                        <input type="radio" name="perfil" value="blue" /> Progreso <br />
                        <input type="radio" name="biblioteca" value="blue" /> Usuarios que compraron el curso <br />
                        <input type="radio" name="sesión" value="blue" /> Progreso del usuario <br />
                        <input type="radio" name="sesión" value="blue" /> Favoritos del usuario <br />
                        <input type="radio" name="sesión" value="blue" /> Informacion del curso <br />
                        <input type="radio" name="sesión" value="blue" /> Biblioteca de cursos <br />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="container align-self-center p-6">
                <div class="cardcourses">
                    <div class="headercardcourses">
                        <h3>Usuarios que compraron</h3>
                    </div>
                    <div class="row">
                        <div class="usercourse">
                            <img src="https://images.pexels.com/photos/2078265/pexels-photo-2078265.jpeg" />
                            <h4>Juanito Hernandez</h4>
                        </div>
                        <div class="usercourse">
                            <img src="https://images.pexels.com/photos/2078265/pexels-photo-2078265.jpeg" />
                            <h4>Rafael Hernandez</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection