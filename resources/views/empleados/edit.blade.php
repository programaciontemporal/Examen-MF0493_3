@extends('layouts.app')

@section('title', 'Editar Empleado')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Editar Empleado: {{ $empleado->nombre }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                        id="nombre" name="nombre" value="{{ old('nombre', $empleado->nombre) }}"
                                        required>
                                    @error('nombre')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email', $empleado->email) }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="dni" class="form-label">DNI</label>
                                    <input type="text" class="form-control @error('dni') is-invalid @enderror"
                                        id="dni" name="dni" value="{{ old('dni', $empleado->dni) }}" required>
                                    @error('dni')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="departamento_id" class="form-label">Departamento</label>
                                    <select class="form-select @error('departamento_id') is-invalid @enderror"
                                        id="departamento_id" name="departamento_id">
                                        <option value="">Seleccione un departamento</option>
                                        @foreach ($departamentos as $departamento)
                                            <option value="{{ $departamento->id }}"
                                                {{ old('departamento_id', $empleado->departamento_id) == $departamento->id ? 'selected' : '' }}>
                                                {{ $departamento->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('departamento_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-4 d-flex justify-content-between">
                                <a href="{{ route('empleados.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left me-1"></i> Volver
                                </a>
                                <button type="submit" class="btn btn-dark">
                                    <i class="bi bi-save me-1"></i> Actualizar Empleado
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
