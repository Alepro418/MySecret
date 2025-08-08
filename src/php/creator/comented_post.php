<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Assets/logo v1.3.ico" type="image/x-icon">
    <title>MySecret - Comentarios del Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        a {
            text-decoration: none;
        }
        /* Custom styles for creator profile - you can move these to style.css if preferred */
        .mysecret-profile-header {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('Assets/profile_banner_placeholder.jpg') no-repeat center center/cover; /* Placeholder banner */
            color: white;
            padding: 80px 0;
            text-align: center;
            position: relative;
        }
        .mysecret-profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #ffc107; /* Gold border */
            object-fit: cover;
            margin-top: -75px; /* Pulls avatar up into banner */
            position: relative;
            z-index: 10;
            cursor: pointer;
        }
        .mysecret-profile-avatar-2 {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 0.5px solid #ffc107; /* Gold border */
            object-fit: cover;
            margin-top: -5px; /* Pulls avatar up into banner */
            position: relative;
            z-index: 10;
        }
        .mysecret-stat-card {
            background-color: #212529; /* Darker background for stats */
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }
        .mysecret-stat-card h3 {
            color: #ffc107; /* Gold color for stats */
            font-weight: 700;
        }
        .mysecret-content-grid .card {
            background-color: #212529;
            color: white;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }
        .mysecret-content-grid .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .mysecret-content-grid .card-title {
            color: #ffc107;
        }
        .mysecret-section-title-profile {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #ffc107; /* Gold color for titles */
            margin-bottom: 2rem;
            text-align: center;
        }
        .nav-pills .nav-link {
            color: white;
            border: 1px solid #ffc107;
            margin: 5px;
        }
        .nav-pills .nav-link.active,
        .nav-pills .nav-link:hover {
            background-color: #ffc107;
            color: #212529;
            border-color: #ffc107;
        }
        .mysecret-form-label {
            color: #ffc107;
        }
        .mysecret-form-control {
            background-color: #343a40;
            border-color: #495057;
            color: white;
        }
        .mysecret-form-control:focus {
            background-color: #343a40;
            border-color: #ffc107;
            box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25);
            color: white;
        }

        /* New styles for messages section */
        .mysecret-message-item {
            background-color: #2d3135; /* Slightly lighter dark background for messages */
            border: 1px solid #495057; /* A subtle border */
            border-radius: 8px;
            margin-bottom: 15px; /* Space between messages */
            padding: 15px 20px;
            transition: background-color 0.3s ease;
        }
        .mysecret-message-item:hover {
            background-color: #343a40; /* Darker on hover */
        }
        .mysecret-message-item .mysecret-gold {
            color: #ffc107;
            font-weight: 700;
        }
        .mysecret-message-item .opacity-75 {
            color: rgba(255, 255, 255, 0.9); /* Slightly more opaque for message text */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mysecret-navbar py-3">
        <div class="container-fluid">
            <img src="Assets/logo v1.3.jpg" alt="MySecret Logo" class="mysecret-logo-img">
            <a class="navbar-brand mysecret-logo me-auto" href="index.php">MySecret</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mysecret-gold"><i class="bi bi-list"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" aria-current="page" href="index_fan.php"><i class="bi bi-house-door-fill me-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="my_subscriptions.php"><i class="bi bi-star-fill me-2"></i>My Subscriptions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="messages_fan.php"><i class="bi bi-envelope-fill me-2"></i>Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="notifications.php"><i class="bi bi-bell-fill me-2"></i>Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link active" href="fan_profile.php"><i class="bi bi-person-circle me-2"></i>My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="../../processes/log_out.php"><i class="bi bi-person-x-fill me-2"></i>Log out</a>
                    </li>
                    <li class="nav-item">
                        <img src="Assets/user.jpeg" alt="Creator Avatar" class="mysecret-profile-avatar-2 img-fluid">
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="mysecret-profile-header">
        <div class="container">
            <h1 class="display-3 mysecret-title">Mis Comentarios</h1>
            <p class="lead mysecret-subtitle">Aquí encontrarás todos los comentarios que has dejado en las publicaciones.</p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <div class="text-center mb-5">
            <img src="Assets/user.jpeg" alt="Creator Avatar" class="mysecret-profile-avatar img-fluid">
            <h2 class="mt-3 mb-1 mysecret-section-title">Juanito Alcachofa <i class="bi bi-user mysecret-gold ms-2"></i></h2>
            <p class="text-muted">@aishasofeyofficial</p>
            <p class="lead mysecret-card-text">Revisa el historial de tus interacciones y contribuciones en MySecret.</p>
        </div>

        <hr class="m5 mysecret-divider">

        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">Publicaciones Comentadas</h2>
            <div class="row row-cols-1 g-4">
                <div class="col">
                    <div class="mysecret-message-item d-flex flex-column flex-md-row align-items-start">
                        <img src="https://via.placeholder.com/60x60/FFC107/FFFFFF?text=P1" alt="Post Thumbnail" class="rounded-circle me-md-3 mb-3 mb-md-0" style="width: 60px; height: 60px; object-fit: cover;">
                        <div class="flex-grow-1">
                            <h5 class="mysecret-gold mb-1">Comentario en: "Secretos de la Cocina Mediterránea"</h5>
                            <p class="mb-1 opacity-75">Tu comentario: "¡Excelente receta! La probé y me encantó, especialmente la parte del aceite de oliva. ¡Gracias por compartir!"</p>
                            <small class="text-muted">Por @ChefMaria - Hace 3 horas</small>
                            <div class="mt-2">
                                <a href="#" class="btn btn-sm mysecret-btn-outline me-2"><i class="bi bi-eye-fill me-2"></i>Ver Publicación</a>
                                <button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i> Editar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="mysecret-message-item d-flex flex-column flex-md-row align-items-start">
                        <img src="https://via.placeholder.com/60x60/20c997/FFFFFF?text=P2" alt="Post Thumbnail" class="rounded-circle me-md-3 mb-3 mb-md-0" style="width: 60px; height: 60px; object-fit: cover;">
                        <div class="flex-grow-1">
                            <h5 class="mysecret-gold mb-1">Comentario en: "Guía Definitiva para Programadores Principiantes"</h5>
                            <p class="mb-1 opacity-75">Tu comentario: "Muy útil para quienes estamos empezando. Me ayudó a entender mejor los conceptos básicos de Python."</p>
                            <small class="text-muted">Por @CodeMaster - Hace 1 día</small>
                            <div class="mt-2">
                                <a href="#" class="btn btn-sm mysecret-btn-outline me-2"><i class="bi bi-eye-fill me-2"></i>Ver Publicación</a>
                                <button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i> Editar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="mysecret-message-item d-flex flex-column flex-md-row align-items-start">
                        <img src="https://via.placeholder.com/60x60/007bff/FFFFFF?text=P3" alt="Post Thumbnail" class="rounded-circle me-md-3 mb-3 mb-md-0" style="width: 60px; height: 60px; object-fit: cover;">
                        <div class="flex-grow-1">
                            <h5 class="mysecret-gold mb-1">Comentario en: "Fitness en Casa: Rutina para Principiantes"</h5>
                            <p class="mb-1 opacity-75">Tu comentario: "¡Esta rutina es perfecta para mí! Me encanta que no necesito equipo especial. ¡Gracias por la motivación!"</p>
                            <small class="text-muted">Por @FitLife - Hace 4 días</small>
                            <div class="mt-2">
                                <a href="#" class="btn btn-sm mysecret-btn-outline me-2"><i class="bi bi-eye-fill me-2"></i>Ver Publicación</a>
                                <button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i> Editar</button>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
        </section>
    </main>

    <footer class="mysecret-footer py-4 mt-5">
        <div class="container text-center">
            <p class="mb-2">&copy; 2025 MySecret. All rights reserved.</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Terms of Service</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Contact</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>