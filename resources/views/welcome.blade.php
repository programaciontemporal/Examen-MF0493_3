@extends('layouts.app')

@section('title', 'Gestión de Empleados - Inicio')
@section('header-title', 'Examen MF0493_3 - Antonio García Salinas')

@section('content')
    <!-- Hero -->
    <section class="hero text-center grabado">
        <div class="container">
            <h1 class="display-4 fw-bold">Gestione sus empleados con eficiencia</h1>
            <p class="lead">Una solución sencilla y efectiva para administrar empleados y departamentos.</p>
        </div>
    </section>

    <section class="py-5 bg-light" id="caracteristicas">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Gestión eficiente y organizada</h2>
                <p class="text-muted">Administra tu equipo y estructura con facilidad</p>
            </div>

            <div class="row justify-content-center g-4">
                <!-- Tarjeta Empleados -->
                <div class="col-md-6 col-lg-5">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="mb-3 fs-1 text-center">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h5 class="card-title fw-bold">Empleados</h5>
                            <p class="card-text text-muted">
                                Gestiona toda la información de tus empleados de forma clara y estructurada. Alta,
                                edición y control total del personal.
                            </p>
                            <div class="text-center">
                                <a href="{{ route('empleados.index') }}" class="btn btn-dark mt-2">Ir a Empleados</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta Departamentos -->
                <div class="col-md-6 col-lg-5">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="mb-3 fs-1 text-center">
                                <i class="bi bi-building"></i>
                            </div>
                            <h5 class="card-title fw-bold">Departamentos</h5>
                            <p class="card-text text-muted">
                                Crea y organiza los departamentos para mantener un control jerárquico y funcional de tu
                                organización.
                            </p>
                            <div class="text-center">
                                <a href="{{ route('departamentos.index') }}" class="btn btn-dark mt-2">Ir a
                                    Departamentos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
