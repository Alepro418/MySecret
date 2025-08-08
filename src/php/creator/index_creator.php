<?php
session_start();
// La ruta a tu página de inicio de sesión, ajusta si es necesario
$login_page_url = '../../../public/sign_in.php'; 

if (!isset($_SESSION['user_id'])) {
    header("Location: " . $login_page_url);
    exit();
}
?>
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
                        <a class="nav-link mysecret-nav-link active" aria-current="page" href="index_creator.php"><i class="bi bi-house-door-fill me-2"></i>Home</a>
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
                        <a class="nav-link mysecret-nav-link" href="creator_profile.php"><i class="bi bi-person-circle me-2"></i>My Profile</a>
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

    <header class="mysecret-hero text-center d-flex align-items-center justify-content-center">
        <div class="container text-white">
            <h1 class="display-3 mb-4 mysecret-title">Welcome</h1>
            <p class="lead mb-5 mysecret-subtitle">When secrets unleash the forbidden, the fun begins</p>  
        </div>
    </header>
    <main class="container my-5 py-3">
<section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">featured creators</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card mysecret-card h-100">
                        <img src="Assets/Test_1.jpg" class="card-img-top mysecret-card-img" alt="Creador 1">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Aisha sofey <i class="bi bi-gem mysecret-gold ms-2"></i></h5> <p class="card-text mysecret-card-text">My names Aishah, your tiny little Asian waifu with really big legs 😣

I’ll be showing you whatever you want as long as you’re nice to me 💕

SHOWING EVERYTHING JUST FOR YOU 😉</p>
                            <a href="#" class="btn mysecret-btn-outline"><i class="bi bi-eye-fill me-2"></i>Ver Perfil</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100">
                        <img src="Assets/Test_6.jpg" class="card-img-top mysecret-card-img" alt="Creador 2">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Sophie rain <i class="bi bi-gem mysecret-gold ms-2"></i></h5>
                            <p class="card-text mysecret-card-text">where you see my NAUGHTY SIDE 😈

I never expected to do this… but screw it, full sending it off the bat 😤😤 I may be a virgin, but I’m not that innocent as you might think 😉

FULLY NUDE CONTENT AVAILABLE !!! 💓</p>
                            <a href="#" class="btn mysecret-btn-outline"><i class="bi bi-eye-fill me-2"></i>Ver Perfil</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100">
                        <img src="Assets/Test_5.jpg" class="card-img-top mysecret-card-img" alt="Creador 3">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Julia filippo <i class="bi bi-gem mysecret-gold ms-2"></i></h5>
                            <p class="card-text mysecret-card-text">yes, i'm the "innocent" blonde you know from the bop house.... but not so innocent here :P</p>
                            <a href="#" class="btn mysecret-btn-outline"><i class="bi bi-eye-fill me-2"></i>Ver Perfil</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <hr class="m5 mysecret-divider">

        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">New creators</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card mysecret-card h-100">
                        <img src="Assets/Test_3.jpg" class="card-img-top mysecret-card-img" alt="Creador 1">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Madzy23 <i class="bi bi-gem mysecret-gold ms-2"></i></h5> <p class="card-text mysecret-card-text">18 ~ literally just made this lol
i'm 5'0 but don't bully cuz i'm still growing xd

message me lmk what i should do for like making contents and stuff i'd really appreciate anyone who talks to me!! idk cuz i'm uncertain here yall 😭😭</p>
                            <a href="#" class="btn mysecret-btn-outline"><i class="bi bi-eye-fill me-2"></i>Ver Perfil</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100">
                        <img src="Assets/Test_2.jpg" class="card-img-top mysecret-card-img" alt="Creador 2">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">wemmixi <i class="bi bi-gem mysecret-gold ms-2"></i></h5>
                            <p class="card-text mysecret-card-text">Hiii -`♡´-
Welcome to my super exclusive VIP page! 🤍 this is where we can chat a ton and you'll REALLYYY get to know me 🙂 Im excited to get to know each other and you’ll find a TON of free content that I just post on my feed for fun hehe ⋆⭒˚｡⋆
clothes are stupid and naked is better hehe 🙈
｡ﾟﾟ･｡･ﾟﾟ｡
ﾟ。 can’t wait to talk with you here 🍑 ~˙⋆
ﾟ･｡･ﾟ</p>
                            <a href="#" class="btn mysecret-btn-outline"><i class="bi bi-eye-fill me-2"></i>Ver Perfil</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100">
                        <img src="Assets/Test_4.jpg" class="card-img-top mysecret-card-img" alt="Creador 3">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">luna acosta <i class="bi bi-gem mysecret-gold ms-2"></i></h5>
                            <p class="card-text mysecret-card-text">Bienvenido a mi parte traviesa jajaj 😈💦

Si, hay contenido explícito:

🍑 Reacciones como en insta pero sin ropa

🍑 Contenido exclusivo y único

🍑 Contenido personalizado

🍑 Videos sorpresa

🍑 Chat conmigo en todo momento


… y lo que me vaya apeteciendo 😁</p>
                            <a href="#" class="btn mysecret-btn-outline"><i class="bi bi-eye-fill me-2"></i>Ver Perfil</a>
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
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Términos de Servicio</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Política de Privacidad</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Contacto</a></li>
            </ul>
        </div>
    </footer>

        <a href="create_content.php" class="floating-button">
            <i class="bi bi-plus-circle-fill"></i> Crear Contenido
        </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>