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
            <h1 class="display-3 mysecret-title">Manage Subscribers</h1>
            <p class="lead mysecret-subtitle">View and manage your active and past subscribers.</p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">Subscriber List</h2>

            <div class="mysecret-filter-bar d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
                <div class="flex-grow-1 w-100 w-md-auto">
                    <input type="text" class="form-control mysecret-form-control-dark" placeholder="Search by name or email...">
                </div>
                <div class="w-100 w-md-auto">
                    <select class="form-select mysecret-form-control-dark">
                        <option selected>Filter by Status</option>
                        <option value="active">Active</option>
                        <option value="canceled">Canceled</option>
                        <option value="expired">Expired</option>
                    </select>
                </div>
                <div class="w-100 w-md-auto">
                    <select class="form-select mysecret-form-control-dark">
                        <option selected>Filter by Tier</option>
                        <option value="bronze">Bronze</option>
                        <option value="silver">Silver</option>
                        <option value="gold">Gold</option>
                    </select>
                </div>
                <button class="btn mysecret-btn-outline w-100 w-md-auto"><i class="bi bi-funnel-fill me-2"></i>Apply Filters</button>
                <button class="btn mysecret-btn-primary w-100 w-md-auto"><i class="bi bi-download me-2"></i>Export CSV</button>
            </div>

            <div class="table-responsive mysecret-card p-3">
                <table class="table table-dark table-hover mysecret-subscriber-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subscriber</th>
                            <th scope="col">Tier</th>
                            <th scope="col">Status</th>
                            <th scope="col">Subscribed Since</th>
                            <th scope="col">Next Renewal / Last Payment</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40/333333/F5F5F5?text=U1" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">
                                    <span>FanaticFan</span>
                                </div>
                            </td>
                            <td>Gold</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>June 1, 2024</td>
                            <td>July 1, 2025 ($19.99)</td>
                            <td>
                                <button class="btn btn-sm btn-outline-info me-1" title="Message"><i class="bi bi-chat-fill"></i></button>
                                <button class="btn btn-sm btn-outline-warning me-1" title="Edit Subscription"><i class="bi bi-pencil-fill"></i></button>
                                <button class="btn btn-sm btn-outline-danger" title="Cancel Subscription"><i class="bi bi-x-circle-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40/333333/F5F5F5?text=U2" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">
                                    <span>ContentLoverX</span>
                                </div>
                            </td>
                            <td>Silver</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>May 15, 2024</td>
                            <td>June 15, 2025 ($9.99)</td>
                            <td>
                                <button class="btn btn-sm btn-outline-info me-1" title="Message"><i class="bi bi-chat-fill"></i></button>
                                <button class="btn btn-sm btn-outline-warning me-1" title="Edit Subscription"><i class="bi bi-pencil-fill"></i></button>
                                <button class="btn btn-sm btn-outline-danger" title="Cancel Subscription"><i class="bi bi-x-circle-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40/333333/F5F5F5?text=U3" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">
                                    <span>NewbieFan</span>
                                </div>
                            </td>
                            <td>Bronze</td>
                            <td><span class="badge bg-danger">Canceled</span></td>
                            <td>July 1, 2024</td>
                            <td>Last Payment: July 1, 2024 ($4.99)</td>
                            <td>
                                <button class="btn btn-sm btn-outline-info me-1" title="Message"><i class="bi bi-chat-fill"></i></button>
                                <button class="btn btn-sm btn-outline-success" title="Reinstate Subscription"><i class="bi bi-arrow-clockwise"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40/333333/F5F5F5?text=U4" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">
                                    <span>LongTermSupporter</span>
                                </div>
                            </td>
                            <td>Gold</td>
                            <td><span class="badge bg-warning text-dark">Expired</span></td>
                            <td>Jan 10, 2023</td>
                            <td>Last Payment: Jan 10, 2025 ($19.99)</td>
                            <td>
                                <button class="btn btn-sm btn-outline-info me-1" title="Message"><i class="bi bi-chat-fill"></i></button>
                                <button class="btn btn-sm btn-outline-success" title="Reinstate Subscription"><i class="bi bi-arrow-clockwise"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/40/333333/F5F5F5?text=U5" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">
                                    <span>MonthlyViewer</span>
                                </div>
                            </td>
                            <td>Bronze</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>March 20, 2025</td>
                            <td>July 20, 2025 ($4.99)</td>
                            <td>
                                <button class="btn btn-sm btn-outline-info me-1" title="Message"><i class="bi bi-chat-fill"></i></button>
                                <button class="btn btn-sm btn-outline-warning me-1" title="Edit Subscription"><i class="bi bi-pencil-fill"></i></button>
                                <button class="btn btn-sm btn-outline-danger" title="Cancel Subscription"><i class="bi bi-x-circle-fill"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <nav aria-label="Page navigation" class="mt-4">
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