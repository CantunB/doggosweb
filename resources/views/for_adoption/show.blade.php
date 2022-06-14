@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mb-2">
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">{{ $mascota->nombre }}</strong>
                        <h3 class="mb-0">{{ $mascota->especie }}: {{ $mascota->raza}}</h3>
                        <div class="mb-1 text-muted">{{ $mascota->f_nacimiento }}</div>
                        <p class="card-text mb-auto">{{ $mascota->descripcion }}</p>
                        <div class="row nav">
                                <div class="col-md-4 col-xs-4 well"><i class="fa fa-weixin fa-lg"></i> Peso:   {{ $mascota->peso }}</div>
                                <div class="col-md-4 col-xs-4 well"><i class="fa fa-heart-o fa-lg"></i>Tamaño: {{ $mascota->tamaño }}</div>
                                <div class="col-md-4 col-xs-4 well"><i class="fa fa-thumbs-o-up fa-lg"></i>Edad: {{ $mascota->edad }}</div>
                        </div>
                        {{--  <a href="{{ route('adoptar.edit', $mascota->id) }}" class="btn btn-success follow_btn hidden-xs">Adoptar</a>  --}}
                        <a onclick="history.back()" class="btn btn-secondary follow_btn hidden-xs mt-4 mb-2">Regresar</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{ asset('/images/mascotas/'.$mascota->foto) }}" class="bd-placeholder-img" width="200" height="300" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
