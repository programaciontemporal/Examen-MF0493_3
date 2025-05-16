@extends('layouts.app')

@section('title', 'Listado de Departamentos')

@section('content')
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Lista de Departamentos</h2>
            <a href="{{ route('departamentos.create') }}" class="btn btn-dark">
                <i class="bi bi-building-add me-1"></i> Agregar Departamento
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
                        <th>Ubicación</th>
                        <th class="text-center" style="width: 150px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($departamentos as $departamento)
                        <tr>
                            <td>{{ $departamento->nombre }}</td>
                            <td>{{ $departamento->ubicacion }}</td>
                            <td class="text-center">
                                <div class="d-flex gap-2 justify-content-center">
                                    <!-- Ver -->
                                    <a href="{{ route('departamentos.show', $departamento->id) }}"
                                        class="btn btn-sm btn-outline-primary rounded" title="Ver">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <!-- Editar -->
                                    <a href="{{ route('departamentos.edit', $departamento->id) }}"
                                        class="btn btn-sm btn-outline-success rounded" title="Editar">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <!-- Eliminar -->
                                    <form action="{{ route('departamentos.destroy', $departamento->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger rounded"
                                            title="Eliminar" onclick="return confirm('¿Eliminar departamento?')">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No hay departamentos registrados</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($departamentos->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $departamentos->links() }}
            </div>
        @endif
    </div>
@endsection
