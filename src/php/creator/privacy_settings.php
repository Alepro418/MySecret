<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../public/assets/images/logo v1.3.ico" type="image/x-icon">
    <title>MySecret - Where your fantasy is our reality</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
    <style>
        a { text-decoration: none; }
        .mysecret-profile-header {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('Assets/profile_banner_placeholder.jpg') no-repeat center center/cover;
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
        .mysecret-section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #ffc107;
            margin-bottom: 2rem;
            text-align: center;
        }
        .mysecret-form-check-label {
            color: white;
        }
        .form-check-input:checked {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .form-select {
            background-color: #343a40;
            border-color: #495057;
            color: white;
        }
        .form-select:focus {
            background-color: #343a40;
            border-color: #ffc107;
            box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25);
            color: white;
        }
        .mysecret-setting-card {
           background-color: #212529; /* Darker background for stats */
            /*color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);*/ 
        }
        .mysecret-setting-card, p{
            color: white;
        }       
        small {
            color: orange;
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
                        <a class="nav-link mysecret-nav-link" href="notifications.php"><i class="bi bi-bell-fill me-2"></i>Notifications</a>
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
            <h1 class="display-3 mysecret-title">Privacy Settings</h1>
            <p class="lead mysecret-subtitle">Control who sees your information and activity.</p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <section class="mb-5">
            <h2 class="mysecret-section-title-profile mb-4">Profile Visibility</h2>
            <div class="card p-4 mb-4 mysecret-setting-card">
                <h5 class="mysecret-gold">Who can see your profile?</h5>
                <p>Define the general visibility of your profile on MySecret.</p>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="profileVisibilitySwitch" checked>
                    <label class="form-check-label mysecret-form-check-label" style="color: #000000" for="profileVisibilitySwitch">Public Profile (Visible to everyone)</label>
                </div>
                <small>If disabled, only your subscribers and approved users will be able to see your full profile.</small>
            </div>

            <div class="card p-4 mb-4 mysecret-setting-card">
                <h5 class="mysecret-gold">Profile Details</h5>
                <p>Choose which specific information on your profile is visible.</p>
                <div class="mb-3">
                    <label for="bioVisibility" class="form-label mysecret-form-label">Who can see your bio?</label>
                    <select class="form-select mysecret-form-control" id="bioVisibility">
                        <option selected>Everyone</option>
                        <option>Subscribers only</option>
                        <option>Only users I follow</option>
                        <option>Nobody</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="subscriptionsVisibility" class="form-label mysecret-form-label">Who can see your active subscriptions?</label>
                    <select class="form-select mysecret-form-control" id="subscriptionsVisibility">
                        <option selected>Only you</option>
                        <option>Subscribers only</option>
                        <option>Everyone</option>
                    </select>
                </div>
            </div>
        </section>

        <hr class="m5 mysecret-divider">

        <section class="mb-5">
            <h2 class="mysecret-section-title-profile mb-4">Messages and Contact</h2>
            <div class="card p-4 mb-4 mysecret-setting-card">
                <h5 class="mysecret-gold">Who can send you messages?</h5>
                <p>Control who can initiate conversations with you.</p>
                <div class="mb-3">
                    <select class="form-select mysecret-form-control" id="messagePermissions">
                        <option selected>Everyone</option>
                        <option>Subscribers only</option>
                        <option>Only users I follow</option>
                        <option>Nobody</option>
                    </select>
                </div>
            </div>
            <div class="card p-4 mb-4 mysecret-setting-card">
                <h5 class="mysecret-gold">Block Management</h5>
                <p>View and manage the list of users you have blocked.</p>
                <a href="blocked_users.php" class="btn mysecret-btn-outline mt-3"><i class="bi bi-person-slash me-2"></i>View Blocked Users</a>
            </div>
        </section>

        <hr class="m5 mysecret-divider">

        <section class="mb-5">
            <h2 class="mysecret-section-title-profile mb-4">Data and Activity</h2>
            <div class="card p-4 mb-4 mysecret-setting-card">
                <h5 class="mysecret-gold">Activity Visibility</h5>
                <p>Choose whether your activity (likes, comments) is visible to others.</p>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="activityVisibilitySwitch" checked>
                    <label class="form-check-label mysecret-form-check-label" style="color: #000000" for="activityVisibilitySwitch">Show my activity on the public feed</label>
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="likesVisibilitySwitch">
                    <label class="form-check-label mysecret-form-check-label" style="color: #000000" for="likesVisibilitySwitch">Hide my "likes" on posts</label>
                </div>
            </div>
            <div class="card p-4 mb-4 mysecret-setting-card">
                <h5 class="mysecret-gold">Manage Personal Data</h5>
                <p>Request a copy of your data or manage its usage.</p>
                <a href="download_data.php" class="btn mysecret-btn-outline mt-3 me-2"><i class="bi bi-file-earmark-arrow-down-fill me-2"></i>Download My Data</a>
                <a href="data_usage_settings.php" class="btn mysecret-btn-outline mt-3"><i class="bi bi-clipboard-data-fill me-2"></i>Data Usage Preferences</a>
            </div>
        </section>

        <div class="text-center mt-5">
            <button class="btn mysecret-btn-gold-fill btn-lg px-5 py-3">Save Changes</button>
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