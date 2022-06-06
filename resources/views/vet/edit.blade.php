@extends('layouts.app')
@section('content')
<div class="container">
    <div class="Back">
            <i class="fa fa-arrow-left" onclick="Back()"></i>
    </div>
    <p class="h2 text-center mb-4">Registrar nuevo veterinario</p>
    <form action="{{ route('veterinarios.update', $veterinario->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="preview text-center">
            <div class="browse-button">
                <i class="fa fa-pencil-alt"></i>
                <input name="avatar" type="file" class="dropify" data-height="200" data-default-file="{{ asset('/images/veterinarios/'.$veterinario->avatar) }}" />
            </div>
            <span class="Error"></span>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Profesion:</label>
                    <input class="form-control" type="text" name="degree" value="{{ $veterinario->degree }}" required/>
                    <span class="Error"></span>
                </div>
            </div>

        </div>
        <div class="row mt-4 mb-4">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nombre:</label>
                    <input class="form-control" type="text" name="nombre" value="{{ $veterinario->nombre }}" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Ap.Paterno:</label>
                    <input class="form-control" type="text" name="paterno" value="{{ $veterinario->paterno }}" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Ap.Materno:</label>
                    <input class="form-control" type="text" name="materno" value="{{ $veterinario->materno }}" required/>
                    <span class="Error"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Email:</label>
                    <input class="form-control" type="text" name="email" value="{{ $veterinario->email }}" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Años de experiencia:</label>
                    <input class="form-control" type="text" name="experience" value="{{ $veterinario->experience }}" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Fecha nacimiento:</label>
                    <input class="form-control" type="date" name="f_nacimiento" value="{{ $veterinario->f_nacimiento }}" required/>
                    <span class="Error"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Descripcion:</label>
                    <textarea class="form-control"  name="descripcion" required/>{{ $veterinario->descripcion }}</textarea>
                    <span class="Error"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row align-items-center">
                <div class="col">
                    <button class="btn btn-warning btn-block" type="submit">Actualizar veterinario</button>
                    <a onclick="history.back()"  class="btn btn-secondary btn-block"> Cancelar </a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
