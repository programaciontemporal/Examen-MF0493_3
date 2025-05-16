@extends('layouts.app')

@section('title', 'Detalles del Departamento')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Detalles del Departamento</h5>
                            <div class="btn-group">
                                <a href="{{ route('departamentos.edit', $departamento->id) }}"
                                    class="btn btn-sm btn-outline-light">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                                <a href="{{ route('departamentos.index') }}" class="btn btn-sm btn-outline-light">
                                    <i class="bi bi-arrow-left"></i> Volver
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-4 text-center">
                                <div class="bg-light rounded-circle p-4 mb-2 mx-auto" style="width: 120px; height: 120px;">
                                    <i class="bi bi-building" style="font-size: 3rem; color: #6c757d;"></i>
                                </div>
                                <h4 class="mb-0">{{ $departamento->nombre }}</h4>
                            </div>
                            <div class="col-md-8">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th width="30%">Ubicación:</th>
                                            <td>{{ $departamento->ubicacion }}</td>
                                        </tr>
                                        <tr>
                                            <th>Número de empleados:</th>
                                            <td>{{ $departamento->empleados_count ?? 0 }}</td>
                                        </tr>
                                        <tr>
                                            <th>Fecha de creación:</th>
                                            <td>{{ $departamento->created_at->format('d/m/Y H:i') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Última actualización:</th>
                                            <td>{{ $departamento->updated_at->format('d/m/Y H:i') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
