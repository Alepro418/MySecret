<?php
session_start();
// The path to your login page, adjust if necessary
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
    <title>MySecret - Your Exclusive Content World</title>

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
                        <a class="nav-link mysecret-nav-link active" aria-current="page" href="index_fan.php"><i class="bi bi-house-door-fill me-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="subscriptions.php"><i class="bi bi-star-fill me-2"></i>My Subscriptions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="messages_fan.php"><i class="bi bi-envelope-fill me-2"></i>Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="notifications.php"><i class="bi bi-bell-fill me-2"></i>Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="fan_profile.php"><i class="bi bi-person-circle me-2"></i>My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="../../processes/log_out.php"><i class="bi bi-box-arrow-right me-2"></i>Log out</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="fan_profile.php">
                            <img src="Assets/Test_1.jpg" alt="Fan Avatar" class="mysecret-profile-avatar img-fluid">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="mysecret-hero text-center d-flex align-items-center justify-content-center">
        <div class="container text-white">
            <h1 class="display-3 mb-4 mysecret-title">Welcome to MySecret</h1>
            <p class="lead mb-5 mysecret-subtitle">Discover exclusive content and support your favorite creators.</p>
            <a href="explore_creators.php" class="btn mysecret-btn-primary btn-lg"><i class="bi bi-search me-2"></i>Explore now</a>
        </div>
    </header>
    <main class="container my-5 py-3">
        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">Your exclusive feed</h2>
            <div id="content-feed" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                </div>
        </section>

        <hr class="m5 mysecret-divider">

        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">feature creators</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card mysecret-card h-100">
                        <img src="Assets/Test_1.jpg" class="card-img-top mysecret-card-img" alt="Creador 1">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Aisha Sofey <i class="bi bi-gem mysecret-gold ms-2"></i></h5>
                            <p class="card-text mysecret-card-text">My names Aishah, your tiny little Asian waifu with really big legs 😣
                            I’ll be showing you whatever you want as long as you’re nice to me 💕</p>
                            <a href="creator_profile.php?id=aisha" class="btn mysecret-btn-outline"><i class="bi bi-person-fill me-2"></i>View profile</a>
                            <button class="btn mysecret-btn-primary ms-2"><i class="bi bi-currency-dollar me-2"></i>Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100">
                        <img src="Assets/Test_6.jpg" class="card-img-top mysecret-card-img" alt="Creador 2">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Sophie Rain <i class="bi bi-gem mysecret-gold ms-2"></i></h5>
                            <p class="card-text mysecret-card-text">where you see my NAUGHTY SIDE 😈
                            I never expected to do this… but screw it, full sending it off the bat 😤😤</p>
                            <a href="creator_profile.php?id=sophie" class="btn mysecret-btn-outline"><i class="bi bi-person-fill me-2"></i>View profile</a>
                            <button class="btn mysecret-btn-primary ms-2"><i class="bi bi-currency-dollar me-2"></i>Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100">
                        <img src="Assets/Test_5.jpg" class="card-img-top mysecret-card-img" alt="Creador 3">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Julia Filippo <i class="bi bi-gem mysecret-gold ms-2"></i></h5>
                            <p class="card-text mysecret-card-text">yes, i'm the "innocent" blonde you know from the bop house.... but not so innocent here :P</p>
                            <a href="creator_profile.php?id=julia" class="btn mysecret-btn-outline"><i class="bi bi-person-fill me-2"></i>View profile</a>
                            <button class="btn mysecret-btn-primary ms-2"><i class="bi bi-currency-dollar me-2"></i>Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="m5 mysecret-divider">

        <section class="mb-5">
            <h2 class="text-center mb-4 mysecret-section-title">New Creators</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card mysecret-card h-100">
                        <img src="Assets/Test_3.jpg" class="card-img-top mysecret-card-img" alt="Nuevo Creador 1">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Madzy23 <i class="bi bi-gem mysecret-gold ms-2"></i></h5>
                            <p class="card-text mysecret-card-text">18 ~ literally just made this lol i'm 5'0 but don't bully cuz i'm still growing xd</p>
                            <a href="creator_profile.php?id=madzy" class="btn mysecret-btn-outline"><i class="bi bi-person-fill me-2"></i>View profile</a>
                            <button class="btn mysecret-btn-primary ms-2"><i class="bi bi-currency-dollar me-2"></i>Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100">
                        <img src="Assets/Test_2.jpg" class="card-img-top mysecret-card-img" alt="Nuevo Creador 2">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Wemmixi <i class="bi bi-gem mysecret-gold ms-2"></i></h5>
                            <p class="card-text mysecret-card-text">Hiii -`♡´- Welcome to my super exclusive VIP page! 🤍 this is where we can chat a ton and you'll REALLYYY get to know me 🙂</p>
                            <a href="creator_profile.php?id=wemmixi" class="btn mysecret-btn-outline"><i class="bi bi-person-fill me-2"></i>View profile</a>
                            <button class="btn mysecret-btn-primary ms-2"><i class="bi bi-currency-dollar me-2"></i>Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mysecret-card h-100">
                        <img src="Assets/Test_4.jpg" class="card-img-top mysecret-card-img" alt="Nuevo Creador 3">
                        <div class="card-body">
                            <h5 class="card-title mysecret-card-title">Luna Acosta <i class="bi bi-gem mysecret-gold ms-2"></i></h5>
                            <p class="card-text mysecret-card-text">Bienvenido a mi parte traviesa jajaj 😈💦 Si, hay contenido explícito: Reacciones como en insta pero sin ropa...</p>
                            <a href="creator_profile.php?id=luna" class="btn mysecret-btn-outline"><i class="bi bi-person-fill me-2"></i>View profile</a>
                            <button class="btn mysecret-btn-primary ms-2"><i class="bi bi-currency-dollar me-2"></i>Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="modal fade" id="contentModal" tabindex="-1" aria-labelledby="contentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content mysecret-card">
                <div class="modal-header">
                    <h5 class="modal-title" id="contentModalLabel">Cargando...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="content-placeholder" class="text-center">
                        <p class="text-muted">Cargando contenido...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mysecret-footer py-4 mt-5">
        <div class="container text-center">
            <p class="mb-2">&copy; 2025 MySecret. All rights reserved..</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Terms of Service</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Contact</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Script para cargar el feed de contenido dinámicamente
            const contentFeed = document.getElementById('content-feed');

            fetch('../../processes/fetch_all_content.php')
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success' && data.data.length > 0) {
                        data.data.forEach(content => {
                            let mediaHtml = '';
                            let actionButton = '';
                            
                            // Determinar el HTML para el tipo de contenido y el botón de acción
                            if (content.type_content === 'image') {
                                mediaHtml = `<img src="${content.url_file}" class="card-img-top mysecret-card-img" alt="${content.title}">`;
                                actionButton = `<a href="#" class="btn mysecret-btn-outline view-content-btn" data-bs-toggle="modal" data-bs-target="#contentModal" data-content-id="${content.id_content}">
                                                    <i class="bi bi-eye-fill me-2"></i>Ver Imagen
                                                </a>`;
                            } else if (content.type_content === 'video') {
                                mediaHtml = `<video controls class="card-img-top mysecret-card-img" src="${content.url_file}"></video>`;
                                actionButton = `<a href="#" class="btn mysecret-btn-outline view-content-btn" data-bs-toggle="modal" data-bs-target="#contentModal" data-content-id="${content.id_content}">
                                                    <i class="bi bi-play-circle-fill me-2"></i>Watch Video
                                                </a>`;
                            }

                            const cardHtml = `
                                <div class="col">
                                    <div class="card mysecret-card h-100">
                                        ${mediaHtml}
                                        <div class="card-body">
                                            <h5 class="card-title mysecret-card-title">${content.title}</h5>
                                            <p class="card-text mysecret-card-text small">Por: ${content.creator_name}</p>
                                            <p class="card-text">${content.description}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                ${actionButton}
                                                <small class="text-muted"><i class="bi bi-heart-fill me-1"></i> 0 <i class="bi bi-chat-fill ms-3 me-1"></i> 0</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            contentFeed.innerHTML += cardHtml;
                        });

                    } else {
                        contentFeed.innerHTML = '<p class="text-center text-muted">No hay contenido exclusivo disponible en este momento.</p>';
                    }
                })
                .catch(error => {
                    console.error('Error al cargar el contenido:', error);
                    contentFeed.innerHTML = '<p class="text-center text-danger">Error al cargar el contenido.</p>';
                });

            // Script para manejar el modal de contenido
            const contentModal = document.getElementById('contentModal');
            contentModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const contentId = button.getAttribute('data-content-id');

                const modalTitle = contentModal.querySelector('.modal-title');
                const contentPlaceholder = document.getElementById('content-placeholder');

                contentPlaceholder.innerHTML = '<div class="spinner-border text-warning" role="status"><span class="visually-hidden">Cargando...</span></div>';
                modalTitle.textContent = 'Cargando...';

                fetch(`../../processes/fetch_content.php?id_content=${contentId}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Error en la respuesta del servidor.');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.status === 'success') {
                            const content = data.data;
                            modalTitle.textContent = content.title;
                            let contentHtml = '';
                            switch (content.type_content) {
                                case 'video':
                                    contentHtml = `<video controls class="img-fluid" src="${content.url_file}"></video>`;
                                    break;
                                case 'image':
                                    contentHtml = `<img src="${content.url_file}" class="img-fluid" alt="${content.title}">`;
                                    break;
                                default:
                                    contentHtml = `<p>Tipo de contenido no soportado.</p>`;
                                    break;
                            }
                            contentPlaceholder.innerHTML = contentHtml;
                        } else {
                            modalTitle.textContent = "Error";
                            contentPlaceholder.innerHTML = `<p class="text-danger">${data.message}</p>`;
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        modalTitle.textContent = "Error";
                        contentPlaceholder.innerHTML = `<p class="text-danger">No se pudo cargar el contenido. Por favor, inténtalo de nuevo.</p>`;
                    });
            });

            // Escuchar el evento de que el modal se va a ocultar
            contentModal.addEventListener('hide.bs.modal', function () {
                const contentPlaceholder = document.getElementById('content-placeholder');
                const media = contentPlaceholder.querySelector('video, audio');
                if (media) {
                    media.pause();
                    media.currentTime = 0;
                }
            });
        });
    </script>
</body>
</html>