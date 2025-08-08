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
        /* Custom styles from the original profile page for consistency */
        body {
            background-color: #1a1a1a; /* Dark background */
            color: #f8f9fa; /* Light text color */
        }
        .mysecret-nav-link {
            color: #f8f9fa !important;
            transition: color 0.3s ease;
        }
        .mysecret-nav-link:hover,
        .mysecret-nav-link.active {
            color: #ffc107 !important; /* Gold on hover/active */
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
            border: 0.5px solid #ffc107;
            object-fit: cover;
            margin-top: -5px;
            position: relative;
            z-index: 10;
        }
        .mysecret-header {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('Assets/content_banner_placeholder.jpg') no-repeat center center/cover; /* Placeholder banner for content page */
            color: white;
            padding: 80px 0;
            text-align: center;
            position: relative;
        }
        /* ADD THIS NEW STYLE OR MODIFY THE EXISTING .mysecret-header IF YOU WANT THIS STYLE TO BE GLOBAL */
        .mysecret-profile-header {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('Assets/content_banner_placeholder.jpg') no-repeat center center/cover; /* Placeholder banner for content page */
            color: white;
            padding: 80px 0;
            text-align: center; /* This will center the text */
            position: relative;
        }
        .mysecret-title {
            font-family: 'Playfair Display', serif;
            color: #ffc107;
        }
        .mysecret-subtitle {
            font-family: 'Lato', sans-serif;
            color: rgba(255, 255, 255, 0.8);
        }
        .mysecret-section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #ffc107;
            margin-bottom: 2rem;
            text-align: center;
        }
        .mysecret-divider {
            border-top: 3px solid #ffc107;
            opacity: 0.5;
            margin: 4rem 0;
        }
        .mysecret-card {
            background-color: #212529; /* Darker background for cards */
            color: white;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }
        .mysecret-card-title {
            color: #ffc107;
        }
        .mysecret-card-text {
            color: rgba(255, 255, 255, 0.9);
        }
        .mysecret-content-item {
            border: 1px solid #495057;
            border-radius: 8px;
            overflow: hidden; /* Ensures image corners are rounded */
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .mysecret-content-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.5);
        }
        .mysecret-content-item img {
            height: 250px; /* Fixed height for consistency */
            object-fit: cover;
            width: 100%;
        }
        .mysecret-btn-primary {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #212529;
        }
        .mysecret-btn-primary:hover {
            background-color: #e0a800;
            border-color: #e0a800;
            color: #212529;
        }
        .mysecret-btn-outline {
            background-color: transparent;
            border: 1px solid #ffc107;
            color: #ffc107;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .mysecret-btn-outline:hover {
            background-color: #ffc107;
            color: #212529;
        }
        /* Override Bootstrap's default btn-danger for consistency */
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .mysecret-footer-link {
            color: #f8f9fa;
            text-decoration: none;
        }
        .mysecret-footer-link:hover {
            color: #ffc107;
        }

        /* NEW STYLE TO MAKE THE CANVAS SLIGHTLY SMALLER */
        @media (min-width: 768px) { /* Applies on medium screens and larger */
            .mysecret-card.p-3 {
                max-width: 100%; /* Adjust this value as needed (e.g., 70%, 75%) */
                margin-left: auto;
                margin-right: auto;
            }
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
            <h1 class="display-3 mysecret-title">Statistics</h1>
            <p class="lead mysecret-subtitle">Monitor your progress and make the best decision about your content.</p>
        </div>
    </header>

    <main class="container">
            
            <hr class="m5 mysecret-divider">

                <section class="mb-3">
                    <h2 class="text-center mb-4 mysecret-section-title">Monthly Subscriber Trend</h2>
                    <div class="card mysecret-card p-3">
                        <canvas id="subscriberGrowthChart" aria-label="Gráfico de crecimiento de suscriptores mensuales" role="img"></canvas>
                    </div>
                    <p class="text-center text-muted mt-2">Changes in subscriber count over the last few months.</p>
                </section>

            <hr class="mb-5 mysecret-divider">

                <section class="mb-4">
                    <h2 class="text-center mb-4 mysecret-section-title">Most Popular Content</h2>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mysecret-content-grid">
                        <div class="col">
                            <div class="card mysecret-card h-100">
                                    <img src="Assets/content_placeholder_1.jpg" class="card-img-top" alt="Popular Content 1">
                                <div class="card-body">
                                    <h5 class="card-title mysecret-card-title">Behind the Scenes - Photoshoot</h5>
                                    <p class="card-text mysecret-card-text text-muted">Uploaded: May 15, 2025</p>
                                    <p class="card-text mysecret-card-text"><i class="bi bi-eye-fill me-2 mysecret-gold"></i> 15,432 Views</p>
                                    <p class="card-text mysecret-card-text"><i class="bi bi-heart-fill me-2 text-danger"></i> 2,105 Likes</p>
                                    <a href="#" class="btn mysecret-btn-outline my-2 w-100">View Content</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mysecret-card h-100">
                                <img src="Assets/content_placeholder_2.jpg" class="card-img-top" alt="Popular Content 2">
                            <div class="card-body">
                                <h5 class="card-title mysecret-card-title">Exclusive Q&A Session - Video</h5>
                                <p class="card-text mysecret-card-text text-muted">Uploaded: Apr 28, 2025</p>
                                <p class="card-text mysecret-card-text"><i class="bi bi-eye-fill me-2 mysecret-gold"></i> 12,876 Views</p>
                                <p class="card-text mysecret-card-text"><i class="bi bi-heart-fill me-2 text-danger"></i> 1,890 Likes</p>
                                <a href="#" class="btn mysecret-btn-outline my-2 w-100">View Content</a>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                            <div class="card mysecret-card h-100">
                                    <img src="Assets/content_placeholder_3.jpg" class="card-img-top" alt="Popular Content 3">
                                <div class="card-body">
                                    <h5 class="card-title mysecret-card-title">Weekly Vlog - My Daily Routine</h5>
                                    <p class="card-text mysecret-card-text text-muted">Uploaded: Jun 01, 2025</p>
                                    <p class="card-text mysecret-card-text"><i class="bi bi-eye-fill me-2 mysecret-gold"></i> 11,210 Views</p>
                                    <p class="card-text mysecret-card-text"><i class="bi bi-heart-fill me-2 text-danger"></i> 1,560 Likes</p>
                                    <a href="#" class="btn mysecret-btn-outline my-2 w-100">View Content</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="manage_content.php" class="btn mysecret-btn-primary"><i class="bi bi-grid-fill me-2"></i>View All Content</a>
                    </div>
                </section>

            <hr class="mb-5 mysecret-divider">

            <section class="mb-3">
                <h2 class="text-center mb-4 mysecret-section-title">Monthly Subscription Earnings</h2>
                <div class="card mysecret-card p-3">
                    <canvas id="monthlyEarningsChart" aria-label="Gráfico de ganancias mensuales por suscripción" role="img"></canvas>
                </div>
                <p class="text-center text-muted mt-2">Total earnings from subscriptions over the last few months.</p>
            </section>

            <hr class="mb-5 mysecret-divider">

            <section class="mb-3">
                <h2 class="text-center mb-4 mysecret-section-title">Premium Content Earnings</h2>
                <div class="card mysecret-card p-3">
                    <canvas id="premiumContentEarningsChart" aria-label="Gráfico de ganancias por contenido premium" role="img"></canvas>
                </div>
                <p class="text-center text-muted mt-2">Revenue generated from paid unlocks of exclusive content.</p>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../../public/assets/js/main.js"></script>
</body>
</html>