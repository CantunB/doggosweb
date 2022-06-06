@extends('layouts.app')
@section('content')
<div class="container">
    <div class="Back">
         <i class="fa fa-arrow-left" onclick="Back()"></i>
     </div>
     <p class="h2 text-center mb-4">Actualizar informacion de mascota</p>
     <form action="{{ route('mascotas.update', $mascota->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="preview text-center">
            <div class="browse-button">
                <i class="fa fa-pencil-alt"></i>
                <input  name="foto" type="file" class="dropify" data-height="200" data-default-file="{{ asset('/images/mascotas/'.$mascota->foto) }}" />
            </div>
            <span class="Error"></span>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Especie:</label>
                    <input class="form-control" type="text" name="especie" required value="Perro" readonly/>
                    <input class="form-control" type="hidden" name="id_propietario" required value="{{ $mascota->id_propietario }}" readonly/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Raza:</label>
                    <input class="form-control" type="text" name="raza" value="{{ $mascota->raza }}" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Sexo:</label><br>
                    <label><input type="radio" name="sexo" required value="Macho" {{ $mascota->sexo == 'Macho' ?  'checked' : ''}} /> Macho</label>
                    <label><input type="radio" name="sexo" required value="Hembra"{{ $mascota->sexo == 'Hembra' ?  'checked' : ''}}  /> Hembra</label>
                    <span class="Error"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Tamaño:</label>
                    <input class="form-control" type="text" name="tamaño" value="{{ $mascota->tamaño }}" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Peso:</label>
                    <input class="form-control" type="text" name="peso" value="{{ $mascota->peso }}" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Edad:</label>
                    <input class="form-control" type="text" name="edad" value="{{ $mascota->edad }}" required/>
                    <span class="Error"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>Nombre:</label>
                    <input class="form-control" type="text" name="nombre" value="{{ $mascota->nombre }}" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Fecha nacimiento:</label>
                    <input class="form-control" type="date" name="f_nacimiento" value="{{ $mascota->f_nacimiento }}" required/>
                    <span class="Error"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Descripcion:</label>
                    <textarea class="form-control"  name="descripcion" required/> {{ $mascota->descripcion }} </textarea>
                    <span class="Error"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row align-items-center">
                <div class="col">
                    <button class="btn btn-warning btn-block" type="submit">Actualizar informacion</button>
                    <a onclick="history.back()"  class="btn btn-secondary btn-block"> Cancelar </a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
