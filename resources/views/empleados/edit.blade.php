@extends('layouts.app')

@section('title', 'Editar Empleado')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Editar Empleado</h2>
            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Volver</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $empleado->nombre }}" class="form-control" placeholder="Nombre">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ $empleado->email }}" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="dni">DNI:</label>
            <input type="text" name="dni" value="{{ $empleado->dni }}" class="form-control" placeholder="DNI">
        </div>

        <div class="form-group">
            <label for="departamento_id">Departamento:</label>
            <select name="departamento_id" class="form-control">
                <option value="">Seleccione un Departamento</option>
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->id }}" @selected($empleado->departamento_id == $departamento->id)>
                        {{ $departamento->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
