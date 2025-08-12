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

        /* Styles for subscription cards - Renamed for more general use if needed */
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

        /* NEW STYLE FOR CENTERING */
        .center-content-div {
            max-width: 600px; /* Define un ancho máximo para el contenido */
            margin-left: auto;
            margin-right: auto;
            text-align: center; /* Centra el texto y elementos inline */
        }

        /* Style for the "empty" card to match the aesthetic */
        .mysecret-empty-card {
            background-color: #2d3135; /* Similar to mysecret-info-card */
            border: 1px solid #495057;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            padding: 40px 20px; /* Increased padding for better visual spacing */
            color: white;
            display: flex; /* Use flexbox for vertical centering of content */
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 200px; /* Give it a minimum height */
            margin-top: 3rem; /* Add more margin to push it down */
        }

        .mysecret-empty-card .mysecret-text {
            text-align: center;
            font-size: 1.1rem; /* Slightly larger text */
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 20px; /* Space between text and button */
        }

        .mysecret-empty-card .btn {
            font-size: 1.1rem; /* Larger button */
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
            <h2 class="text-center mb-4 mysecret-section-title">Your Recent Activity</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col-12 mb-4">
                    <div class="card mysecret-info-card h-100 p-4 text-center d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-eye-fill display-3 mysecret-gold mb-3"></i>
                        <h4 class="card-title mysecret-gold-text mb-2">You've explored a lot!</h4>
                        <p class="card-text mysecret-card-text fs-4 mb-3">In the last 30 days, you have seen <span class="mysecret-gold-text">42</span> pieces of content.</p>
                        <p class="card-text mysecret-card-text-small text-muted">Stay up to date with what interests you.</p>
                        <a href="#" class="btn mysecret-btn-primary mt-3"><i class="bi bi-clock-history me-2"></i>See Full History</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-info-card h-100">
                        <img src="Assets/content_example1.jpeg" class="card-img-top" alt="Content Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title mysecret-gold-text">Article: "The 5 Trends in Digital Art"</h5>
                            <p class="card-text text-muted small"><i class="bi bi-person-fill"></i> @creator_one | <i class="bi bi-calendar-fill"></i> Viewed: June 28, 2025</p>
                            <p class="card-text mysecret-card-text-small">Discover the innovations that are transforming the art world. <span class="badge bg-secondary">#DigitalArt</span></p>
                            <a href="#" class="btn mysecret-btn-outline btn-sm mt-2"><i class="bi bi-arrow-right-circle-fill"></i> Go to Content</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-info-card h-100">
                        <img src="Assets/content_example2.jpeg" class="card-img-top" alt="Content Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title mysecret-gold-text">Video: "My Creative Process for Illustrations"</h5>
                            <p class="card-text text-muted small"><i class="bi bi-person-fill"></i> @creator_two_art | <i class="bi bi-calendar-fill"></i> Viewed: June 25, 2025</p>
                            <p class="card-text mysecret-card-text-small">A behind-the-scenes look at how I bring my characters to life. <span class="badge bg-secondary">#Illustration</span></p>
                            <a href="#" class="btn mysecret-btn-outline btn-sm mt-2"><i class="bi bi-arrow-right-circle-fill"></i> Go to Content</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-info-card h-100">
                        <img src="Assets/content_example3.jpeg" class="card-img-top" alt="Content Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title mysecret-gold-text">Podcast: "Inspiring Stories of Musicians"</h5>
                            <p class="card-text text-muted small"><i class="bi bi-person-fill"></i> @music_vibes | <i class="bi bi-calendar-fill"></i> Viewed: June 20, 2025</p>
                            <p class="card-text mysecret-card-text-small">Special episode featuring interviews with emerging talents. <span class="badge bg-secondary">#Podcast</span></p>
                            <a href="#" class="btn mysecret-btn-outline btn-sm mt-2"><i class="bi bi-arrow-right-circle-fill"></i> Go to Content</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-info-card h-100">
                        <img src="Assets/content_example4.jpeg" class="card-img-top" alt="Content Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title mysecret-gold-text">Publication: "Tips for Beginning Writers"</h5>
                            <p class="card-text text-muted small"><i class="bi bi-person-fill"></i> @writer_pro | <i class="bi bi-calendar-fill"></i> Viewed: June 15, 2025</p>
                            <p class="card-text mysecret-card-text-small">Overcome writer's block with these practical tips. <span class="badge bg-secondary">#Writing</span></p>
                            <a href="#" class="btn mysecret-btn-outline btn-sm mt-2"><i class="bi bi-arrow-right-circle-fill"></i> Go to Content</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-info-card h-100">
                        <img src="Assets/content_example5.jpeg" class="card-img-top" alt="Content Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title mysecret-gold-text">Photo Gallery: "Urban Landscapes"</h5>
                            <p class="card-text text-muted small"><i class="bi bi-person-fill"></i> @city_photographer | <i class="bi bi-calendar-fill"></i> Viewed: June 10, 2025</p>
                            <p class="card-text mysecret-card-text-small">A collection of my best shots of the city at sunset. <span class="badge bg-secondary">#Photograph</span></p>
                            <a href="#" class="btn mysecret-btn-outline btn-sm mt-2"><i class="bi bi-arrow-right-circle-fill"></i> Go to Content</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 center-content-div">
                    <div class="mysecret-empty-card">
                        <i class="bi bi-journal-check display-3 mysecret-gold mb-3"></i> <div class="mysecret-text">
                            <p class="lead mb-3">Looks like you haven't watched any content in a while.</p> <p class="mysecret-card-text-small">Discover the latest news and be the first to know!</p>
                        </div>
                        <a href="#" class="btn mysecret-btn-primary"><i class="bi bi-search me-2"></i>Explore Content Now</a> </div>
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