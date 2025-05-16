@extends('layouts.app')

@section('title', 'Listado de Empleados')

@section('content')
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Lista de Empleados</h2>
            <a href="{{ route('empleados.create') }}" class="btn btn-dark">
                <i class="bi bi-person-plus-fill me-1"></i> Agregar Empleado
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>DNI</th>
                        <th>Departamento</th>
                        <th class="text-center" style="width: 150px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->nombre }}</td>
                            <td>{{ $empleado->email }}</td>
                            <td>{{ $empleado->dni }}</td>
                            <td>{{ $empleado->departamento->nombre ?? 'Sin departamento' }}</td>
                            <td class="text-center">
                                <div class="d-flex gap-2 justify-content-center">
                                    <!-- Ver -->
                                    <a href="{{ route('empleados.show', $empleado->id) }}"
                                        class="btn btn-sm btn-outline-primary rounded" title="Ver">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <!-- Editar -->
                                    <a href="{{ route('empleados.edit', $empleado->id) }}"
                                        class="btn btn-sm btn-outline-success rounded" title="Editar">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <!-- Eliminar -->
                                    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger rounded"
                                            title="Eliminar" onclick="return confirm('¿Eliminar empleado?')">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No hay empleados registrados</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($empleados->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $empleados->links() }}
            </div>
        @endif
    </div>
@endsection
