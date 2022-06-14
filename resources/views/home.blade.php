@extends('layouts.app')

@section('content')
<style>
    .active{
        background-color: white
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Por adoptar</a>
                </li>

                @if (Auth::user()->can('veterinarios'))
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Veterinarios</a>
                    </li>
                @endif
                @if (Auth::user()->can('usuarios'))
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Usuarios</a>
                    </li>
                @endif
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-adopciones-tab" data-toggle="pill" href="#pills-adopciones" role="tab" aria-controls="pills-adopciones" aria-selected="true">Adopciones</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="btn-group" role="group">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{ route('mascotas.create') }}" type="button" class="btn btn-sm btn-info mb-4 mt-4">Dar en adopcion</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre </th>
                                <th scope="col">Tamaño</th>
                                <th scope="col">Peso</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Propietario</th>
                                <th scope="col">Estatus</th>
                                <th scope="col">Fecha de registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mascotas as $mascota)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $mascota->nombre }}</td>
                                    <td>{{ $mascota->tamaño }}</td>
                                    <td>{{ $mascota->peso }}</td>
                                    <td>{{ $mascota->edad }}</td>
                                    <td>{{ $mascota->propietario->fullname }}</td>
                                    <td>
                                        @if ($mascota->status === 0)
                                            <span class="badge badge-secondary">En adopcion</span>
                                        @elseif ($mascota->status === 1)
                                            <span class="badge badge-success">Adoptado</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($mascota->from_date)->format('d/m/Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if (Auth::user()->can('veterinarios'))
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="btn-group" role="group">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="{{ route('veterinarios.create') }}" type="button" class="btn btn-sm btn-info mb-4 mt-4">Nuevo veterinario</a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre completo</th>
                                    <th scope="col">Correo </th>
                                    <th scope="col">Fecha de registro</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($veterinarios as $veterinario)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $veterinario->fullname }}</td>
                                        <td>{{ $veterinario->email }}</td>
                                        <td>{{ \Carbon\Carbon::parse($veterinario->from_date)->format('d/m/Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                @if (Auth::user()->can('usuarios'))
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre completo</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Fecha registro</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $usuario->fullname }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>{{ \Carbon\Carbon::parse($usuario->from_date)->format('d/m/Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                <div class="tab-pane fade" id="pills-adopciones" role="tabpanel" aria-labelledby="pills-adopciones-tab">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                @can('Actualizar')
                                    <th scope="col">Nuevo propietario </th>
                                @endcan
                                <th scope="col">Nombre </th>
                                <th scope="col">Tamaño</th>
                                <th scope="col">Peso</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Fecha de adopcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($adopciones as $adopcion)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    @can('Actualizar')
                                        <td>{{ $adopcion->propietario->fullname }}</td>
                                    @endcan
                                    <td>{{ $adopcion->mascota->nombre }}</td>
                                    <td>{{ $adopcion->mascota->tamaño }}</td>
                                    <td>{{ $adopcion->mascota->peso }}</td>
                                    <td>{{ $adopcion->mascota->edad }}</td>
                                    <td>{{ \Carbon\Carbon::parse($adopcion->created_at)->format('d/m/Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
