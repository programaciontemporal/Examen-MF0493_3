<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestión de Empleados')</title>
    <!-- Bootstrap 5.3.6 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons 1.11.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    @stack('styles')
    <style>
        body {
            font-family: system-ui, sans-serif;
            box-sizing: border-box;
        }

        html,
        body {
            overflow-x: hidden;
        }

        .hero {
            background: url('https://unsplash.com/photos/YvNiIyGdMfs/download?ixid=M3wxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNzQ3Mzk0MTMzfA&force=true&w=1920n') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 6rem 2rem;
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 768px) {
            .hero {
                padding: 2rem 1rem;
            }
        }

        .feature-card {
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        footer {
            background-color: #212529;
            color: white;
            padding: 2rem 0;
        }

        .grabado {
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            color: #fff;
            background-color: #333;
            letter-spacing: 1px;
        }

        .card {
            max-width: 100%;
            word-break: break-word;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="bg-dark text-white py-2">
        <div class="container text-center">
            <h1 class="h5 mb-0">@yield('header-title', 'Gestión de Empleados')</h1>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <h2 class="h5 fw-bold">CRUD Empleados y Departamentos</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            href="{{ route('welcome') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('empleados*') ? 'active' : '' }}"
                            href="{{ route('empleados.index') }}">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('departamentos*') ? 'active' : '' }}"
                            href="{{ route('departamentos.index') }}">Departamentos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Gestión de Empleados. Proyecto Laravel 12.</p>
        </div>
    </footer>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
