<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../public/assets/images/logo v1.3.ico" type="image/x-icon">
    <title>MySecret - Donde tu fantasía es nuestra Realidad</title>
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
            width: 50px;
            height: 50px;
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

        /* Styles for followed creators list */
        .mysecret-creator-list .list-group-item {
            background-color: #2d3135;
            color: white;
            border: 1px solid #495057;
            margin-bottom: 10px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .mysecret-creator-list .mysecret-creator-avatar {
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
        }
        .mysecret-membership-active {
            background-color: #28a745; /* Green */
            color: white;
        }
        .mysecret-membership-expired {
            background-color: #dc3545; /* Red */
            color: white;
        }

        /* Styles for account settings cards */
        .mysecret-setting-card {
            background-color: #212529;
            color: white;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            text-align: center;
            padding: 30px;
            transition: transform 0.2s ease-in-out;
        }
        .mysecret-setting-card:hover {
            transform: translateY(-5px);
        }
        .mysecret-setting-card .display-4 {
            color: #ffc107;
            margin-bottom: 15px;
        }
        .mysecret-setting-card h5 {
            color: #ffc107;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .mysecret-setting-card p {
            color: #ccc;
        }
    </style>
</head>
<body translate="yes">
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
                        <a class="nav-link mysecret-nav-link" aria-current="page" href="index_creator.php"><i class="bi bi-house-door-fill me-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="subscriptions.php"><i class="bi bi-person-check-fill me-2"></i>Subscriptions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="messages_creator.php"><i class="bi bi-envelope-fill me-2"></i>Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="notifications.php"><i class="bi bi-bell-fill me-2"></i>notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link active" href="creator_profile.php"><i class="bi bi-person-circle me-2"></i>My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="../../processes/log_out.php"><i class="bi bi-person-x-fill me-2"></i>Log out</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="creator_profile.php">
                            <img src="Assets/Test_1.jpg" alt="Creator Avatar" class="mysecret-profile-avatar img-fluid">
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
            <img src="Assets/Test_1.jpg" alt="Creator Avatar" class="mysecret-profile-avatar img-fluid">
            <h2 class="mt-3 mb-1 mysecret-section-title">Aishah Sofey <i class="bi bi-user mysecret-gold ms-2"></i></h2>
            <p class="text-muted">@aishasofeyofficial</p>
            <p class="lead mysecret-card-text">Bienvenido a tu panel de usuario. Aquí puedes gestionar tu actividad.</p>
            <button class="btn mysecret-btn-outline mt-3"><i class="bi bi-pencil-square me-2"></i>Editar Perfil</button>
        </div>
        
        <hr class="m5 mysecret-divider">

        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">Configuración de Cuenta</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card mysecret-setting-card h-100">
                        <i class="bi bi-person-circle display-4"></i>
                        <h5 class="card-title">Editar Perfil</h5>
                        <p class="card-text">Actualiza tu información personal, avatar y biografía.</p>
                        <a href="edit_profile_creator.php" class="btn mysecret-btn-outline mt-3">Ir a Editar Perfil</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-setting-card h-100">
                        <i class="bi bi-key-fill display-4"></i>
                        <h5 class="card-title">Cambiar Contraseña</h5>
                        <p class="card-text">Mantén tu cuenta segura actualizando tu contraseña regularmente.</p>
                        <a href="change_password.php" class="btn mysecret-btn-outline mt-3">Cambiar Contraseña</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-setting-card h-100">
                        <i class="bi bi-bell-fill display-4"></i>
                        <h5 class="card-title">Preferencias de Notificación</h5>
                        <p class="card-text">Controla cómo y cuándo recibes las alertas de MySecret.</p>
                        <a href="notification_settings.php" class="btn mysecret-btn-outline mt-3">Gestionar Notificaciones</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-setting-card h-100">
                        <i class="bi bi-shield-lock-fill display-4"></i>
                        <h5 class="card-title">Configuración de Privacidad</h5>
                        <p class="card-text">Define quién puede ver tu actividad y tu información en la plataforma.</p>
                        <a href="privacy_settings.php" class="btn mysecret-btn-outline mt-3">Ajustar Privacidad</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-setting-card h-100">
                        <i class="bi bi-credit-card-fill display-4"></i>
                        <h5 class="card-title">Configurar Métodos de Pago</h5>
                        <p class="card-text">Administra tus tarjetas y opciones de pago para tus suscripciones.</p>
                        <a href="payment_methods.php" class="btn mysecret-btn-outline mt-3">Configurar Pagos</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-setting-card h-100">
                        <i class="bi bi-star-fill display-4"></i>
                        <h5 class="card-title">Mis Suscripciones</h5>
                        <p class="card-text">Revisa y gestiona el estado de todas tus suscripciones activas y pasadas.</p>
                        <a href="subscriptions.php" class="btn mysecret-btn-outline mt-3">Ver Suscripciones</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-setting-card h-100">
                        <i class="bi bi-file-earmark-person-fill display-4"></i>
                        <h5 class="card-title">Descargar Datos</h5>
                        <p class="card-text">Solicita una copia de tus datos personales almacenados en MySecret.</p>
                        <a href="download_data.php" class="btn mysecret-btn-outline mt-3">Solicitar Datos</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-setting-card h-100">
                        <i class="bi bi-person-x-fill display-4"></i>
                        <h5 class="card-title">Eliminar Cuenta</h5>
                        <p class="card-text">Si deseas, puedes iniciar el proceso para eliminar tu cuenta de forma permanente.</p>
                        <a href="delete_account.php" class="btn btn-danger mt-3">Eliminar Cuenta</a>
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