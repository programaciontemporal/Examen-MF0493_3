@extends('layouts.app')

@section('title', 'Editar Departamento')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Editar Departamento: {{ $departamento->nombre }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('departamentos.update', $departamento->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                        id="nombre" name="nombre" value="{{ old('nombre', $departamento->nombre) }}"
                                        required>
                                    @error('nombre')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="ubicacion" class="form-label">Ubicación</label>
                                    <input type="text" class="form-control @error('ubicacion') is-invalid @enderror"
                                        id="ubicacion" name="ubicacion"
                                        value="{{ old('ubicacion', $departamento->ubicacion) }}" required>
                                    @error('ubicacion')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-4 d-flex justify-content-between">
                                <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left me-1"></i> Volver
                                </a>
                                <button type="submit" class="btn btn-dark">
                                    <i class="bi bi-save me-1"></i> Actualizar Departamento
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
