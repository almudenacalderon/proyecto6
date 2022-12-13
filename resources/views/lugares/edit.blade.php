@extends('layouts.master')

@section('content')
    <!-- editar rutina  -->
    <div class="contenedor">
        <h1 style="color: black"> Edita el lugar {{ $id }} </h1>
        </div>
     <!-- crear nuevo lugar  -->
     <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6 contenedor">
           <div class="card contenedor">
                  <div class="card-body contenedor" style="padding:30px">

                     <form action="{{ url('/lugares/create') }}" method="POST">
                        {{method_field('PUT')}}

                         @csrf

                         <div class="form-group">
                            <label for="title" style="color: black">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$lugar['nombre']}}">
                         </div>

                         <div class="form-group">
                             <label for="title" style="color: black">Tipo</label>
                            <input type="text" name="tipo" id="tipo" class="form-control" value="{{$lugar['tipo']}}">
                         </div>

                         <div class="form-group">
                             <label for="title" style="color: black">Ubicaci&oacute;n</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control" value="{{$lugar['ubicacion']}}">
                         </div>

                         <div class="form-group">
                             <label for="title" style="color: black">Imagen</label>
                            <input type="text" name="imagen" id="imagen" class="form-control" value="{{$lugar['imagen']}}">
                         </div>

                         <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="color:black; :8px 100px;margin-top:25px;">
                                Modificar lugar
                            </button>
                         </div>

                     </form>

                  </div>
               </div>
            </div>
         </div>

      @endsection
