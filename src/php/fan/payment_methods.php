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
        /* Custom styles from your original profile page, adapted for this page */
        body {
            background-color: #1a1a1a; /* Dark background */
            color: #f8f9fa; /* Light text */
            font-family: 'Lato', sans-serif;
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
        .mysecret-nav-link {
            color: #f8f9fa !important;
            transition: color 0.3s ease;
        }
        .mysecret-nav-link:hover {
            color: #ffc107 !important; /* Gold on hover */
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
            border-color: #ffc107;
        }
        .mysecret-section-title {
            font-family: 'Playfair Display', serif;
            color: #ffc107;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
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
        .mysecret-footer-link:hover {
            color: #ffc107;
        }
        /* Specific styles for Payment Methods page */
        .mysecret-card-bg {
            background-color: #212529;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            border-radius: 8px;
        }
        .mysecret-card-header {
            background-color: #2d3135;
            color: #ffc107;
            font-weight: 700;
            border-bottom: 1px solid #ffc107;
        }
        .mysecret-payment-icon {
            font-size: 2.5rem;
            color: #ffc107;
            margin-right: 15px;
        }
        .payment-method-item {
            display: flex;
            align-items: center;
            background-color: #2d3135;
            border: 1px solid #495057;
            border-radius: 8px;
            margin-bottom: 15px;
            padding: 15px 20px;
        }
        .payment-method-item .card-number {
            font-weight: bold;
            color: #f8f9fa;
        }
        .payment-method-item .expiry-date {
            font-size: 0.9em;
            color: #ccc;
        }
        .payment-method-item .actions {
            margin-left: auto;
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
                        <a class="nav-link mysecret-nav-link" href="../../processes/log_out.php"><i class="bi bi-person-x-fill me-2"></i>Log out</a>
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

    <main class="container my-5 py-3">
        <h1 class="mysecret-section-title mb-5">Configurar Métodos de Pago</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card mysecret-card-bg mb-5">
                    <div class="card-header mysecret-card-header">
                        <i class="bi bi-credit-card-2-front-fill me-2 mysecret-payment-icon"></i> Añadir Nuevo Método de Pago
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="cardName" class="form-label mysecret-form-label">Nombre en la Tarjeta</label>
                                <input type="text" class="form-control mysecret-form-control" id="cardName" placeholder="Nombre Apellido" required>
                            </div>
                            <div class="mb-3">
                                <label for="cardNumber" class="form-label mysecret-form-label">Número de Tarjeta</label>
                                <input type="text" class="form-control mysecret-form-control" id="cardNumber" placeholder="XXXX XXXX XXXX XXXX" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="expiryDate" class="form-label mysecret-form-label">Fecha de Caducidad (MM/AA)</label>
                                    <input type="text" class="form-control mysecret-form-control" id="expiryDate" placeholder="MM/AA" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cvv" class="form-label mysecret-form-label">CVV</label>
                                    <input type="text" class="form-control mysecret-form-control" id="cvv" placeholder="XXX" required>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn mysecret-btn-outline">Guardar Método de Pago</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mysecret-card-bg">
                    <div class="card-header mysecret-card-header">
                        <i class="bi bi-wallet-fill me-2 mysecret-payment-icon"></i> Tus Métodos de Pago
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info mysecret-form-control" role="alert">
                            No tienes métodos de pago guardados. ¡Añade uno para empezar!
                        </div>
                        <div class="payment-method-item d-none"> <div>
                                <i class="bi bi-credit-card-fill mysecret-gold me-3"></i>
                                <div>
                                    <div class="card-number">**** **** **** 1234</div>
                                    <div class="expiry-date">Exp. 12/26</div>
                                </div>
                            </div>
                            <div class="actions">
                                <button class="btn btn-sm btn-info me-2 mysecret-btn-outline"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>
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