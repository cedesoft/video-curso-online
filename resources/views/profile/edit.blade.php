@extends('layouts.app')


@section('content')
@if (Session::has('message'))
 <div class="text-danger">
   {{Session::get('message')}}
 </div>
<section>
@endif

  <link rel="stylesheet" type="text/css" href="{{ asset('css/edit_profile.css') }}">
  @if($profile->count())
  @foreach($profile as $prof)
  <div class="headercontent">
    <div class="headerimage">
      <img src="{{ asset('images/'.$prof->avatar) }}" />
      <h2>{{$prof->name}}</h2>
      <h4>{{$prof->email}}</h4>
      <p>Usuario desde Febrero de 2019</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="form1">
            <div class="cardn">
              <div class="form">
                <h3>APARIENCIA</h3>
              </div>
              <div class="cardcontent">
                <form action="{{ route('profile.update', $prof->profile_id) }}" method="POST" role="form" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input name="_method" type="hidden" value="PATCH">
                  <img src="{{ asset('images/'.$prof->avatar) }}"></img>
                  <small>imagen de usuario (600 * 600 recomendado)</small>
                  <div class="formabout">
                    <textarea name="about" id="about" class="form-group form-control" placeholder="Cuentanos sobre ti">{{$prof->about}}</textarea>
                  </div>
                  <div class="div_file">
                    <input class="btn_examinar" name="avatar" id="avatar" accept="image/x-png,image/gif,image/jpeg" type="file" size="150" maxlength="150"></input>
                  </div>
                  <button class="btn" type="submit">Guardar cambios</button>
                </form>

              </div>

            </div>
          </div>


          <div class="form2">
            <div class="cardnew">
              <div class="formnew">
                <h3>SOBRE TI</h3>
              </div>
              <div class="formc">
                <form action="{{ route('updatename', $prof->id) }}" method="POST" role="form" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input name="_method" type="hidden" value="PUT">
                  <div class="formname">
                    <input name="name" id="name" type="text" class="form-control form-group" placeholder="Nombre" value="{{$prof->name}}"></input>
                  </div>
                  <div class="formbutton">
                    <button class="btn form-group">Guardar Cambios</button>
                  </div>
                </form>

              </div>

            </div>
          </div>

          <div class="form4">
            <div class="cardemail">
              <div class="formnewemail">
                <h3>CORREO ELECTRONICO (Puedes cambiar tu correo electronico) </h3>
              </div>
              <div class="formcemail">
                <form action="{{ route('updateemail') }}" method="POST" role="form" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input name="_method" type="hidden" value="PUT">
                  <div class="formememail">
                    <input name="newemail" id="email" type="email" class="form-control" placeholder="Correo electronico nuevo"></input><br>
                    <label class="form-group bg-danger">Es necesario ingresar la contraseña para realizar los cambios</label>
                  </div>
                  <div class="formempass">
                    <input name="mypassword" id="password" type="password" class="form-group form-control" placeholder="Contraseña"></input>
                  </div>
                  <div class="formembtn">
                    <button class="btn" type="submit">Guardar cambios</button>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <div class="form3">
            <div class="cardpass">
              <div class="formnewpass">
                <h3>CONTRASEÑA(Puedes cambiar tu contraseña)</h3>
              </div>
              <div class="formcpass">
              <form action="{{ route('updatepassword') }}" method="POST" role="form">
                <div class="formpassnow">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PUT">
                    <input name="mypassword" type="password" class="form-control" placeholder="Contraseña" /><br>
                    <label class="form-group bg-danger">Es necesario ingresar la contraseña para realizar los cambios</label>
                </div>
                <div class="formpasswordnew">
                  <input name="password" type="password" class="form-control form-group" placeholder="Nueva contraseña" />
                </div>
                <div class="formpasscon">
                  <input name="password_confirmation" type="password" class="form-control form-group" placeholder="Repetir Contraseña" />
                </div>
                <div class="formbtnpass">
                  <button class="btn form-group">Guardar cambios</button>
                </div>
                </form>

              </div>
            </div>
          </div>

          @endforeach
          @endif
        </div>
      </div>
    </div>

    <!--  <footer class="page-footer font-small bg-ligth align-content-center">
          <div class="container text-center text-md-left">
            <div class="row">
              <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text text-muted">SECCIONES</h5>

                <ul class="list-unstyled">
                  <li>
                    <a class="text-muted" href="#!">Very long link 1</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Very long link 2</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Very long link 3</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Very long link 4</a>
                  </li>
                </ul>

              </div>
              <hr class="clearfix w-100 d-md-none" />
              <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-muted">INFORMACION</h5>

                <ul class="list-unstyled">
                  <li>
                    <a class="text-muted" href="#!">Link 1</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Link 2</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Link 3</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Link 4</a>
                  </li>
                </ul>

              </div>
              <hr class="clearfix w-100 d-md-none" />
              <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-muted">APPLOGO</h5>

                <ul class="list-unstyled">
                  <li>
                    <a class="text-muted" href="#!">Link 1</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Link 2</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Link 3</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Link 4</a>
                  </li>
                </ul>

              </div>
              <hr class="clearfix w-100 d-md-none" />

              <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-muted">MAS</h5>

                <ul class="list-unstyled">
                  <li>
                    <a class="text-muted" href="#!">Link 1</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Link 2</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Link 3</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Link 4</a>
                  </li>
                </ul>

              </div>
              <hr class="clearfix w-100 d-md-none" />

              <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-muted">SOPORTE</h5>

                <ul class="list-unstyled">
                  <li>
                    <a class="text-muted" href="#!">Link 1</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Link 2</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Link 3</a>
                  </li>
                  <li>
                    <a class="text-muted" href="#!">Link 4</a>
                  </li>
                </ul>

              </div>

            </div>
          </div>
          <div class="footer-copyright py-3">
            Copyright © AppLogo 2020
      <a class="text-muted space" href="#!">Condiciones de uso</a>
            <a class="text-muted space" href="#!">Politicas de uso</a>
            <a class="text-muted space" href="#!">Politicas de cookies</a>
            <a class="space" href="">
              <img class="imgwidth text-muted" src="https://cdn3.iconfinder.com/data/icons/peelicons-vol-1/50/Facebook-512.png" />
            </a>
            <a class="space" href="">
              <img class="imgwidth" src="https://cdn3.iconfinder.com/data/icons/peelicons-vol-1/50/LinkedIn-512.png" />
            </a>
            <a class="space" href="">
              <img class="imgwidth" src="https://cdn3.iconfinder.com/data/icons/peelicons-vol-1/50/Twitter-512.png" />
            </a>
            <a class="space" href="">
              <img class="imgwidth" src="https://cdn3.iconfinder.com/data/icons/peelicons-vol-1/50/YouTube-512.png" />
            </a>
            <a class="space" href="">
              <img class="imgin" src="https://cdn4.iconfinder.com/data/icons/social-icons-6/40/instagram-128.png" />
            </a>
          </div>

        </footer>-->



</section>
@endsection