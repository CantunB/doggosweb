@extends('layouts.app')
@section('content')
<div class="container">
    <div class="Back">
         <i class="fa fa-arrow-left" onclick="Back()"></i>
     </div>
     <p class="h2 text-center mb-4">Registrar mascota para adopción</p>
     <form action="{{ route('mascotas.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="preview text-center">
            <div class="browse-button">
                <i class="fa fa-pencil-alt"></i>
                <input required  name="foto" type="file" class="dropify" data-height="100" data-default-file="https://i.pinimg.com/originals/de/1f/b9/de1fb9186aa6f3d67a1b41a86a3375ed.gif" />
            </div>
            <span class="Error"></span>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Especie:</label>
                    <input class="form-control" type="text" name="especie" required value="Perro" readonly/>
                    <input class="form-control" type="hidden" name="id_propietario" required value="{{ Auth::user()->id }}" readonly/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Raza:</label>
                    <input class="form-control" type="text" name="raza" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Sexo:</label><br>
                    <label><input type="radio" name="sexo" required value="Macho" checked /> Macho</label>
                    <label><input type="radio" name="sexo" required value="Hembra" /> Hembra</label>
                    <span class="Error"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Tamaño:</label>
                    <input class="form-control" type="text" name="tamaño" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Peso:</label>
                    <input class="form-control" type="text" name="peso" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Edad:</label>
                    <input class="form-control" type="text" name="edad" required/>
                    <span class="Error"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>Nombre:</label>
                    <input class="form-control" type="text" name="nombre" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Fecha nacimiento:</label>
                    <input class="form-control" type="date" name="f_nacimiento" required/>
                    <span class="Error"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Descripcion:</label>
                    <textarea class="form-control"  name="descripcion" required/></textarea>
                    <span class="Error"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row align-items-center">
                <div class="col">
                    <button class="btn btn-success btn-block" type="submit">Subir para adopcion</button>
                    <a onclick="history.back()"  class="btn btn-secondary btn-block"> Cancelar </a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
