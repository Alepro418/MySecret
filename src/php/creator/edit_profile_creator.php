<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../public/assets/images/logo v1.3.ico" type="image/x-icon">
    <title>MySecret - Where Your Fantasy is Our Reality</title>
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
<body translate="no">
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
            <h1 class="display-3 mysecret-title">Edit Creator Profile</h1>
            <p class="lead mysecret-subtitle">Customize your presence on MySecret.</p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <div class="text-center mb-5">
            <img src="Assets/Test_1.jpg" alt="Creator Avatar" class="mysecret-profile-avatar img-fluid">
            <p class="text-muted mt-2">Click the image to change your avatar</p>
        </div>
        
        <form action="save_profile.php" method="POST" enctype="multipart/form-data" class="mysecret-form">
            <div class="row g-4 mb-4"> 
                <div class="col-lg-6">
                    <div class="card mysecret-setting-card h-100 p-4">
                        <h5 class="mysecret-form-label mb-3">Personal Information</h5>
                        <div class="mb-3">
                            <label for="profileName" class="form-label mysecret-form-label">Username</label>
                            <input type="text" class="form-control mysecret-form-control" id="profileName" value="Aishah Sofey" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileHandle" class="form-label mysecret-form-label">Handle (@)</label>
                            <input type="text" class="form-control mysecret-form-control" id="profileHandle" value="@aishasofeyofficial" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileEmail" class="form-label mysecret-form-label">Email Address</label>
                            <input type="email" class="form-control mysecret-form-control" id="profileEmail" value="aishah.sofey@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileBio" class="form-label mysecret-form-label">Biography</label>
                            <textarea class="form-control mysecret-form-control" id="profileBio" rows="4">Welcome to my space on MySecret. Here I share exclusive content and connect directly with my most loyal followers. Thank you for your support!</textarea>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card mysecret-setting-card h-100 p-4">
                        <h5 class="mysecret-form-label mb-3">Creator Content</h5>
                        <div class="mb-3">
                            <label for="creatorPortfolio" class="form-label mysecret-form-label">Link to Portfolio/Social Media (Optional)</label>
                            <input type="url" class="form-control mysecret-form-control" id="creatorPortfolio" placeholder="e.g.: https://instagram.com/aishasofey" value="https://instagram.com/aishasofeyofficial">
                            <small class="form-text text-muted">Add a link where your subscribers can see more of your work.</small>
                        </div>
                        <div class="mb-3 mysecret-file-upload-card">
                            <label for="profileBanner" class="form-label mysecret-form-label">Upload Profile Banner</label>
                            <input class="form-control mysecret-file-input" type="file" id="profileBanner" accept="image/*">
                            <small class="form-text text-muted">Recommended image: 1200x300px for a better view.</small>
                        </div>
                        <div class="mb-3 mysecret-toggle-switch">
                            <h6 class="mysecret-form-label">Statistics Visibility</h6>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="showSubscribers" checked>
                                <label class="form-check-label text-white" for="showSubscribers">Show number of subscribers</label>
                            </div>
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" id="showPosts">
                                <label class="form-check-label text-white" for="showPosts">Show number of publications</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="membershipTierDescription" class="form-label mysecret-form-label">General Membership Description</label>
                            <textarea class="form-control mysecret-form-control" id="membershipTierDescription" rows="3" placeholder="Describe the general benefits of your membership tiers.">I offer early access to exclusive content and personalized tutorials for my subscribers.</textarea>
                            <small class="form-text text-muted">This is a general description. The details of each tier are configured below.</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4 mb-4">
                <div class="col-lg-8"> <div class="card mysecret-setting-card h-100 p-4">
                        <h5 class="mysecret-form-label mb-3">Subscription Level Settings</h5>
                        <p class="text-white-50">Define your subscription levels: **Bronze**, **Silver** and **Gold**. You can have up to three.</p>
                        
                        <div id="subscriptionLevelsContainer">
                            <div class="mysecret-subscription-level-card mb-3" data-level-name="Bronce">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6 class="mysecret-form-label mb-0">Bronze Level</h6>
                                    <button type="button" class="btn-close btn-close-white remove-level-btn d-none" aria-label="Remove"></button>
                                </div>
                                <input type="hidden" name="level_name[]" value="Bronce">
                                <div class="mb-3">
                                    <label for="bronzePrice" class="form-label mysecret-form-label">Monthly Price ($)</label>
                                    <input type="number" class="form-control mysecret-form-control" id="bronzePrice" name="level_price[]" step="0.01" min="0" value="5.00" required>
                                </div>
                                <div class="mb-3">
                                    <label for="bronzeBenefits" class="form-label mysecret-form-label">Benefits</label>
                                    <textarea class="form-control mysecret-form-control" id="bronzeBenefits" name="level_benefits[]" rows="3" placeholder="e.g.: Access to 2 exclusive posts per month" required>Access to all general publications.</textarea>
                                </div>
                            </div>
                            </div>

                        <button type="button" id="addSubscriptionLevelBtn" class="btn mysecret-btn-outline mt-3">
                            <i class="bi bi-plus-circle me-2"></i>Add Subscription Level
                        </button>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn mysecret-btn-outline btn-lg me-3"><i class="bi bi-save me-2"></i>Save Changes</button>
                <a href="creator_profile.php" class="btn btn-secondary btn-lg"><i class="bi bi-x-circle me-2"></i>Cancel</a>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const levels = ['Bronze', 'Silver', 'Gold'];
            const subscriptionLevelsContainer = document.getElementById('subscriptionLevelsContainer');
            const addSubscriptionLevelBtn = document.getElementById('addSubscriptionLevelBtn');
            let currentLevelCount = 1; // Start with Bronze

            // Function to create a new level card
            function createLevelCard(levelName) {
                const card = document.createElement('div');
                card.className = 'mysecret-subscription-level-card mb-3';
                card.setAttribute('data-level-name', levelName);
                card.innerHTML = `
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="mysecret-form-label mb-0">${levelName} Level</h6>
                        <button type="button" class="btn-close btn-close-white remove-level-btn" aria-label="Remove"></button>
                    </div>
                    <input type="hidden" name="level_name[]" value="${levelName}">
                    <div class="mb-3">
                        <label for="${levelName.toLowerCase()}Price" class="form-label mysecret-form-label">Monthly Price ($)</label>
                        <input type="number" class="form-control mysecret-form-control" id="${levelName.toLowerCase()}Price" name="level_price[]" step="0.01" min="0" required>
                    </div>
                    <div class="mb-3">
                        <label for="${levelName.toLowerCase()}Benefits" class="form-label mysecret-form-label">Benefits</label>
                        <textarea class="form-control mysecret-form-control" id="${levelName.toLowerCase()}Benefits" name="level_benefits[]" rows="3" placeholder="e.g.: Access to X exclusive posts per month" required></textarea>
                    </div>
                `;

                // Add event listener for remove button
                card.querySelector('.remove-level-btn').addEventListener('click', function() {
                    card.remove();
                    currentLevelCount--;
                    updateAddButtonState();
                    updateRemoveButtonsVisibility();
                });
                return card;
            }

            // Function to update the state of the "Add Level" button
            function updateAddButtonState() {
                if (currentLevelCount >= levels.length) { // Max 3 levels
                    addSubscriptionLevelBtn.disabled = true;
                    addSubscriptionLevelBtn.textContent = 'Maximum of 3 levels reached';
                } else {
                    addSubscriptionLevelBtn.disabled = false;
                    addSubscriptionLevelBtn.innerHTML = '<i class="bi bi-plus-circle me-2"></i>Add Subscription Level';
                }
            }

            // Function to update the visibility of remove buttons
            function updateRemoveButtonsVisibility() {
                const removeButtons = subscriptionLevelsContainer.querySelectorAll('.remove-level-btn');
                if (currentLevelCount === 1) {
                    // Hide remove button if only one level is present
                    removeButtons.forEach(btn => btn.classList.add('d-none'));
                } else {
                    // Show remove buttons if more than one level is present
                    removeButtons.forEach(btn => btn.classList.remove('d-none'));
                }
            }

            // Event listener for adding a new level
            addSubscriptionLevelBtn.addEventListener('click', function() {
                if (currentLevelCount < levels.length) {
                    const nextLevelName = levels[currentLevelCount];
                    const newLevelCard = createLevelCard(nextLevelName);
                    subscriptionLevelsContainer.appendChild(newLevelCard);
                    currentLevelCount++;
                    updateAddButtonState();
                    updateRemoveButtonsVisibility();
                }
            });

            // Initial setup for existing levels (e.g., if loaded from database)
            // For this example, we assume only Bronze is there initially.
            // If you load existing levels from a database, you would loop here
            // to call createLevelCard for each and increment currentLevelCount.
            updateAddButtonState();
            updateRemoveButtonsVisibility(); // Hide remove button for the initial Bronze level
        });
    </script>

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