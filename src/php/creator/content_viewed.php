<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Assets/logo v1.3.ico" type="image/x-icon">
    <title>MySecret - Perfil del usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
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

        /* Styles for subscription cards - Renamed for more general use if needed */
        .mysecret-info-card {
            background-color: #2d3135; /* Similar to message item for consistency */
            border: 1px solid #495057;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .mysecret-info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.5);
        }
        .mysecret-info-card .mysecret-creator-avatar { /* Kept for compatibility if images are used */
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ffc107;
        }
        .mysecret-gold-text {
            color: #ffc107;
            font-weight: 700;
        }
        .mysecret-card-text-small {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
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
            <h1 class="display-3 mysecret-title">User Dashboard</h1>
            <p class="lead mysecret-subtitle">Manage your profile and connect with your favorite creators.</p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <div class="text-center mb-5">
            <img src="Assets/user.jpeg" alt="Creator Avatar" class="mysecret-profile-avatar img-fluid">
            <h2 class="mt-3 mb-1 mysecret-section-title">Juanito Alcachofa <i class="bi bi-user mysecret-gold ms-2"></i></h2>
            <p class="text-muted">@juanitoalcachofa</p>
            <p class="lead mysecret-card-text">Aquí podrías poner una pequeña biografía del usuario, sus intereses o cuánto tiempo lleva en la plataforma.</p>
            <button class="btn mysecret-btn-outline mt-3"><i class="bi bi-pencil-square me-2"></i>Edit Profile</button>
        </div>

        <hr class="my-5 mysecret-divider">

        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">Tu Actividad Reciente</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col-12 mb-4">
                    <div class="card mysecret-info-card h-100 p-4 text-center d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-eye-fill display-3 mysecret-gold mb-3"></i>
                        <h4 class="card-title mysecret-gold-text mb-2">¡Has explorado mucho!</h4>
                        <p class="card-text mysecret-card-text fs-4 mb-3">En los últimos 30 días, has visto <span class="mysecret-gold-text">42</span> piezas de contenido.</p>
                        <p class="card-text mysecret-card-text-small text-muted">Mantente al día con lo que te interesa.</p>
                        <a href="#" class="btn mysecret-btn-primary mt-3"><i class="bi bi-clock-history me-2"></i>Ver Historial Completo</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-info-card h-100">
                        <img src="Assets/content_example1.jpeg" class="card-img-top" alt="Content Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title mysecret-gold-text">Artículo: "Las 5 Tendencias del Arte Digital"</h5>
                            <p class="card-text text-muted small"><i class="bi bi-person-fill"></i> @creador_uno | <i class="bi bi-calendar-fill"></i> Visto: 28 de junio de 2025</p>
                            <p class="card-text mysecret-card-text-small">Descubre las innovaciones que están transformando el mundo del arte. <span class="badge bg-secondary">#ArteDigital</span></p>
                            <a href="#" class="btn mysecret-btn-outline btn-sm mt-2"><i class="bi bi-arrow-right-circle-fill"></i> Ir al Contenido</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-info-card h-100">
                        <img src="Assets/content_example2.jpeg" class="card-img-top" alt="Content Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title mysecret-gold-text">Video: "Mi Proceso Creativo para Ilustraciones"</h5>
                            <p class="card-text text-muted small"><i class="bi bi-person-fill"></i> @creador_dos_art | <i class="bi bi-calendar-fill"></i> Visto: 25 de junio de 2025</p>
                            <p class="card-text mysecret-card-text-small">Un vistazo detrás de escenas de cómo doy vida a mis personajes. <span class="badge bg-secondary">#Ilustración</span></p>
                            <a href="#" class="btn mysecret-btn-outline btn-sm mt-2"><i class="bi bi-arrow-right-circle-fill"></i> Ir al Contenido</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-info-card h-100">
                        <img src="Assets/content_example3.jpeg" class="card-img-top" alt="Content Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title mysecret-gold-text">Podcast: "Historias Inspiradoras de Músicos"</h5>
                            <p class="card-text text-muted small"><i class="bi bi-person-fill"></i> @music_vibes | <i class="bi bi-calendar-fill"></i> Visto: 20 de junio de 2025</p>
                            <p class="card-text mysecret-card-text-small">Episodio especial con entrevistas a talentos emergentes. <span class="badge bg-secondary">#Podcast</span></p>
                            <a href="#" class="btn mysecret-btn-outline btn-sm mt-2"><i class="bi bi-arrow-right-circle-fill"></i> Ir al Contenido</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-info-card h-100">
                        <img src="Assets/content_example4.jpeg" class="card-img-top" alt="Content Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title mysecret-gold-text">Publicación: "Tips para Escritores Principiantes"</h5>
                            <p class="card-text text-muted small"><i class="bi bi-person-fill"></i> @escritor_pro | <i class="bi bi-calendar-fill"></i> Visto: 15 de junio de 2025</p>
                            <p class="card-text mysecret-card-text-small">Supera el bloqueo del escritor con estos consejos prácticos. <span class="badge bg-secondary">#Escritura</span></p>
                            <a href="#" class="btn mysecret-btn-outline btn-sm mt-2"><i class="bi bi-arrow-right-circle-fill"></i> Ir al Contenido</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-info-card h-100">
                        <img src="Assets/content_example5.jpeg" class="card-img-top" alt="Content Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title mysecret-gold-text">Galería de Fotos: "Paisajes Urbanos"</h5>
                            <p class="card-text text-muted small"><i class="bi bi-person-fill"></i> @fotografo_city | <i class="bi bi-calendar-fill"></i> Visto: 10 de junio de 2025</p>
                            <p class="card-text mysecret-card-text-small">Una colección de mis mejores tomas de la ciudad al atardecer. <span class="badge bg-secondary">#Fotografía</span></p>
                            <a href="#" class="btn mysecret-btn-outline btn-sm mt-2"><i class="bi bi-arrow-right-circle-fill"></i> Ir al Contenido</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center mt-4">
                    <p class="lead mysecret-card-text">
                        <i class="bi bi-info-circle me-2"></i>Parece que no has visto contenido en los últimos 30 días.
                    </p>
                    <a href="#" class="btn mysecret-btn-primary"><i class="bi bi-search me-2"></i>Descubrir Contenido Nuevo</a>
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