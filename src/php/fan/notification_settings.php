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
                        <a class="nav-link mysecret-nav-link" href="#"><i class="bi bi-box-arrow-right me-2"></i>Log out</a>
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

    <main class="container my-5 py-3">
        <h2 class="mysecret-section-title-profile">Preferencias de Notificación</h2>
        <p class="text-center text-muted mb-5">Controla cómo y cuándo recibes las alertas de MySecret.</p>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card mysecret-card p-4">
                    <form id="notificationSettingsForm">
                        <div class="mb-4">
                            <h5 class="text-white mb-3"><i class="bi bi-envelope-fill me-2 mysecret-gold"></i>Notificaciones por Correo Electrónico</h5>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="emailNewMessages" checked>
                                <label class="form-check-label" for="emailNewMessages">
                                    Recibir notificaciones cuando tenga nuevos mensajes.
                                </label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="emailNewSubscribers">
                                <label class="form-check-label" for="emailNewSubscribers">
                                    Recibir notificaciones cuando un nuevo usuario se suscriba.
                                </label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="emailPromotions">
                                <label class="form-check-label" for="emailPromotions">
                                    Recibir correos electrónicos con promociones y actualizaciones de MySecret.
                                </label>
                            </div>
                        </div>

                        <hr class="my-4" style="border-color: rgba(255, 193, 7, 0.3);">

                        <div class="mb-4">
                            <h5 class="text-white mb-3"><i class="bi bi-bell-fill me-2 mysecret-gold"></i>Notificaciones en la Aplicación</h5>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="appNewMessages" checked>
                                <label class="form-check-label" for="appNewMessages">
                                    Mostrar alertas en la aplicación para nuevos mensajes.
                                </label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="appNewContent" checked>
                                <label class="form-check-label" for="appNewContent">
                                    Mostrar alertas en la aplicación para nuevo contenido de creadores.
                                </label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="appLikesComments">
                                <label class="form-check-label" for="appLikesComments">
                                    Mostrar alertas en la aplicación para "me gusta" y comentarios en tus publicaciones.
                                </label>
                            </div>
                        </div>

                        <hr class="my-4" style="border-color: rgba(255, 193, 7, 0.3);">

                        <div class="mb-4">
                            <h5 class="text-white mb-3"><i class="bi bi-calendar-check-fill me-2 mysecret-gold"></i>Recordatorios</h5>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="reminderSubscriptionRenewal" checked>
                                <label class="form-check-label" for="reminderSubscriptionRenewal">
                                    Recibir recordatorios de renovación de suscripciones.
                                </label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input mysecret-form-check-input" type="checkbox" id="reminderUpcomingEvents">
                                <label class="form-check-label" for="reminderUpcomingEvents">
                                    Recibir recordatorios de eventos próximos.
                                </label>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn mysecret-btn-primary py-2">Guardar Preferencias</button>
                        </div>

                        <div id="alertMessage" class="mt-4 alert alert-success-custom text-center d-none" role="alert">
                            Preferencias guardadas correctamente.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="mysecret-footer py-4 mt-5" style="text-align: center;">
        <div class="container">
            <p class="mb-2">&copy; 2025 MySecret. Todos los derechos reservados.</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Términos de Servicio</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Política de Privacidad</a></li>
                <li class="list-inline-item"><a href="#" class="mysecret-footer-link">Contacto</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('notificationSettingsForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita que el formulario se envíe realmente

            // Aquí es donde normalmente enviarías los datos al servidor.
            // Para este ejemplo, simplemente mostramos un mensaje de éxito.

            const emailNewMessages = document.getElementById('emailNewMessages').checked;
            const emailNewSubscribers = document.getElementById('emailNewSubscribers').checked;
            const emailPromotions = document.getElementById('emailPromotions').checked;
            const appNewMessages = document.getElementById('appNewMessages').checked;
            const appNewContent = document.getElementById('appNewContent').checked;
            const appLikesComments = document.getElementById('appLikesComments').checked;
            const reminderSubscriptionRenewal = document.getElementById('reminderSubscriptionRenewal').checked;
            const reminderUpcomingEvents = document.getElementById('reminderUpcomingEvents').checked;

            console.log('Preferencias de Email:', {
                emailNewMessages,
                emailNewSubscribers,
                emailPromotions
            });
            console.log('Preferencias de App:', {
                appNewMessages,
                appNewContent,
                appLikesComments
            });
            console.log('Preferencias de Recordatorios:', {
                reminderSubscriptionRenewal,
                reminderUpcomingEvents
            });

            // Mostrar el mensaje de éxito
            const alertMessage = document.getElementById('alertMessage');
            alertMessage.classList.remove('d-none'); // Mostrar el div de alerta

            // Opcional: ocultar el mensaje después de unos segundos
            setTimeout(() => {
                alertMessage.classList.add('d-none');
            }, 3000); // Ocultar después de 3 segundos
        });
    </script>
    
</body>
</html>