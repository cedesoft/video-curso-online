@extends('layouts.app')


@section('content')

<link rel="stylesheet" type="text/css" href="css/admincourses.css">
<link rel="stylesheet" type="text/css" href="css/formplancourse.css">
<link rel="stylesheet" type="text/css" href="css/Card.css">
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
                        <input type="radio" name="perfil" value="blue" /> Perfil <br />
                        <input type="radio" name="biblioteca" value="blue" /> Biblioteca de curso <br />
                        <input type="radio" name="sesión" value="blue" /> Cerrar sesión <br />
                        <br></br>
                        <button class="buttonsave">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="container align-self-center p-6">
                <div class="cardcourses">
                    <div class="headercardcourses">
                        <h3>Biblioteca de cursos</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <img src="https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg" />
                                </div>
                                <div class="card-content">
                                    <h1>Curso de finanzas</h1>
                                    <span>Impartido por : Jesus Ramirez</span>
                                    <p>Curso donde aprenderas como hacer finanzas</p>
                                    <a href="">Ver mas</a><button class="">Añadir al carrito</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                                <div class="card-header">
                                    <img src="https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg" />
                                </div>
                                <div class="card-content">
                                    <h1>Curso de finanzas</h1>
                                    <span>Impartido por : Jesus Ramirez</span>
                                    <p>Curso donde aprenderas como hacer finanzas</p>
                                    <a href="">Ver mas</a><button class="">Añadir al carrito</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                                <div class="card-header">
                                    <img src="https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg" />
                                </div>
                                <div class="card-content">
                                    <h1>Curso de finanzas</h1>
                                    <span>Impartido por : Jesus Ramirez</span>
                                    <p>Curso donde aprenderas como hacer finanzas</p>
                                    <a href="">Ver mas</a><button class="">Añadir al carrito</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                                <div class="card-header">
                                    <img src="https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg" />
                                </div>
                                <div class="card-content">
                                    <h1>Curso de finanzas</h1>
                                    <span>Impartido por : Jesus Ramirez</span>
                                    <p>Curso donde aprenderas como hacer finanzas</p>
                                    <a href="">Ver mas</a><button class="">Añadir al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection