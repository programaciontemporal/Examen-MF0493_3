@extends('layouts.app')

@section('title', 'Crear Departamento')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Añadir Nuevo Departamento</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('departamentos.index') }}"> Volver</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>¡Error!</strong> Hay problemas con tus datos de entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('departamentos.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ubicación:</strong>
                    <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </div>

    </form>
</div>
@endsection
