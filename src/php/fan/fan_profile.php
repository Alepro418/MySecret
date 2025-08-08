<?php
    session_start();
?>
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
            <h1 class="display-3 mysecret-title">user dashboard</h1>
            <p class="lead mysecret-subtitle">Manage your profile and explore your conections.</p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <div class="text-center mb-5">
            <img src="Assets/user.jpeg" alt="Creator Avatar" class="mysecret-profile-avatar img-fluid">
            <h2 class="mt-3 mb-1 mysecret-section-title">Jhon <i class="bi bi-user mysecret-gold ms-2"></i></h2>
            <p class="text-muted">@juanitoalcachofa</p>
            <p class="lead mysecret-card-text">Bienvenido a tu panel de usuario. Aquí puedes gestionar tu actividad.</p>
            <button class="btn mysecret-btn-outline mt-3"><i class="bi bi-pencil-square me-2"></i>Editar Perfil</button>
        </div>

        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">Overview</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 text-center">
                <a href="active_subscriptions.php">
                    <div class="col">
                        <div class="card mysecret-card h-100 p-4">
                            <i class="bi bi-star-fill display-4 mysecret-gold mb-3"></i>
                            <h5 class="card-title mysecret-card-title">Active Subscriptions </h5>
                            <p class="card-text mysecret-card-text display-5">5</p>
                        </div>
                    </div>
                </a>
                <a href="content_viewed.php">
                    <div class="col">
                        <div class="card mysecret-card h-100 p-4">
                            <i class="bi bi-collection-play-fill display-4 mysecret-gold mb-3"></i>
                            <h5 class="card-title mysecret-card-title">Content Viewed (last 30 Days)</h5>
                            <p class="card-text mysecret-card-text display-5">42</p>
                        </div>
                    </div>
                </a>
                <a href="messages_fan.php">
                    <div class="col">
                        <div class="card mysecret-card h-100 p-4">
                            <i class="bi bi-chat-text-fill display-1 mysecret-gold mb-3"></i>
                            <h5 class="card-title mysecret-card-title">Messages Send</h5>
                            <p class="card-text mysecret-card-text display-5">18</p>
                        </div>
                    </div>
                </a>
                <a href="unread_notifications.php">
                    <div class="col">
                        <div class="card mysecret-card h-100 p-4">
                            <i class="bi bi-bell-fill display-4 mysecret-gold mb-3"></i>
                            <h5 class="card-title mysecret-card-title">Unread notifications </h5>
                            <p class="card-text mysecret-card-text display-5">3</p>
                        </div>
                    </div>
                </a>
                <a href="saved_post.php">
                    <div class="col">
                        <div class="card mysecret-card h-100 p-4">
                            <i class="bi bi-bookmark-fill display-1 mysecret-gold mb-3"></i>
                            <h5 class="card-title mysecret-card-title">Saved post</h5>
                            <p class="card-text mysecret-card-text display-5">25</p>
                        </div>
                    </div>
                </a>
                <a href="liked_content.php">
                    <div class="col">
                        <div class="card mysecret-card h-100 p-4">
                            <i class="bi bi-heart-fill display-1 mysecret-gold mb-3"></i>
                            <h5 class="card-title mysecret-card-title">Liked content</h5>
                            <p class="card-text mysecret-card-text display-5">87</p>
                        </div>
                    </div>
                </a>
                <a href="comented_post.php">
                    <div class="col">
                        <div class="card mysecret-card h-100 p-4">
                            <i class="bi bi-chat-left-text-fill display-1 mysecret-gold mb-3"></i>
                            <h5 class="card-title mysecret-card-title">Comented Post</h5>
                            <p class="card-text mysecret-card-text display-5">18</p>
                        </div>
                    </div>
                </a>
                <a href="followed_creators.php">
                    <div class="col">
                        <div class="card mysecret-card h-100 p-4">
                            <i class="bi bi-person-check-fill display-1 mysecret-gold mb-3"></i>
                            <h5 class="card-title mysecret-card-title">followed creators</h5>
                            <p class="card-text mysecret-card-text display-5">12</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <hr class="m5 mysecret-divider">

        <section class="mb-5">
    <h2 class="text-center mb-4 mysecret-section-title">Quick Actions</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
            <div class="card mysecret-card h-100 text-center p-4">
                <i class="bi bi-compass display-4 mysecret-gold mb-3"></i>
                <h5 class="card-title mysecret-card-title">Discover Creators</h5>
                <p class="card-text mysecret-card-text">Find new artists, writers, and content creators.</p>
                <a href="#" class="btn mysecret-btn-primary mt-3"><i class="bi bi-binoculars-fill me-2"></i>Explore Content</a>
            </div>
        </div>
        <div class="col">
            <div class="card mysecret-card h-100 text-center p-4">
                <i class="bi bi-star-fill display-4 mysecret-gold mb-3"></i>
                <h5 class="card-title mysecret-card-title">Manage Subscriptions</h5>
                <p class="card-text mysecret-card-text">View, renew, or cancel your active subscriptions.</p>
                <a href="manage_subscriptions.php" class="btn mysecret-btn-outline mt-3"><i class="bi bi-credit-card me-2"></i>My Subscriptions</a>
            </div>
        </div>
        <div class="col">
            <div class="card mysecret-card h-100 text-center p-4">
                <i class="bi bi-bookmark-fill display-4 mysecret-gold mb-3"></i>
                <h5 class="card-title mysecret-card-title">Saved Content</h5>
                <p class="card-text mysecret-card-text">Access your favorite posts and content saved for later.</p>
                <a href="saved_post.php" class="btn mysecret-btn-outline mt-3"><i class="bi bi-collection-fill me-2"></i>View Saved</a>
            </div>
        </div>
        <div class="col">
            <div class="card mysecret-card h-100 text-center p-4">
                <i class="bi bi-envelope-fill display-4 mysecret-gold mb-3"></i>
                <h5 class="card-title mysecret-card-title">My Messages</h5>
                <p class="card-text mysecret-card-text">Read and reply to direct messages from creators.</p>
                <a href="messages_fan.php" class="btn mysecret-btn-primary mt-3"><i class="bi bi-chat-text me-2"></i>Check Inbox</a>
            </div>
        </div>
        <div class="col">
            <div class="card mysecret-card h-100 text-center p-4">
                <i class="bi bi-bell-fill display-4 mysecret-gold mb-3"></i>
                <h5 class="card-title mysecret-card-title">Notifications</h5>
                <p class="card-text mysecret-card-text">See updates on new posts, comments, and platform activity.</p>
                <a href="notifications.php" class="btn mysecret-btn-outline mt-3"><i class="bi bi-bell me-2"></i>View Alerts</a>
            </div>
        </div>
        <div class="col">
            <div class="card mysecret-card h-100 text-center p-4">
                <i class="bi bi-gear display-4 mysecret-gold mb-3"></i>
                <h5 class="card-title mysecret-card-title">Account Settings</h5>
                <p class="card-text mysecret-card-text">Update your profile, password, and preferences.</p>
                <a href="settings.php" class="btn mysecret-btn-primary mt-3"><i class="bi bi-person-circle me-2"></i>Edit Profile</a>
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