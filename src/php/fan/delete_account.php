<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../public/assets/images/logo v1.3.ico" type="image/x-icon">
    <title>MySecret - Opciones de Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
    <style>
        /* Estilos CSS (sin cambios importantes, se asume que los estilos ya son funcionales) */
        a {
            text-decoration: none;
        }
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
            border: 0.5px solid #ffc107;
            object-fit: cover;
            margin-top: -5px;
            position: relative;
            z-index: 10;
            cursor: pointer;
        }
        .mysecret-profile-avatar-2 {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 0.5px solid #ffc107;
            object-fit: cover;
            margin-top: -5px;
            position: relative;
            z-index: 10;
        }
        .mysecret-stat-card {
            background-color: #212529;
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }
        .mysecret-stat-card h3 {
            color: #ffc107;
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
            color: #ffc107;
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
        .mysecret-message-item {
            background-color: #2d3135;
            border: 1px solid #495057;
            border-radius: 8px;
            margin-bottom: 15px;
            padding: 15px 20px;
            transition: background-color 0.3s ease;
        }
        .mysecret-message-item:hover {
            background-color: #343a40;
        }
        .mysecret-message-item .mysecret-gold {
            color: #ffc107;
            font-weight: 700;
        }
        .mysecret-message-item .opacity-75 {
            color: rgba(255, 255, 255, 0.9);
        }
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
            background-color: #28a745;
            color: white;
        }
        .mysecret-membership-expired {
            background-color: #dc3545;
            color: white;
        }
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
        .mysecret-delete-account-card {
            background-color: #212529;
            color: white;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        .mysecret-delete-account-card h2 {
            color: #dc3545;
            margin-bottom: 25px;
            font-family: 'Playfair Display', serif;
        }
        .mysecret-delete-account-card p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #e0e0e0;
        }
        .mysecret-delete-account-card .form-check-label {
            color: #e0e0e0;
        }
        .mysecret-delete-account-card .btn {
            font-size: 1.1rem;
            padding: 12px 30px;
            margin: 10px 10px;
        }
        .mysecret-delete-account-card .btn-danger {
            margin-top: 20px;
        }
        .mysecret-delete-account-card .alert {
            margin-top: 30px;
            text-align: left;
        }
        /* Nuevo estilo para el spinner, para que se vea bien en el botón */
        .mysecret-btn-spinner {
            display: none; /* Oculto por defecto */
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
                        <a href="fan_profile.php">
                            <img src="Assets/Test_1.jpg" alt="Fan Avatar" class="mysecret-profile-avatar img-fluid">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="mysecret-profile-header">
        <div class="container">
            <h1 class="display-3 mysecret-title">Opciones de Cuenta</h1>
            <p class="lead mysecret-subtitle">Administra el estado de tu cuenta de MySecret.</p>
        </div>
    </header>

    <main class="container my-5 py-3">
        <div class="mysecret-delete-account-card">
            <i class="bi bi-person-x-fill display-1 text-danger mb-4"></i>
            <h2>Administrar tu Cuenta</h2>
            <p>Aquí puedes elegir entre **suspender temporalmente** tu cuenta o **eliminarla permanentemente**. Por favor, lee cuidadosamente las implicaciones de cada opción.</p>

            <hr class="my-5 mysecret-divider">

            <h3 class="mysecret-gold mb-3"><i class="bi bi-pause-circle-fill me-2"></i>Suspender Cuenta</h3>
            <p class="mb-4">Si solo necesitas un descanso, puedes suspender tu cuenta. Tu perfil, publicaciones y contenido no serán visibles para otros usuarios, y no recibirás notificaciones. Podrás reactivar tu cuenta en cualquier momento volviendo a iniciar sesión.</p>
            <button class="btn mysecret-btn-outline" id="suspendAccountBtn">
                <span class="mysecret-btn-text"><i class="bi bi-pause-fill me-2"></i> Suspender Cuenta</span>
                <span class="spinner-border spinner-border-sm mysecret-btn-spinner" role="status" aria-hidden="true"></span>
            </button>

            <hr class="my-5 mysecret-divider">

            <h3 class="mysecret-gold mb-3 text-danger"><i class="bi bi-trash-fill me-2"></i>Eliminar Cuenta</h3>
            <p>La eliminación de tu cuenta en MySecret es una acción **permanente e irreversible**. Una vez que tu cuenta sea eliminada, perderás acceso a:</p>
            <ul>
                <li>Todas tus publicaciones y contenido.</li>
                <li>Tus mensajes y conversaciones.</li>
                <li>Tu historial de suscripciones y cualquier suscripción activa.</li>
                <li>Tu perfil y toda la información asociada.</li>
            </ul>
            <p>Por favor, considera cuidadosamente esta decisión. Una vez eliminada, tu cuenta y tus datos no podrán ser recuperados.</p>

            <div class="form-check text-start mb-4">
                <input class="form-check-input" type="checkbox" id="confirmDelete">
                <label class="form-check-label" for="confirmDelete">
                    Entiendo que la eliminación de mi cuenta es permanente y que perderé todo mi contenido y acceso.
                </label>
            </div>

            <button class="btn btn-danger" id="deleteAccountBtn">
                <span class="mysecret-btn-text"><i class="bi bi-trash-fill me-2"></i> Eliminar Mi Cuenta Permanentemente</span>
                <span class="spinner-border spinner-border-sm mysecret-btn-spinner" role="status" aria-hidden="true"></span>
            </button>
            <div class="alert alert-warning mt-4" role="alert" id="deleteWarning" style="display: none;">
                <strong>¡Advertencia!</strong> Debes marcar la casilla de confirmación para poder eliminar tu cuenta.
            </div>
        </div>
    </main>

    <div class="modal fade" id="suspendModal" tabindex="-1" aria-labelledby="suspendModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="suspendModalLabel">Confirmar Suspensión</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que quieres **suspender temporalmente** tu cuenta? Tu perfil dejará de ser visible, pero podrás reactivarlo en cualquier momento.
                </div>
                <div class="modal-footer border-top-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-warning" id="confirmSuspendBtn">Suspender Cuenta</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title text-danger" id="deleteModalLabel">¡Advertencia! Eliminación Permanente</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Estás a punto de **eliminar permanentemente** tu cuenta. Esta acción es **irreversible**. ¿Estás ABSOLUTAMENTE seguro de que quieres proceder?
                </div>
                <div class="modal-footer border-top-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Sí, Eliminar Permanentemente</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="mysecret-footer py-4 mt-5">
        <div class="container text-center">
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
        document.addEventListener('DOMContentLoaded', function() {
            // Referencias a los elementos del DOM
            const suspendBtn = document.getElementById('suspendAccountBtn');
            const deleteBtn = document.getElementById('deleteAccountBtn');
            const confirmCheckbox = document.getElementById('confirmDelete');
            const deleteWarning = document.getElementById('deleteWarning');

            // Modales
            const suspendModal = new bootstrap.Modal(document.getElementById('suspendModal'));
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            const confirmSuspendBtn = document.getElementById('confirmSuspendBtn');
            const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');

            // Controladores de eventos
            suspendBtn.addEventListener('click', () => {
                suspendModal.show();
            });

            deleteBtn.addEventListener('click', () => {
                if (!confirmCheckbox.checked) {
                    deleteWarning.style.display = 'block';
                } else {
                    deleteWarning.style.display = 'none';
                    deleteModal.show();
                }
            });

            // Función para manejar el estado de los botones durante una acción
            function setButtonLoadingState(button, isLoading) {
                const buttonText = button.querySelector('.mysecret-btn-text');
                const spinner = button.querySelector('.mysecret-btn-spinner');
                
                if (isLoading) {
                    button.disabled = true;
                    buttonText.style.display = 'none';
                    spinner.style.display = 'inline-block';
                } else {
                    button.disabled = false;
                    buttonText.style.display = 'inline-block';
                    spinner.style.display = 'none';
                }
            }

            // Lógica de confirmación de suspensión
            confirmSuspendBtn.addEventListener('click', () => {
                // Muestra un estado de carga en el botón
                setButtonLoadingState(confirmSuspendBtn, true);

                // Aquí iría la llamada asíncrona (Fetch) al servidor para suspender la cuenta
                console.log('Enviando solicitud de suspensión al servidor...');
                
                // Simulación de la llamada al servidor
                setTimeout(() => {
                    // Simular respuesta exitosa
                    console.log('Cuenta suspendida con éxito.');
                    suspendModal.hide(); // Cierra el modal
                    
                    // Muestra una alerta de éxito
                    alert("Tu cuenta ha sido suspendida exitosamente. ¡Esperamos verte pronto!");
                    
                    // Redirigir al usuario
                    window.location.href = "index.php"; 
                }, 2000); // Espera 2 segundos
            });

            // Lógica de confirmación de eliminación
            confirmDeleteBtn.addEventListener('click', () => {
                setButtonLoadingState(confirmDeleteBtn, true);

                // Aquí iría la llamada asíncrona (Fetch) al servidor para eliminar la cuenta
                console.log('Enviando solicitud de eliminación al servidor...');

                // Simulación de la llamada al servidor
                setTimeout(() => {
                    // Simular respuesta exitosa
                    console.log('Cuenta eliminada con éxito.');
                    deleteModal.hide(); // Cierra el modal
                    
                    // Muestra una alerta de éxito
                    alert("Tu cuenta ha sido eliminada permanentemente. Gracias por haber sido parte de MySecret.");
                    
                    // Redirigir al usuario
                    window.location.href = "index.php";
                }, 2000); // Espera 2 segundos
            });
        });
    </script>
</body>
</html>