<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../public/assets/images/logo v1.3.ico" type="image/x-icon">
    <title>MySecret - Mis Notificaciones</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
    <style>
        /* Custom styles from previous pages (ensure these are in style.css for production) */
        .mysecret-profile-header {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('Assets/notifications_banner_placeholder.jpg') no-repeat center center/cover; /* Placeholder banner for notifications */
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
        .mysecret-section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #ffc107; /* Gold color for titles */
            margin-bottom: 2rem;
            text-align: center;
        }
        .mysecret-card {
            background-color: #212529;
            color: white;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            margin-bottom: 1.5rem; /* Space between notification cards */
        }
        .mysecret-card-title {
            color: #ffc107;
            font-weight: 700;
        }
        .mysecret-card-text {
            color: #ced4da;
        }
        .mysecret-text-small {
            font-size: 0.85em;
            color: #6c757d;
        }
        .mysecret-gold {
            color: #ffc107;
        }
        .mysecret-btn-outline {
            color: #ffc107;
            border-color: #ffc107;
        }
        .mysecret-btn-outline:hover {
            background-color: #ffc107;
            color: #212529;
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
        .mysecret-divider {
            border-top: 1px solid #495057;
            opacity: 0.5;
        }

        /* Specific styles for notifications */
        .notification-item {
            display: flex;
            align-items: flex-start;
            padding: 15px;
            border-bottom: 1px solid #343a40;
        }
        .notification-item:last-child {
            border-bottom: none;
        }
        .notification-icon {
            font-size: 1.5rem;
            margin-right: 15px;
            color: #ffc107; /* Gold for icons */
        }
        .notification-content {
            flex-grow: 1;
        }
        .notification-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
        }
        .notification-title {
            font-weight: bold;
            color: #ffc107;
            margin-bottom: 0;
        }
        .notification-time {
            font-size: 0.8em;
            color: #6c757d;
        }
        .notification-text {
            color: #ced4da;
            margin-bottom: 10px;
        }
        .notification-actions .btn {
            font-size: 0.9em;
            padding: 5px 10px;
        }
        .notification-read {
            background-color: #212529; /* Darker background for read notifications */
            opacity: 0.7;
        }
        .notification-unread {
            background-color: #343a40; /* Slightly lighter for unread */
            border-left: 5px solid #ffc107; /* Gold bar for unread */
        }
        .mysecret-navbar .nav-link.active {
            color: #ffc107 !important; /* Ensure active nav link is gold */
        }
    </style>
</head>
<body class="mysecret-body-fan">
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
                        <a class="nav-link mysecret-nav-link" href="index_creator.php"><i class="bi bi-house-door-fill me-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="subscriptions.php"><i class="bi bi-person-check-fill me-2"></i>Subscriptions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="messages_creator.php"><i class="bi bi-envelope-fill me-2"></i>Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link active" aria-current="page" href="notifications.php"><i class="bi bi-bell-fill me-2"></i>Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="creator_profile.php"><i class="bi bi-person-circle me-2"></i>My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="../../processes/log_out.php"><i class="bi bi-person-x-fill me-2"></i>Log out</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <img src="Assets/Test_1.jpg" alt="Creator avatar" class="mysecret-profile-avatar img-fluid">
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="mysecret-profile-header">
        <div class="container">
            <h1 class="display-3 mb-4 mysecret-title">Creator Notifications</h1>
            <p class="lead mb-5 mysecret-subtitle">Stay informed about your fans, content, and earnings.</p>
            <a href="#notifications-list" class="btn mysecret-btn-primary btn-lg"><i class="bi bi-eye-fill me-2"></i>View Recent Activity</a>
        </div>
    </header>

    <main class="container my-5 py-3">
        <section class="mb-5" id="notifications-list">
            <h2 class="text-center mb-4 mysecret-section-title">Recent Activity</h2>
            <div class="card mysecret-card p-0">
                <div class="card-body p-0">
                    <div class="notification-item notification-unread">
                        <i class="bi bi-person-plus-fill notification-icon"></i>
                        <div class="notification-content">
                            <div class="notification-header">
                                <h5 class="notification-title">New subscriber: John Doe</h5>
                                <span class="notification-time">5 minutes ago</span>
                            </div>
                            <p class="notification-text">John Doe has subscribed to your content. Welcome your new fan!</p>
                            <div class="notification-actions">
                                <a href="view_subscriber.php?id=johndoe" class="btn mysecret-btn-primary btn-sm"><i class="bi bi-person-fill me-1"></i>View Profile</a>
                            </div>
                        </div>
                    </div>

                    <div class="notification-item notification-unread">
                        <i class="bi bi-currency-dollar notification-icon"></i>
                        <div class="notification-content">
                            <div class="notification-header">
                                <h5 class="notification-title">New Tip from Jane Smith</h5>
                                <span class="notification-time">30 minutes ago</span>
                            </div>
                            <p class="notification-text">Jane Smith sent you a $5 tip with the message "Love your work!".</p>
                            <div class="notification-actions">
                                <a href="transactions.php" class="btn mysecret-btn-primary btn-sm"><i class="bi bi-wallet-fill me-1"></i>View Earnings</a>
                            </div>
                        </div>
                    </div>

                    <div class="notification-item notification-read">
                        <i class="bi bi-chat-text-fill notification-icon"></i>
                        <div class="notification-content">
                            <div class="notification-header">
                                <h5 class="notification-title">New comment on your post</h5>
                                <span class="notification-time">1 day ago</span>
                            </div>
                            <p class="notification-text">A fan commented on your latest post: "Summer Vibes Photoset".</p>
                            <div class="notification-actions">
                                <a href="view_post.php?id=126" class="btn mysecret-btn-outline btn-sm"><i class="bi bi-eye-fill me-1"></i>View post</a>
                            </div>
                        </div>
                    </div>

                    <div class="notification-item notification-read">
                        <i class="bi bi-check-circle-fill notification-icon"></i>
                        <div class="notification-content">
                            <div class="notification-header">
                                <h5 class="notification-title">Payout processed</h5>
                                <span class="notification-time">2 days ago</span>
                            </div>
                            <p class="notification-text">Your latest payout of $250.00 has been successfully processed.</p>
                            <div class="notification-actions">
                                <a href="transactions.php" class="btn mysecret-btn-outline btn-sm"><i class="bi bi-credit-card-fill me-1"></i>See Transactions</a>
                            </div>
                        </div>
                    </div>

                    <div class="notification-item notification-read">
                        <i class="bi bi-trophy-fill notification-icon"></i>
                        <div class="notification-content">
                            <div class="notification-header">
                                <h5 class="notification-title">Milestone Achieved!</h5>
                                <span class="notification-time">3 days ago</span>
                            </div>
                            <p class="notification-text">Congratulations, you've reached 100 subscribers! Keep up the great work.</p>
                            <div class="notification-actions">
                                <a href="creator_dashboard.php" class="btn mysecret-btn-outline btn-sm"><i class="bi bi-graph-up-arrow me-1"></i>View Dashboard</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="text-center mt-4">
                <button class="btn mysecret-btn-primary"><i class="bi bi-arrow-clockwise me-2"></i>Load old notifications</button>
                <button class="btn mysecret-btn-outline ms-2"><i class="bi bi-check-double me-2"></i>Mark all as read</button>
            </div>
        </section>
    </main>

    <footer class="mysecret-footer py-4 mt-5">
        <div class="container text-center">
            <p class="mb-2">&copy; 2025 MySecret. All rights reserved.</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Terms of Service</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Policy of Privacy</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Contact</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>