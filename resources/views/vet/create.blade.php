@extends('layouts.app')
@section('content')
<div class="container">
    <div class="Back">
            <i class="fa fa-arrow-left" onclick="Back()"></i>
    </div>
    <p class="h2 text-center mb-4">Registrar nuevo veterinario</p>
    <form action="{{ route('veterinarios.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="preview text-center">
            <div class="browse-button">
                <i class="fa fa-pencil-alt"></i>
                <input required  name="avatar" type="file" class="dropify" data-height="200" data-default-file="https://www.pngkey.com/png/full/399-3993780_about-vets-choice-d-vet-s.png" />
            </div>
            <span class="Error"></span>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Profesion:</label>
                    <input class="form-control" type="text" name="degree" required/>
                    <span class="Error"></span>
                </div>
            </div>

        </div>
        <div class="row mt-4 mb-4">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nombre:</label>
                    <input class="form-control" type="text" name="nombre" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Ap.Paterno:</label>
                    <input class="form-control" type="text" name="paterno" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Ap.Materno:</label>
                    <input class="form-control" type="text" name="materno" required/>
                    <span class="Error"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Email:</label>
                    <input class="form-control" type="text" name="email" required/>
                    <span class="Error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Experiencia:</label>
                    <input class="form-control" type="text" name="experience" required/>
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
                    <button class="btn btn-success btn-block" type="submit">Registrar veterinario</button>
                    <a onclick="history.back()"  class="btn btn-secondary btn-block"> Cancelar </a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
