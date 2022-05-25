@extends('layouts.app')

@section('content')
<div class="container">
    <div class="btn-group" role="group">
        <a href="{{ route('dar_adopcion.create') }}" type="button" class="btn btn-success">Dar en adopcion</a>
    </div>
    <div class="row justify-content-center">
        @foreach ($mascotas as $mascota)
            <div class="card-body">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/mascotas/'.$mascota->foto) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Mis Datos</h5>
                    <p class="card-text">
                            <li>
                                <a>Especie: </a>
                                <span>{{ $mascota->especie }}</span>
                            </li>
                            <li>
                                <a>F. Nacimiento:</a>
                                <span> {{ $mascota->f_nacimiento }} </span>
                            </li>
                            <li>
                                <a>Sexo:</a>
                                <span> {{ $mascota->sexo }} </span>
                            </li>
                            <li>
                                <a>Tamaño:</a>
                                <span>{{ $mascota->tamaño }}</span>
                            </li>
                            <li>
                                <a>Peso:</a>
                                <span>{{ $mascota->peso }}</span>
                            </li>
                            <li>
                                <a>Nombre</a>
                                <span>{{ $mascota->nombre }}</span>
                            </li>
                        </ul>
                    </p>
                        <div class="col-sm-12 col-xs-12">
                            <a href="{{ route('dar_adopcion.show', $mascota->id) }}" class="btn btn-info mb-2" type="button"><span class="glyphicon glyphicon-step-backward"></span>&nbsp;Ver</a>
                            <a href="{{ route('dar_adopcion.edit', $mascota->id) }}" class="btn btn-warning mb-2" type="button"><span class="glyphicon glyphicon-step-backward"></span>&nbsp;Actualizar</a>
                            <form action="{{ route('dar_adopcion.destroy',$mascota->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-secondary mb-2">Dar baja</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</div>
@endsection
