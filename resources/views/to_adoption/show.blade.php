@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="row panel">
                <div class="col-md-4 bg_blur ">
                    <a href="{{ route('adoptar.store') }}" class="btn btn-success follow_btn hidden-xs">Adoptar</a>
                </div>
                <div class="col-md-8  col-xs-12">
                    <img src="{{ asset('images/mascotas/'.$mascota->foto) }}" class="img-thumbnail picture hidden-xs" />
                    {{--  <img src="{{ asset('images/mascotas/'.$mascota->foto) }}" class="img-thumbnail visible-xs picture_mob" />  --}}
                <div class="header">
                        <h1>{{ $mascota->raza }} {{ $mascota->sexo }} - {{ $mascota->nombre }}</h1>
                        <h4>{{ $mascota->especie }}</h4>
                        <span>{{ $mascota->descripcion }}</span>
                </div>
                </div>
            </div>

            <div class="row nav">
                <div class="col-md-4"></div>
                <div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">
                    <div class="col-md-4 col-xs-4 well"><i class="fa fa-weixin fa-lg"></i> Peso:   {{ $mascota->peso }}</div>
                    <div class="col-md-4 col-xs-4 well"><i class="fa fa-heart-o fa-lg"></i>Tamaño: {{ $mascota->tamaño }}</div>
                    <div class="col-md-4 col-xs-4 well"><i class="fa fa-thumbs-o-up fa-lg"></i>Edad: {{ $mascota->edad }}</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
