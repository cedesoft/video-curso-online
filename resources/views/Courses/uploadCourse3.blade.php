@extends('layouts.app')

@section('content')
<section>
<link rel="stylesheet" type="text/css" href="css/uploadCourse3.css">
<div class="headeruploadcourse">
          <h1>Subir Curso</h1>
        </div>

        <div class="formuploadcard">
          <div class="formupload">
            <h4>Pagina de inicio del curso</h4>
          </div>
          <div class="label1">
            <label>Titulo del curso</label>
          </div>
          <div class="nameinput">
            <input type="text" class="form-control form-group" />
          </div>
          <div class="label2">
            <label>Subtitulo del curso</label>
          </div>
          <div class="subtituloinput">
            <input type="text" class="form-control form-group" />
          </div>

          <div class="label3">
            <label>Descripcion del curso</label>
          </div>
          <div class="textarea">
            <textarea class="form-group form-control"></textarea>
          </div>

          <div class="label4">
            <label>Informacion basica</label>
          </div>

          <div class="row">
            <div class="col-3">
              <div class="dropdown">

                <button
                  class="btn btn-light   dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                >
                  Español (España)
                </button>
                <div
                  class="dropdown-menu "
                  aria-labelledby="dropdownMenuButton"
                >
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="dropdown">

                <button
                  class="btn btn-light   dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                >
                  Selecciona un nivel
                </button>
                <div
                  class="dropdown-menu "
                  aria-labelledby="dropdownMenuButton"
                >
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </div>

          <div class="label5">
            <label>
              ¿Cuál es el contenido principal que enseñas en el curso?
            </label>
          </div>

          <div class="contenido">
            <input type="text" class="form-control form-group" />
          </div>

          <div class="label6">
            <label>Imagen del curso</label>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="imagenupload">
                <img src="https://cdn2.iconfinder.com/data/icons/pittogrammi/142/32-512.png" />
              </div>
            </div>
            <div class="col-6">
              <div class="btnupload">
                <label>
                  Haz que tu curso destaque con una atractiva imagen de nuestro equipo de diseño basada en tus preferencias y estilo.
                </label>
                <br />
                <label>
                  Directrices importantes: 750 x 422 píxeles, formato .jpg, .jpeg, .gif, o .png y sin texto en la imagen.
                </label>
                <input
                  class="btn_examinar"
                  name="myImage"
                  accept="image/x-png,image/gif,image/jpeg"
                  type="file"
                  size="150"
                  maxlength="150"
                />
              </div>

            </div>
          </div>

        </div>

        <div class="plan">
        <div class="cardplan">
        <label>Planifica tu curso</label><br></br>
        <input type="radio" name="estudiantes" value="blue" /> LLega a tus esudiantes <br />
        <input type="radio" name="programa" value="blue" /> Programa <br />
        <input type="radio" name="paginainicio" value="blue" /> Pagina de inicio de curso <br />
        <input type="radio" name="precio" value="blue" /> Precios<br />
        <input type="radio" name="mensaje" value="blue" /> Mensaje de curso <br />
        <br></br>
        <button class="buttonsave">Guardar</button>
        </div>
      </div>
        </div>

</section>
@endsection