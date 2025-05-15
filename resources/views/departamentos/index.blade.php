{{-- Extiende el layout base --}}
@extends('layouts.app')

{{-- Define el título específico para esta página --}}
@section('title', 'Departamentos - Examen MF0493_3')

{{-- Define el contenido de la sección 'content' --}}
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Departamentos</h2>
            </div>
            <div class="pull-right">
                {{-- Botón para volver a la página de inicio --}}
                <a class="btn btn-secondary" href="{{ url('/') }}"> Inicio</a>
                {{-- Botón para crear un nuevo departamento --}}
                <a class="btn btn-success" href="{{ route('departamentos.create') }}"> Crear Nuevo Departamento</a>
            </div>
        </div>
    </div>

    {{-- Mostrar mensajes de sesión --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            <p>{{ $message }}</p>
        </div>
    @endif

    {{-- Tabla para listar departamentos --}}
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th width="280px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            {{-- Iterar sobre la colección de departamentos --}}
            @foreach ($departamentos as $departamento)
                <tr>
                    <td>{{ $departamento->id }}</td>
                    <td>{{ $departamento->nombre }}</td>
                    <td>{{ $departamento->ubicacion }}</td>
                    <td>
                        {{-- Formulario para eliminar (usando método DELETE) --}}
                        <form action="{{ route('departamentos.destroy', $departamento->id) }}" method="POST">
                            {{-- Enlace para mostrar detalles del departamento --}}
                            <a class="btn btn-info btn-sm"
                                href="{{ route('departamentos.show', $departamento->id) }}">Mostrar</a>
                            {{-- Enlace para editar el departamento --}}
                            <a class="btn btn-primary btn-sm"
                                href="{{ route('departamentos.edit', $departamento->id) }}">Editar</a>
                            @csrf {{-- Token CSRF para protección --}}
                            @method('DELETE') {{-- Especifica el método HTTP como DELETE --}}
                            {{-- Botón para eliminar --}}
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
