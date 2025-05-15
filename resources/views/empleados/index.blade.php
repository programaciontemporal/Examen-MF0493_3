@extends('layouts.app')

@section('title', 'Lista de Empleados')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header" style="background: var(--primary-color); color: white;">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 style="margin: 0; font-size: 1.5rem;">Lista de Empleados</h3>
                    <a href="{{ route('empleados.create') }}" class="btn" style="background: var(--success-color);">
                        <i class="fas fa-plus"></i> Nuevo Empleado
                    </a>
                </div>
            </div>

            <div>
                @if ($message = Session::get('success'))
                    <div
                        style="padding: 12px; background: var(--success-color); color: white; border-radius: 4px; margin-bottom: 20px;">
                        <p style="margin: 0;">{{ $message }}</p>
                    </div>
                @endif

                <div>
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="background-color: #f2f2f2;">
                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #ddd;">ID</th>
                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #ddd;">Nombre</th>
                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #ddd;">Email</th>
                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #ddd;">DNI</th>
                                <th style="padding: 12px 15px; text-align: left; border-bottom: 2px solid #ddd;">
                                    Departamento</th>
                                <th
                                    style="padding: 12px 15px; text-align: center; border-bottom: 2px solid #ddd; width: 150px;">
                                    Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $empleado)
                                <tr style="border-bottom: 1px solid #ddd;">
                                    <td style="padding: 12px 15px;">{{ $empleado->id }}</td>
                                    <td style="padding: 12px 15px;">{{ $empleado->nombre }}</td>
                                    <td style="padding: 12px 15px;">{{ $empleado->email }}</td>
                                    <td style="padding: 12px 15px;">{{ $empleado->dni }}</td>
                                    <td style="padding: 12px 15px;">{{ $empleado->departamento->nombre ?? 'N/A' }}</td>
                                    <td style="padding: 12px 15px; text-align: center;">
                                        <div style="display: flex; justify-content: center; gap: 8px;">
                                            <a href="{{ route('empleados.show', $empleado->id) }}"
                                                style="color: var(--primary-color); padding: 5px 8px; border-radius: 4px;"
                                                title="Mostrar">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('empleados.edit', $empleado->id) }}"
                                                style="color: var(--warning-color); padding: 5px 8px; border-radius: 4px;"
                                                title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    style="background: none; border: none; color: var(--danger-color); padding: 5px 8px; border-radius: 4px; cursor: pointer;"
                                                    title="Eliminar"
                                                    onclick="return confirm('¿Estás seguro de eliminar este empleado?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
