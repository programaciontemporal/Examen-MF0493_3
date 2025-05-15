{{-- Extiende el layout base --}}
@extends('layouts.app')

{{-- Define el título específico para esta página --}}
@section('title', 'Crear Empleado - Examen MF0493_3')

{{-- Define el contenido de la sección 'content' --}}
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Añadir Nuevo Empleado</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Volver</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <strong>¡Error!</strong> Hay problemas con tus datos de entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre"
                        value="{{ old('nombre') }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="Email"
                        value="{{ old('email') }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>DNI:</strong>
                    <input type="text" name="dni" class="form-control" placeholder="DNI" value="{{ old('dni') }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Departamento:</strong>
                    <select name="departamento_id" class="form-control">
                        <option value="">Seleccione un Departamento</option>
                        @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}"
                                {{ old('departamento_id') == $departamento->id ? 'selected' : '' }}>
                                {{ $departamento->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </div>

    </form>
@endsection
