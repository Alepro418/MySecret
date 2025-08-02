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
    .mysecret-header {
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('Assets/content_banner_placeholder.jpg') no-repeat center center/cover; /* Placeholder banner for content page */
        color: white;
        padding: 80px 0;
        text-align: center;
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
    /* ADD THIS NEW CSS RULE */
    .mysecret-section-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        color: #ffc107;
        margin-bottom: 2rem;
        text-align: center; /* This centers the text */
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
                        <a class="nav-link mysecret-nav-link" href="#"><i class="bi bi-person-x-fill me-2"></i>Log out</a>
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

    <header class="mysecret-header">
        <div class="container">
            <h1 class="display-3 mysecret-title">Content Library</h1>
            <p class="lead mysecret-subtitle">Manage all your uploaded photos, videos, and exclusive content.</p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <section class="mb-5">
            <h2 class="mysecret-section-title">Your Content</h2>
            <div class="text-end mb-4">
                <a href="create_content.php" class="btn mysecret-btn-primary"><i class="bi bi-plus-circle me-2"></i>Upload New Content</a>
            </div>

            <div class="row mb-4 align-items-center">
                <div class="col-md-6">
                    <input type="text" class="form-control mysecret-form-control" placeholder="Search content by title or tag...">
                </div>
                <div class="col-md-3">
                    <select class="form-select mysecret-form-control">
                        <option selected>All Content Types</option>
                        <option>Photos</option>
                        <option>Videos</option>
                        <option>Audio</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select mysecret-form-control">
                        <option selected>Sort by Date (Newest)</option>
                        <option>Sort by Date (Oldest)</option>
                        <option>Sort by Views</option>
                        <option>Sort by Likes</option>
                    </select>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card mysecret-card mysecret-content-item h-100">
                        <img src="Assets/content_placeholder_1.jpg" class="card-img-top" alt="Content Title 1">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Exclusive Photoshoot: Summer Vibes</h5>
                            <p class="card-text mysecret-card-text small mb-2">Uploaded: 2025-07-01 | Views: 1,500 | Likes: 250</p>
                            <p class="card-text mysecret-card-text">Dive into the summer spirit with these stunning, never-before-seen photos from my recent shoot.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a href="#" class="btn mysecret-btn-outline btn-sm"><i class="bi bi-pencil-square me-1"></i>Edit</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash me-1"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-card mysecret-content-item h-100">
                        <img src="Assets/content_placeholder_2.jpg" class="card-img-top" alt="Content Title 2">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Behind the Scenes: My Daily Routine</h5>
                            <p class="card-text mysecret-card-text small mb-2">Uploaded: 2025-06-25 | Views: 2,100 | Likes: 380</p>
                            <p class="card-text mysecret-card-text">A personal look at my typical day, showing you what goes on behind the camera.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a href="#" class="btn mysecret-btn-outline btn-sm"><i class="bi bi-pencil-square me-1"></i>Edit</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash me-1"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-card mysecret-content-item h-100">
                        <img src="Assets/content_placeholder_3.jpg" class="card-img-top" alt="Content Title 3">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Q&A Session: Your Questions Answered!</h5>
                            <p class="card-text mysecret-card-text small mb-2">Uploaded: 2025-06-18 | Views: 950 | Likes: 120</p>
                            <p class="card-text mysecret-card-text">I answered your most asked questions in this fun and revealing video.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a href="#" class="btn mysecret-btn-outline btn-sm"><i class="bi bi-pencil-square me-1"></i>Edit</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash me-1"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-card mysecret-content-item h-100">
                        <img src="Assets/content_placeholder_4.jpg" class="card-img-top" alt="Content Title 4">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Fitness Journey Update: Progress & Tips</h5>
                            <p class="card-text mysecret-card-text small mb-2">Uploaded: 2025-06-10 | Views: 1,800 | Likes: 300</p>
                            <p class="card-text mysecret-card-text">Sharing my latest fitness achievements and tips to help you on your own journey.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a href="#" class="btn mysecret-btn-outline btn-sm"><i class="bi bi-pencil-square me-1"></i>Edit</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash me-1"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mysecret-card mysecret-content-item h-100">
                        <img src="Assets/content_placeholder_5.jpg" class="card-img-top" alt="Content Title 5">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Morning Routine (Audio Only)</h5>
                            <p class="card-text mysecret-card-text small mb-2">Uploaded: 2025-06-05 | Views: 600 | Likes: 80</p>
                            <p class="card-text mysecret-card-text">A relaxing audio guide to starting your day right, exclusively for my gold-tier subscribers.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a href="#" class="btn mysecret-btn-outline btn-sm"><i class="bi bi-pencil-square me-1"></i>Edit</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash me-1"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link mysecret-btn-outline" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active" aria-current="page"><a class="page-link mysecret-btn-primary" href="#">1</a></li>
                    <li class="page-item"><a class="page-link mysecret-btn-outline" href="#">2</a></li>
                    <li class="page-item"><a class="page-link mysecret-btn-outline" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link mysecret-btn-outline" href="#">Next</a>
                    </li>
                </ul>
            </nav>
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