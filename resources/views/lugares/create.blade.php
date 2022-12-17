@extends('layouts.master')

@section('content')

    <div class="contenedor">
        <h1 style="color: black"> Crear nuevo lugar </h1>
        </div>
     <!-- crear nuevo lugar  -->
     <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6 contenedor">
           <div class="card contenedor">
                  <div class="card-body contenedor" style="padding:30px">

                     <form action="{{ url('/lugares/create') }}" method="POST">

                         @csrf

                         <div class="form-group">
                            <label for="title" style="color: black">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control">
                         </div>

                         <div class="form-group">
                             <label for="title" style="color: black">Tipo</label>
                            <input type="text" name="tipo" id="tipo" class="form-control">
                         </div>

                         <div class="form-group">
                             <label for="title" style="color: black">Ubicaci&oacute;n</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                         </div>

                         <div class="form-group">
                            <label for="title" style="color: black">Descripci&oacute;n</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control">
                        </div>

                         <div class="form-group">
                             <label for="title" style="color: black">Imagen</label>
                            <input type="text" name="imagen" id="imagen" class="form-control">
                         </div>

                         <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="color:black; :8px 100px;margin-top:25px;">
                                Añadir lugar
                            </button>
                         </div>

                     </form>

                  </div>
               </div>
            </div>
         </div>

      @endsection
