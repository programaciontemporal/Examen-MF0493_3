@extends('layouts.app')

@section('title', 'Detalles del Empleado')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Detalles del Empleado</h5>
                            <div class="btn-group">
                                <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-sm btn-outline-light">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                                <a href="{{ route('empleados.index') }}" class="btn btn-sm btn-outline-light">
                                    <i class="bi bi-arrow-left"></i> Volver
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-4 text-center">
                                <div class="bg-light rounded-circle p-4 mb-2 mx-auto" style="width: 120px; height: 120px;">
                                    <i class="bi bi-person-fill" style="font-size: 3rem; color: #6c757d;"></i>
                                </div>
                                <h4 class="mb-0">{{ $empleado->nombre }}</h4>
                            </div>
                            <div class="col-md-8">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th width="30%">Email:</th>
                                            <td>{{ $empleado->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>DNI:</th>
                                            <td>{{ $empleado->dni }}</td>
                                        </tr>
                                        <tr>
                                            <th>Departamento:</th>
                                            <td>{{ $empleado->departamento->nombre ?? 'Sin departamento' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Fecha de creación:</th>
                                            <td>{{ $empleado->created_at->format('d/m/Y H:i') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Última actualización:</th>
                                            <td>{{ $empleado->updated_at->format('d/m/Y H:i') }}</td>
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
