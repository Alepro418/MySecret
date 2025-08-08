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
        /* Floating Button Styles */
        .floating-button {
            position: fixed; /* Makes the button float */
            bottom: 20px; /* Distance from the bottom of the viewport */
            right: 40px; /* Distance from the right of the viewport */
            z-index: 1000; /* Ensures the button is above other content */
            border-radius: 50px; /* Makes it a pill shape */
            padding: 10px 20px; /* Adjust padding as needed */
            font-size: 1rem; /* Adjust font size as needed */
            background-color: #ffc107; /* Gold color, matching your theme */
            color: #212529; /* Dark text for contrast */
            box-shadow: 0 4px 8px rgba(0,0,0,0.3); /* Subtle shadow for depth */
            text-decoration: none; /* Remove underline for link */
            display: flex; /* For icon and text alignment */
            align-items: center; /* Vertically align icon and text */
            transition: background-color 0.3s ease; /* Smooth hover effect */
        }

        .floating-button:hover {
            background-color: #e0a800; /* Slightly darker gold on hover */
            color: #212529; /* Maintain dark text color on hover */
        }

        .floating-button i {
            margin-right: 8px; /* Space between icon and text */
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
            <h1 class="display-3 mysecret-title">Creator Dashboard</h1>
            <p class="lead mysecret-subtitle">Manage your profile, content, and connect with your fans.</p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <div class="text-center mb-5">
            <img src="Assets/Test_1.jpg" alt="Creator Avatar" class="mysecret-profile-avatar img-fluid">
            <h2 class="mt-3 mb-1 mysecret-section-title">Aisha Sofey <i class="bi bi-gem mysecret-gold ms-2"></i></h2>
            <p class="text-muted">@aishasofeyofficial</p>
            <p class="lead mysecret-card-text">"My names Aishah, your tiny little Asian waifu with really big legs 😣
                I’ll be showing you whatever you want as long as you’re nice to me 💕
                SHOWING EVERYTHING JUST FOR YOU 😉"</p>
            <button class="btn mysecret-btn-outline mt-3"><i class="bi bi-pencil-square me-2"></i>Edit Profile</button>
        </div>

        <hr class="m5 mysecret-divider">

        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">Overview</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 text-center">
                <div class="col">
                    <div class="card mysecret-card h-100 p-4">
                        <i class="bi bi-people-fill display-4 mysecret-gold mb-3"></i>
                        <h5 class="card-title mysecret-card-title">Total Subscribers</h5>
                        <p class="card-text mysecret-card-text display-5">1,234</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100 p-4">
                        <i class="bi bi-currency-dollar display-4 mysecret-gold mb-3"></i>
                        <h5 class="card-title mysecret-card-title">Earnings (This Month)</h5>
                        <p class="card-text mysecret-card-text display-5">5,678</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100 p-4">
                        <i class="bi bi-heart-fill display-4 mysecret-gold mb-3"></i>
                        <h5 class="card-title mysecret-card-title">Liked content (Last 30 Days)</h5>
                        <p class="card-text mysecret-card-text display-5">15,900</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100 p-4">
                        <i class="bi bi-chat-dots display-4 mysecret-gold mb-3"></i>
                        <h5 class="card-title mysecret-card-title">Unread Messages</h5>
                        <p class="card-text mysecret-card-text display-5">7</p>
                    </div>
                </div>
            </div>
        </section>

        <hr class="m5 mysecret-divider">

        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">Quick Actions</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card mysecret-card h-100 text-center p-4">
                        <i class="bi bi-cloud-upload display-4 mysecret-gold mb-3"></i>
                        <h5 class="card-title mysecret-card-title">Upload New Content</h5>
                        <p class="card-text mysecret-card-text">Add new photos, videos, or audio to your page.</p>
                        <a href="create_content.php" class="btn mysecret-btn-primary mt-3"><i class="bi bi-plus-circle me-2"></i>Upload Content</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100 text-center p-4">
                        <i class="bi bi-images display-4 mysecret-gold mb-3"></i>
                        <h5 class="card-title mysecret-card-title">Manage Content Library</h5>
                        <p class="card-text mysecret-card-text">Edit, delete, or organize your existing content.</p>
                        <a href="manage_content.php" class="btn mysecret-btn-outline mt-3"><i class="bi bi-grid-fill me-2"></i>View Library</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100 text-center p-4">
                        <i class="bi bi-graph-up display-4 mysecret-gold mb-3"></i>
                        <h5 class="card-title mysecret-card-title">View Statistics</h5>
                        <p class="card-text mysecret-card-text">Detailed analytics on your performance and audience.</p>
                        <a href="view_statistic.php" class="btn mysecret-btn-outline mt-3"><i class="bi bi-bar-chart-line me-2"></i>Analytics</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100 text-center p-4">
                        <i class="bi bi-person-check-fill display-4 mysecret-gold mb-3"></i>
                        <h5 class="card-title mysecret-card-title">Manage Subscriptions</h5>
                        <p class="card-text mysecret-card-text">Adjust subscription tiers, pricing, and offers.</p>
                        <a href="manage_subscribers.php" class="btn mysecret-btn-primary mt-3"><i class="bi bi-credit-card me-2"></i>Edit Subscriptions</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100 text-center p-4">
                        <i class="bi bi-envelope-fill display-4 mysecret-gold mb-3"></i>
                        <h5 class="card-title mysecret-card-title">Messages & DMs</h5>
                        <p class="card-text mysecret-card-text">Communicate directly with your subscribers.</p>
                        <a href="messages_creator.php" class="btn mysecret-btn-outline mt-3"><i class="bi bi-chat-text me-2"></i>View Messages</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100 text-center p-4">
                        <i class="bi bi-gear display-4 mysecret-gold mb-3"></i>
                        <h5 class="card-title mysecret-card-title">Profile Settings</h5>
                        <p class="card-text mysecret-card-text">Update your bio, profile picture, and account details.</p>
                        <a href="creator_settings.php" class="btn mysecret-btn-primary mt-3"><i class="bi bi-pencil-square me-2"></i>Edit Profile</a>
                    </div>
                </div>
            </div>
        </section>

        <hr class="mb-5 mysecret-divider">

        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">Latest Comments</h2>
            <div class="list-group mysecret-card">
                <a href="#" class="list-group-item list-group-item-action mysecret-message-item d-flex gap-3 py-3" aria-current="true">
                    <img src="https://via.placeholder.com/50/333333/F5F5F5?text=U1" alt="User Avatar" width="32" height="32" class="rounded-circle flex-shrink-0">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0 mysecret-gold">FanaticFan</h6>
                            <p class="mb-0 opacity-75 mysecret-card-text">"Your latest post was incredible! Loved the new style."</p>
                        </div>
                        <small class="opacity-50 text-nowrap mysecret-card-text">3 days ago</small>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action mysecret-message-item d-flex gap-3 py-3">
                    <img src="https://via.placeholder.com/50/333333/F5F5F5?text=U2" alt="User Avatar" width="32" height="32" class="rounded-circle flex-shrink-0">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0 mysecret-gold">Secret Admirer</h6>
                            <p class="mb-0 opacity-75 mysecret-card-text">"Can't wait for your next series!"</p>
                        </div>
                        <small class="opacity-50 text-nowrap mysecret-card-text">1 week ago</small>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action mysecret-message-item d-flex gap-3 py-3">
                    <img src="https://via.placeholder.com/50/333333/F5F5F5?text=U3" alt="User Avatar" width="32" height="32" class="rounded-circle flex-shrink-0">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0 mysecret-gold">GoldTierMember</h6>
                            <p class="mb-0 opacity-75 mysecret-card-text">"Just subscribed to the highest tier, worth every penny!"</p>
                        </div>
                        <small class="opacity-50 text-nowrap mysecret-card-text">2 weeks ago</small>
                    </div>
                </a>
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