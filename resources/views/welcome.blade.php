@extends('layouts.app') {{-- Extiende la plantilla principal --}}

@section('title', 'Gestión de Empleados y Departamentos') {{-- Título específico para esta página --}}

@section('content') {{-- Define la sección de contenido --}}

    <section class="hero py-5">
        <div class="container py-5">
            <div class="hero-content text-center py-5">
                <h1 class="display-4 fw-bold mb-4">Gestión de Empleados y Departamentos</h1>
                <p class="lead mb-4">Administra de manera eficiente los registros de tu empresa con nuestro sistema CRUD integrado.</p>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 display-5 fw-bold">Accede a los Módulos</h2>
            <div class="row justify-content-center g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header bg-primary text-white text-center py-4">
                            <i class="fas fa-users fa-3x mb-3"></i>
                            <h3 class="card-title">CRUD Empleados</h3>
                        </div>
                        <div class="card-body text-center py-4">
                            <p class="card-text text-muted">Gestiona la información de los empleados de tu empresa: agregar, editar, eliminar y visualizar registros.</p>
                            <a href="{{ route('empleados.index') }}" class="btn btn-outline-primary mt-3"><i class="fas fa-arrow-right me-2"></i> Acceder</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header bg-info text-white text-center py-4">
                            <i class="fas fa-building fa-3x mb-3"></i>
                            <h3 class="card-title">CRUD Departamentos</h3>
                        </div>
                        <div class="card-body text-center py-4">
                            <p class="card-text text-muted">Administra los departamentos de tu organización: crear, modificar y eliminar áreas de trabajo.</p>
                            <a href="{{ route('empleados.index') }}" class="btn btn-outline-info mt-3"><i class="fas fa-arrow-right me-2"></i> Acceder</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection {{-- Finaliza la sección de contenido --}}
