<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../public/assets/images/logo v1.3.ico" type="image/x-icon">
    <title>MySecret - Cambiar Contraseña</title>
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
        /* Custom styles from your original snippet, adjusted for this page */
        .mysecret-nav-link {
            color: white;
            transition: color 0.3s ease;
        }
        .mysecret-nav-link:hover {
            color: #ffc107;
        }
        .mysecret-gold {
            color: #ffc107;
        }
        .mysecret-btn-outline {
            color: #ffc107;
            border-color: #ffc107;
            background-color: transparent;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .mysecret-btn-outline:hover {
            background-color: #ffc107;
            color: #212529;
        }
        .mysecret-section-title {
            font-family: 'Playfair Display', serif;
            color: #ffc107;
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }
        .mysecret-card-text {
            color: #ccc;
        }
        .mysecret-divider {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
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
        /* Specific styles for the password change form */
        .mysecret-password-card {
            background-color: #212529;
            color: white;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            padding: 30px;
            border-radius: 8px;
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

    <main class="container my-5 py-5">
        <h2 class="mysecret-section-title">Cambiar Contraseña</h2>
        <p class="text-center lead mysecret-card-text mb-4">Mantén tu cuenta segura actualizando tu contraseña regularmente.</p>

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">
                <div class="mysecret-password-card">
                    <form action="process_change_password.php" method="POST">
                        <div class="mb-3">
                            <label for="currentPassword" class="form-label mysecret-form-label">Contraseña Actual</label>
                            <input type="password" class="form-control mysecret-form-control" id="currentPassword" name="current_password" required>
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label mysecret-form-label">Nueva Contraseña</label>
                            <input type="password" class="form-control mysecret-form-control" id="newPassword" name="new_password" required>
                        </div>
                        <div class="mb-4">
                            <label for="confirmNewPassword" class="form-label mysecret-form-label">Confirmar Nueva Contraseña</label>
                            <input type="password" class="form-control mysecret-form-control" id="confirmNewPassword" name="confirm_new_password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn mysecret-btn-outline">Actualizar Contraseña</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="mysecret-footer py-4 mt-5">
        <div class="container text-center">
            <ul class="list-inline mb-2">
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Términos de Servicio</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Política de Privacidad</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Contacto</a></li>
            </ul>
            <p class="mb-0">&copy; 2025 MySecret. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>