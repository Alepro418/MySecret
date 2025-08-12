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
        body {
            background-color: #1a1a1a; /* Dark background similar to MySecret theme */
            color: #f8f9fa; /* Light text */
        }
        .mysecret-section-title-profile {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #ffc107; /* Gold color */
            margin-bottom: 2rem;
            text-align: center;
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
        .mysecret-card {
            background-color: #212529; /* Darker card background */
            color: white;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            border-radius: 8px;
        }
        .mysecret-form-check-input:checked {
            background-color: #ffc107; /* Gold for selected checkboxes */
            border-color: #ffc107;
        }
        .mysecret-btn-primary {
            background-color: #ffc107; /* Gold primary button */
            border-color: #ffc107;
            color: #212529; /* Dark text on gold button */
            font-weight: bold;
        }
        .mysecret-btn-primary:hover {
            background-color: #e0a800; /* Darker gold on hover */
            border-color: #e0a800;
        }
        /* CHANGE HERE: Make labels clearer */
        .form-check-label {
            color: #ffffff; /* Pure white for better clarity */
            /* Or you could try a bright gold if you want them to stand out more: */
            /* color: #ffea00; */
        }
        .alert-success-custom {
            background-color: #28a745; /* Green for success */
            color: white;
            border-color: #28a745;
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

    <main class="container my-5 py-3">
        <h2 class="mysecret-section-title-profile">Notification Preferences</h2>
        <p class="text-center text-muted mb-5">Control how and when you receive MySecret alerts.</p>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card mysecret-card p-4">
                    <form id="notificationSettingsForm">
                        <div class="mb-4">
                            <h5 class="text-white mb-3"><i class="bi bi-envelope-fill me-2 mysecret-gold"></i>Email Notifications</h5>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="emailNewMessages" checked>
                                <label class="form-check-label" for="emailNewMessages">
                                    Receive notifications when you have new messages.
                                </label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="emailNewSubscribers">
                                <label class="form-check-label" for="emailNewSubscribers">
                                    Receive notifications when a new user subscribes.
                                </label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="emailPromotions">
                                <label class="form-check-label" for="emailPromotions">
                                    Receive emails with promotions and updates from MySecret.
                                </label>
                            </div>
                        </div>

                        <hr class="my-4" style="border-color: rgba(255, 193, 7, 0.3);">

                        <div class="mb-4">
                            <h5 class="text-white mb-3"><i class="bi bi-bell-fill me-2 mysecret-gold"></i>In-App Notifications</h5>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="appNewMessages" checked>
                                <label class="form-check-label" for="appNewMessages">
                                    Show in-app alerts for new messages.
                                </label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="appNewContent" checked>
                                <label class="form-check-label" for="appNewContent">
                                    Show in-app alerts for new content from creators.
                                </label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="appLikesComments">
                                <label class="form-check-label" for="appLikesComments">
                                    Show in-app alerts for "likes" and comments on your posts.
                                </label>
                            </div>
                        </div>

                        <hr class="my-4" style="border-color: rgba(255, 193, 7, 0.3);">

                        <div class="mb-4">
                            <h5 class="text-white mb-3"><i class="bi bi-calendar-check-fill me-2 mysecret-gold"></i>Reminders</h5>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="reminderSubscriptionRenewal" checked>
                                <label class="form-check-label" for="reminderSubscriptionRenewal">
                                    Receive subscription renewal reminders.
                                </label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="reminderUpcomingEvents">
                                <label class="form-check-label" for="reminderUpcomingEvents">
                                    Receive reminders for upcoming events.
                                </label>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn mysecret-btn-primary py-2">Save Preferences</button>
                        </div>

                        <div id="alertMessage" class="mt-4 alert alert-success-custom text-center d-none" role="alert">
                            Preferences saved successfully.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="mysecret-footer py-4 mt-5" style="text-align: center;">
        <div class="container">
            <p class="mb-2">&copy; 2025 MySecret. All rights reserved.</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Terms of Service</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Contact</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('notificationSettingsForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevents the form from actually submitting

            // This is where you would normally send the data to the server.
            // For this example, we just show a success message.

            const emailNewMessages = document.getElementById('emailNewMessages').checked;
            const emailNewSubscribers = document.getElementById('emailNewSubscribers').checked;
            const emailPromotions = document.getElementById('emailPromotions').checked;
            const appNewMessages = document.getElementById('appNewMessages').checked;
            const appNewContent = document.getElementById('appNewContent').checked;
            const appLikesComments = document.getElementById('appLikesComments').checked;
            const reminderSubscriptionRenewal = document.getElementById('reminderSubscriptionRenewal').checked;
            const reminderUpcomingEvents = document.getElementById('reminderUpcomingEvents').checked;

            console.log('Email Preferences:', {
                emailNewMessages,
                emailNewSubscribers,
                emailPromotions
            });
            console.log('App Preferences:', {
                appNewMessages,
                appNewContent,
                appLikesComments
            });
            console.log('Reminder Preferences:', {
                reminderSubscriptionRenewal,
                reminderUpcomingEvents
            });

            // Show the success message
            const alertMessage = document.getElementById('alertMessage');
            alertMessage.classList.remove('d-none'); // Show the alert div

            // Optional: hide the message after a few seconds
            setTimeout(() => {
                alertMessage.classList.add('d-none');
            }, 3000); // Hide after 3 seconds
        });
    </script>
    
</body>
</html>