<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Examen MF0493_3 - Antonio García Salinas')</title> {{-- Título dinámico --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Estilo para el hero con imagen de fondo */
        .hero {
            background: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            position: relative;
            color: white;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        /* Animaciones del original */
        .nav-links a {
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--bs-warning);
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
        }

        .btn {
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .social-links a {
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            color: var(--bs-warning);
        }
    </style>
</head>

<body>
    <header class="bg-primary text-white py-4">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-briefcase me-2 fs-4 text-warning"></i>
                        <h1><a href="{{ route('welcome') }}" class="text-white text-decoration-none">Examen MF0493_3 - Antonio García Salinas</a></h1>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="d-flex flex-column align-items-center gap-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-briefcase me-2 text-warning"></i>
                    <span class="h5 mb-0">Examen MF0493_3 - Antonio García Salinas</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
