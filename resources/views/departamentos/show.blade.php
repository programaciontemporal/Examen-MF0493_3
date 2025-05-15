@extends('layouts.app')

@section('title', 'Mostrar Departamento')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar Departamento</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('departamentos.index') }}"> Volver</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $departamento->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ubicación:</strong>
                {{ $departamento->ubicacion }}
            </div>
        </div>
    </div>
</div>
@endsection
