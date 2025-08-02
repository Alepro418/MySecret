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
        /* Custom styles for fan profile - you can move these to style.css if preferred */
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
                        <a class="nav-link mysecret-nav-link" aria-current="page" href="index_fan.php"><i class="bi bi-house-door-fill me-2"></i>Home</a>
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
                        <a class="nav-link mysecret-nav-link active" href="fan_profile.php"><i class="bi bi-person-circle me-2"></i>My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="#"><i class="bi bi-box-arrow-right me-2"></i>Log out</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="creator_profile.php">
                            <img src="Assets/Test_1.jpg" alt="Fan Avatar" class="mysecret-profile-avatar img-fluid">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="mysecret-profile-header">
        <div class="container">
            <h1 class="display-3 mysecret-title">Mi Perfil de Fan</h1>
            <p class="lead mysecret-subtitle">Gestiona tu experiencia en MySecret.</p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <div class="text-center mb-5">
            <img src="Assets/Test_1.jpg" alt="Fan Avatar" class="mysecret-profile-avatar img-fluid">
            <p class="text-muted mt-2">Haz clic en la imagen para cambiar tu avatar</p>
        </div>
        
        <form action="save_fan_profile.php" method="POST" enctype="multipart/form-data" class="mysecret-form">
            <div class="row g-4 mb-4"> 
                <div class="col-lg-6">
                    <div class="card mysecret-setting-card h-100 p-4">
                        <h5 class="mysecret-form-label mb-3">Información Personal</h5>
                        <div class="mb-3">
                            <label for="profileName" class="form-label mysecret-form-label">Nombre de Usuario</label>
                            <input type="text" class="form-control mysecret-form-control" id="profileName" value="Fan Ejemplo" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileHandle" class="form-label mysecret-form-label">Alias (@)</label>
                            <input type="text" class="form-control mysecret-form-control" id="profileHandle" value="@fanejemplo" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileEmail" class="form-label mysecret-form-label">Correo Electrónico</label>
                            <input type="email" class="form-control mysecret-form-control" id="profileEmail" value="fan.ejemplo@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileBio" class="form-label mysecret-form-label">Biografía (Opcional)</label>
                            <textarea class="form-control mysecret-form-control" id="profileBio" rows="4" placeholder="Cuéntanos algo sobre ti...">Me encanta descubrir nuevos creadores y apoyar el contenido exclusivo en MySecret.</textarea>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card mysecret-setting-card h-100 p-4">
                        <h5 class="mysecret-form-label mb-3">Configuración de Contenido y Preferencias</h5>
                        <div class="mb-3 mysecret-file-upload-card">
                            <label for="profileBanner" class="form-label mysecret-form-label">Subir Banner de Perfil (Opcional)</label>
                            <input class="form-control mysecret-file-input" type="file" id="profileBanner" accept="image/*">
                            <small class="form-text text-muted">Imagen recomendada: 1200x300px para una mejor visualización.</small>
                        </div>
                        <div class="mb-3 mysecret-toggle-switch">
                            <h6 class="mysecret-form-label">Preferencias de Notificaciones</h6>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="emailNotifications" checked>
                                <label class="form-check-label text-white" for="emailNotifications">Recibir notificaciones por correo electrónico</label>
                            </div>
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" id="appNotifications" checked>
                                <label class="form-check-label text-white" for="appNotifications">Recibir notificaciones en la aplicación</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="preferredContentCategories" class="form-label mysecret-form-label">Categorías de Contenido Preferidas</label>
                            <select class="form-select mysecret-form-control" id="preferredContentCategories" multiple aria-label="Categorías de Contenido Preferidas">
                                <option value="art">Arte Digital</option>
                                <option value="music">Música</option>
                                <option value="writing" selected>Escritura</option>
                                <option value="video">Video</option>
                                <option value="photography">Fotografía</option>
                                <option value="tutorial">Tutoriales</option>
                            </select>
                            <small class="form-text text-muted">Selecciona las categorías de contenido que más te interesan.</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn mysecret-btn-outline btn-lg me-3"><i class="bi bi-save me-2"></i>Guardar Cambios</button>
                <a href="fan_profile.php" class="btn btn-secondary btn-lg"><i class="bi bi-x-circle me-2"></i>Cancelar</a>
            </div>
        </form>
    </main>

    <footer class="mysecret-footer py-4 mt-5">
        <div class="container text-center">
            <p class="mb-2">&copy; 2025 MySecret. All rights reserved.</p>
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
