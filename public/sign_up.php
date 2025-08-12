<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySecret - Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .password-input-wrapper {
            position: relative;
        }

        .password-toggle-icon {
            position: absolute;
            right: 15px; /* Adjust as needed */
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--mysecret-medium-gray); /* Adjust color as needed */
            font-size: 1.2rem; /* Adjust size as needed */
            z-index: 2; /* Ensures the icon is above the input */
        }

        /* Add padding to the right of the input to prevent text from going under the icon */
        .mysecret-form-control.password-input {
            padding-right: 40px; /* Adjust based on icon size and desired spacing */
        }
    </style>
</head>
<body translate="no">

    <nav class="navbar navbar-expand-lg mysecret-navbar py-3">
        <div class="container-fluid">
            <img src="Assets/images/logo v1.3.jpg" alt="MySecret Logo" class="mysecret-logo-img">
            <a class="navbar-brand mysecret-logo me-auto" href="index.php">MySecret</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mysecret-gold"><i class="bi bi-list"></i></span> </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mysecret-cta-link btn btn-sm mysecret-btn-primary ms-lg-3" href="sign_in.php"><i class="bi bi-box-arrow-in-right me-2"></i>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5 py-3">
        <section class="registration-form-section mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">Join MySecret</h2>
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9 col-sm-12">
                    <div class="card mysecret-card p-4">
                        <div class="card-body">
                            <form action="../src/processes/register_user.php" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label mysecret-form-label">Username</label>
                                    <input type="text" class="form-control mysecret-form-control" id="username" name="username" placeholder="Choose a username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label mysecret-form-label">Email</label>
                                    <input type="email" class="form-control mysecret-form-control" id="email" name="email"  placeholder="tu@ejemplo.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label mysecret-form-label">Password</label>
                                    <div class="password-input-wrapper">
                                        <input type="password" class="form-control mysecret-form-control password-input" id="password" name="password" placeholder="Mínimo 8 caracteres" required>
                                        <i class="bi bi-eye-fill password-toggle-icon" id="togglePassword"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label mysecret-form-label">Confirmr password</label>
                                    <div class="password-input-wrapper">
                                        <input type="password" class="form-control mysecret-form-control password-input" id="confirmPassword" name="confirmPassword" placeholder="Repeat your password" required>
                                        <i class="bi bi-eye-fill password-toggle-icon" id="toggleConfirmPassword"></i>
                                    </div>
                                </div>

                                ---

                                <div class="mb-4">
                                    <label class="form-label mysecret-form-label d-block mb-2">I want to join as:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input mysecret-radio" type="radio" name="userRole" id="roleCreator" value="creator" required>
                                        <label class="form-check-label mysecret-form-label" for="roleCreator">
                                            <i class="bi bi-gem me-1"></i> Creator
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input mysecret-radio" type="radio" name="userRole" id="roleFan" value="fan" required>
                                        <label class="form-check-label mysecret-form-label" for="roleFan">
                                            <i class="bi bi-heart-fill me-1"></i> Fan
                                        </label>
                                    </div>
                                </div>

                                ---

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input mysecret-checkbox" id="termsCheck" name="termsCheck" required>
                                    <label class="form-check-label mysecret-form-label" for="termsCheck">I accept the <a href="#" class="mysecret-link-text">Terms of Service</a> and the <a href="#" class="mysecret-link-text">Privacy Policy</a>.</label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn mysecret-btn-primary btn-lg mt-3">
                                        <i class="bi bi-person-plus-fill me-2"></i>Register
                                    </button>
                                </div>
                                <p class="text-center mt-3 mysecret-medium-gray"> Already have an account? <a href="sign_in.html" class="mysecret-link-text">Log in here</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="alert">
            <?php
            // El bloque PHP para mostrar mensajes de sesión ahora está aquí.
            // La llamada a session_start() se ha movido al principio del archivo.
            if (isset($_SESSION['success_message'])) {
                echo '<div class="alert alert-success text-center">' . $_SESSION['success_message'] . '</div>';
                unset($_SESSION['success_message']);
            }
            if (isset($_SESSION['error_message'])) {
                echo '<div class="alert alert-danger text-center">' . $_SESSION['error_message'] . '</div>';
                unset($_SESSION['error_message']);
            }
            if (isset($_SESSION['errors'])) {
                foreach ($_SESSION['errors'] as $error) {
                    echo '<div class="alert alert-danger text-center">' . $error . '</div>';
                }
                unset($_SESSION['errors']);
            }
            ?>
        </div>
    </main>

    <footer class="mysecret-footer py-4 mt-5">
        <div class="container text-center">
            <p class="mb-2">&copy; 2025 MySecret. All rights reserved.</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Terms of service</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Contact</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../public/assets/js/main.js"></script>
</body>
</html>
