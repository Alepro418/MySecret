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

        /* Styles for general info cards (formerly subscription cards) */
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

        /* Styles for unread notifications */
        .mysecret-notification-item {
            background-color: #2d3135;
            border: 1px solid #495057;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start; /* Align items to the top */
            gap: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            transition: background-color 0.2s ease, border-color 0.2s ease;
            position: relative; /* For the "new" badge */
        }
        .mysecret-notification-item:hover {
            background-color: #343a40;
            border-color: #ffc107;
        }
        .mysecret-notification-item .notification-icon {
            font-size: 2rem; /* Slightly larger icon */
            color: #ffc107;
            min-width: 40px; /* Ensure icon doesn't shrink too much */
            text-align: center;
        }
        .mysecret-notification-item .notification-content {
            flex-grow: 1;
        }
        .mysecret-notification-item .notification-content p {
            margin-bottom: 5px; /* Less space between title and description */
            font-size: 1.05rem;
        }
        .mysecret-notification-item .notification-content .notification-description {
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.8);
        }
        .mysecret-notification-item .notification-time {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.5);
            white-space: nowrap;
            margin-top: 5px; /* Space below content if actions are separate */
            display: block; /* Ensure it takes full width if needed */
        }
        .mysecret-notification-item .notification-actions {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 8px; /* Space between buttons */
            margin-left: 15px; /* Space from content */
        }
        .mysecret-notification-item .notification-actions .btn {
            padding: .35rem .9rem; /* Slightly larger buttons */
            font-size: .8rem;
        }
        .notification-unread-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #dc3545; /* Red color for unread */
            color: white;
            padding: .2em .6em;
            border-radius: .25rem;
            font-size: 0.7rem;
            font-weight: bold;
            z-index: 1;
        }
        /* Style for the "No unread notifications" card */
        .mysecret-no-notifications-card {
            background-color: #2d3135;
            border: 1px solid #495057;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }
        .mysecret-no-notifications-card .bi {
            font-size: 3rem;
            color: #ffc107;
            margin-bottom: 20px;
        }
        .mysecret-no-notifications-card p {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
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
                        <a class="nav-link mysecret-nav-link" href="../../processes/log_out.php"><i class="bi bi-person-x-fill me-2"></i>Log out</a>
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
            <h1 class="display-3 mysecret-title">User Dashboard</h1>
            <p class="lead mysecret-subtitle">Manage your profile and connect with your favorite creators.</p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <div class="text-center mb-5">
            <img src="Assets/user.jpeg" alt="Creator Avatar" class="mysecret-profile-avatar img-fluid">
            <h2 class="mt-3 mb-1 mysecret-section-title">Juanito Alcachofa <i class="bi bi-user mysecret-gold ms-2"></i></h2>
            <p class="text-muted">@juanitoalcachofa</p>
            <p class="lead mysecret-card-text">Here you could include a short biography of the user, their interests, or how long they've been on the platform.</p>
            <button class="btn mysecret-btn-outline mt-3"><i class="bi bi-pencil-square me-2"></i>Edit Profile</button>
        </div>

        <hr class="my-5 mysecret-divider">

        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">Your Recent Notifications <i class="bi bi-bell-fill mysecret-gold ms-2"></i></h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="mysecret-notification-item">
                        <span class="notification-unread-badge">NEW</span>
                        <div class="notification-icon">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                        <div class="notification-content">
                            <p class="mb-1"><span class="mysecret-gold-text">New content from @creador_uno!</span></p>
                            <p class="notification-description">"Tips to Improve Your Creativity" has been published.</p>
                            <a href="#" class="mysecret-card-text-small text-muted text-decoration-none d-block mt-1">See post</a>
                        </div>
                        <div class="notification-actions">
                            <span class="notification-time">5 hours ago</span>
                            <button class="btn mysecret-btn-primary btn-sm"><i class="bi bi-check-circle me-1"></i> Mark as read</button>
                        </div>
                    </div>

                    <div class="mysecret-notification-item">
                        <span class="notification-unread-badge">NEW</span>
                        <div class="notification-icon">
                            <i class="bi bi-chat-dots"></i>
                        </div>
                        <div class="notification-content">
                            <p class="mb-1"><span class="mysecret-gold-text">You have a new message from @music_vibes.</span></p>
                            <p class="notification-description">He's sent you a direct message. Don't miss it!</p>
                            <a href="#" class="mysecret-card-text-small text-muted text-decoration-none d-block mt-1">Go to Messages</a>
                        </div>
                        <div class="notification-actions">
                            <span class="notification-time">1 day ago</span>
                            <button class="btn mysecret-btn-primary btn-sm"><i class="bi bi-check-circle me-1"></i> Mark as read</button>
                        </div>
                    </div>

                    <div class="mysecret-notification-item">
                        <div class="notification-icon">
                            <i class="bi bi-credit-card"></i>
                        </div>
                        <div class="notification-content">
                            <p class="mb-1"><span class="mysecret-gold-text">Subscription renewal!</span></p>
                            <p class="notification-description">Your @fotografo_city subscription will renew on July 5, 2025, for $8.00.</p>
                            <a href="#" class="mysecret-card-text-small text-muted text-decoration-none d-block mt-1">Manage subscription</a>
                        </div>
                        <div class="notification-actions">
                            <span class="notification-time">3 days ago</span>
                            <button class="btn mysecret-btn-outline btn-sm"><i class="bi bi-check-circle me-1"></i> Mark as read</button>
                        </div>
                    </div>

                    <div class="mysecret-notification-item">
                        <div class="notification-icon">
                            <i class="bi bi-chat-text"></i>
                        </div>
                        <div class="notification-content">
                            <p class="mb-1"><span class="mysecret-gold-text">@otro_fan_123 commented on your activity.</span></p>
                            <p class="notification-description">"I loved your review of @creador_uno's latest video!"</p>
                            <a href="#" class="mysecret-card-text-small text-muted text-decoration-none d-block mt-1">See comment</a>
                        </div>
                        <div class="notification-actions">
                            <span class="notification-time">Hace 5 días</span>
                            <button class="btn mysecret-btn-outline btn-sm"><i class="bi bi-check-circle me-1"></i> Mark as read</button>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-4">
                        <div class="mysecret-no-notifications-card">
                            <i class="bi bi-check-all"></i>
                            <p class="lead mb-0">Congratulations! You have no pending notifications.</p>
                            <p class="mysecret-card-text-small text-muted mt-2">Stay up to date by checking this section regularly..</p>
                            <a href="#" class="btn mysecret-btn-primary mt-3"><i class="bi bi-bell me-2"></i>See all notifications</a>
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