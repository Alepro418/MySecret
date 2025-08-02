<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../public/assets/images/logo v1.3.ico" type="image/x-icon">
    <title>MySecret - Tu Mundo Exclusivo de Contenido</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
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
            border: 0.5px solid #ffc107; /* Gold border */
            object-fit: cover;
            margin-top: -5px; /* Pulls avatar up into banner */
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

        /* Styles for followed creators list and subscriptions list */
        .mysecret-creator-list .list-group-item,
        .mysecret-subscription-list .list-group-item {
            background-color: #2d3135;
            color: white;
            border: 1px solid #495057;
            margin-bottom: 10px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
            padding: 15px;
        }
        .mysecret-creator-list .mysecret-creator-avatar,
        .mysecret-subscription-list .mysecret-creator-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 2px solid #ffc107;
        }
        .mysecret-membership-status {
            font-size: 0.9em;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            white-space: nowrap; /* Prevent status text from wrapping */
        }
        .mysecret-membership-active {
            background-color: #28a745; /* Green */
            color: white;
        }
        .mysecret-membership-expired {
            background-color: #dc3545; /* Red */
            color: white;
        }
        .mysecret-subscription-info {
            flex-grow: 1;
            margin-right: 15px; /* Space between info and buttons */
        }
        .mysecret-subscription-actions {
            display: flex;
            gap: 10px; /* Space between buttons */
            flex-wrap: wrap;
        }
        .mysecret-subscription-actions .btn {
            white-space: nowrap; /* Prevent button text from wrapping */
        }
    </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg mysecret-navbar py-3">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center mysecret-logo me-auto" href="index.php">
                <img src="../../../public/assets/images/logo v1.3.jpg" alt="MySecret Logo" class="mysecret-logo-img me-2">
                MySecret
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mysecret-gold"><i class="bi bi-list"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link active" aria-current="page" href="index_fan.php"><i class="bi bi-house-door-fill me-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="subscriptions.php"><i class="bi bi-star-fill me-2"></i>My Subscripctions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="messages_fan.php"><i class="bi bi-envelope-fill me-2"></i>Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="notifications.php"><i class="bi bi-bell-fill me-2"></i>notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="fan_profile.php"><i class="bi bi-person-circle me-2"></i>My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="#"><i class="bi bi-box-arrow-right me-2"></i>Log out</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="fan_profile.php">
                            <img src="Assets/Test_1.jpg" alt="Fan Avatar" class="mysecret-profile-avatar img-fluid">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="mysecret-profile-header">
        <div class="container">
            <h1 class="display-3 mysecret-title">Perfil de Usuario</h1>
            <p class="lead mysecret-subtitle">Administra tu perfil y explora tus conexiones.</p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <div class="text-center mb-5">
            <img src="Assets/user.jpeg" alt="Creator Avatar" class="mysecret-profile-avatar img-fluid">
            <h2 class="mt-3 mb-1 mysecret-section-title">Juanito Alcachofa <i class="bi bi-user mysecret-gold ms-2"></i></h2>
            <p class="text-muted">@juanitoalcachofa</p>
            <p class="lead mysecret-card-text">Bienvenido a tu panel de usuario. Aquí puedes gestionar tu actividad.</p>
            <button class="btn mysecret-btn-outline mt-3"><i class="bi bi-pencil-square me-2"></i>Editar Perfil</button>
        </div>

        <hr class="m5 mysecret-divider">

        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">Mis Suscripciones</h2>
            <div class="list-group mysecret-subscription-list">
                <div class="list-group-item">
                    <div class="d-flex align-items-center mysecret-subscription-info">
                        <img src="https://via.placeholder.com/60/FFC107/FFFFFF?text=CM" alt="Creator Avatar" class="mysecret-creator-avatar">
                        <div>
                            <h5 class="mb-1 mysecret-gold">Chef María</h5>
                            <p class="mb-0 text-muted">@ChefMariaOficial</p>
                            <p class="mb-0 text-muted">Finaliza: 31/12/2025</p>
                            <span class="mysecret-membership-status mysecret-membership-active">Membresía Activa</span>
                        </div>
                    </div>
                    <div class="mysecret-subscription-actions">
                        <button class="btn btn-sm btn-outline-info me-1">Nivel</button>
                        <button class="btn mysecret-btn-primary">Renovar Suscripción</button>
                        <button class="btn btn-outline-danger">Cancelar Suscripción</button>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="d-flex align-items-center mysecret-subscription-info">
                        <img src="https://via.placeholder.com/60/20c997/FFFFFF?text=JD" alt="Creator Avatar" class="mysecret-creator-avatar">
                        <div>
                            <h5 class="mb-1 mysecret-gold">Juan Diseño</h5>
                            <p class="mb-0 text-muted">@JuanDisenoArt</p>
                            <p class="mb-0 text-muted">Finalizó: 15/05/2025</p>
                            <span class="mysecret-membership-status mysecret-membership-expired">Membresía Expirada</span>
                        </div>
                    </div>
                    <div class="mysecret-subscription-actions">
                        <button class="btn btn-sm btn-outline-info me-1">Nivel</button>
                        <button class="btn mysecret-btn-primary">Renovar Suscripción</button>
                        <button class="btn btn-outline-secondary" disabled>Cancelar Suscripción</button>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="d-flex align-items-center mysecret-subscription-info">
                        <img src="https://via.placeholder.com/60/007bff/FFFFFF?text=PG" alt="Creator Avatar" class="mysecret-creator-avatar">
                        <div>
                            <h5 class="mb-1 mysecret-gold">Profe Genio</h5>
                            <p class="mb-0 text-muted">@ProfeGenio</p>
                            <p class="mb-0 text-muted">Finaliza: 10/01/2026</p>
                            <span class="mysecret-membership-status mysecret-membership-active">Membresía Activa</span>
                        </div>
                    </div>
                    <div class="mysecret-subscription-actions">
                        <button class="btn btn-sm btn-outline-info me-1">Nivel</button>
                        <button class="btn mysecret-btn-primary">Renovar Suscripción</button>
                        <button class="btn btn-outline-danger">Cancelar Suscripción</button>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="d-flex align-items-center mysecret-subscription-info">
                        <img src="https://via.placeholder.com/60/fd7e14/FFFFFF?text=LM" alt="Creator Avatar" class="mysecret-creator-avatar">
                        <div>
                            <h5 class="mb-1 mysecret-gold">Luna Música</h5>
                            <p class="mb-0 text-muted">@LunaMusica</p>
                            <p class="mb-0 text-muted">Finalizó: 01/03/2025</p>
                            <span class="mysecret-membership-status mysecret-membership-expired">Membresía Expirada</span>
                        </div>
                    </div>
                    <div class="mysecret-subscription-actions">
                        <button class="btn btn-sm btn-outline-info me-1">Nivel</button>
                        <button class="btn mysecret-btn-primary">Renovar Suscripción</button>
                        <button class="btn btn-outline-secondary" disabled>Cancelar Suscripción</button>
                    </div>
                </div>

                <div class="list-group-item">
                    <div class="d-flex align-items-center mysecret-subscription-info">
                        <img src="https://via.placeholder.com/60/6f42c1/FFFFFF?text=EA" alt="Creator Avatar" class="mysecret-creator-avatar">
                        <div>
                            <h5 class="mb-1 mysecret-gold">Explora Aventuras</h5>
                            <p class="mb-0 text-muted">@ExploraAventuras</p>
                            <p class="mb-0 text-muted">Finaliza: 20/11/2025</p>
                            <span class="mysecret-membership-status mysecret-membership-active">Membresía Activa</span>
                        </div>
                    </div>
                    <div class="mysecret-subscription-actions">
                        <button class="btn btn-sm btn-outline-info me-1">Nivel</button>
                        <button class="btn mysecret-btn-primary">Renovar Suscripción</button>
                        <button class="btn btn-outline-danger">Cancelar Suscripción</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="mysecret-footer py-4 mt-5">
        <div class="container text-center">
            <p class="mb-2">&copy; 2025 MySecret. Todos los derechos reservados.</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Términos de Servicio</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Política de Privacidad</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Contacto</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
