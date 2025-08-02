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
        /* Estilos personalizados para la página de mensajes */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Asegura que el body ocupe al menos el 100% del viewport */
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
        .mysecret-chat-page-content {
            flex-grow: 1; /* Permite que el contenido del chat ocupe el espacio restante */
            display: flex; /* Habilita flexbox para centrar el chat container */
            align-items: center; /* Centra verticalmente el chat container */
            justify-content: center; /* Centra horizontalmente el chat container */
            padding: 20px 0; /* Padding superior e inferior, si lo deseas */
            background-color: #1a1a1a; /* Fondo muy oscuro para la página de mensajes */
        }

        .mysecret-chat-container {
            width: 90%; /* Ajusta el ancho del contenedor de chat */
            max-width: 1200px; /* Ancho máximo para pantallas grandes */
            height: calc(100vh - 120px); /* Ajusta la altura dinámicamente: 100vh - (altura navbar + altura footer + margen) */
            display: flex;
            border-radius: 12px; /* Bordes más redondeados */
            overflow: hidden;
            background-color: #212529; /* Dark background for the whole chat area */
            box-shadow: 0 8px 16px rgba(0,0,0,0.5); /* Sombra más pronunciada */
        }

        .mysecret-conversations-list {
            flex: 0 0 320px; /* Ancho fijo para la lista de conversaciones, un poco más ancho */
            background-color: #2d3135; /* Slightly lighter dark background */
            border-right: 1px solid #495057;
            overflow-y: auto;
            padding: 15px 0;
        }

        .mysecret-conversation-item {
            display: flex;
            align-items: center;
            padding: 12px 18px; /* Más padding */
            border-bottom: 1px solid #343a40;
            cursor: pointer;
            transition: background-color 0.2s ease;
            color: white;
        }
        .mysecret-conversation-item:hover,
        .mysecret-conversation-item.active {
            background-color: #3a3f44;
        }
        .mysecret-conversation-item .avatar {
            width: 50px; /* Avatar un poco más grande */
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 12px;
            border: 2px solid #ffc107; /* Borde dorado para avatares */
        }
        .mysecret-conversation-item .info {
            flex-grow: 1;
            overflow: hidden;
        }
        .mysecret-conversation-item .name {
            font-weight: 700;
            color: #ffc107; /* Gold color for names */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 2px; /* Pequeño margen entre nombre y preview */
        }
        .mysecret-conversation-item .preview {
            font-size: 0.9em;
            color: #ced4da;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .mysecret-conversation-item .unread-badge {
            background-color: #dc3545; /* Red for unread */
            color: white;
            border-radius: 50%;
            width: 22px; /* Insignia un poco más grande */
            height: 22px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.8em;
            margin-left: auto;
            flex-shrink: 0; /* Evita que la insignia se comprima */
        }

        .mysecret-chat-area {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            position: relative;
        }
        .mysecret-chat-header {
            background-color: #343a40;
            padding: 15px;
            border-bottom: 1px solid #495057;
            color: white;
            font-weight: 700;
            display: flex;
            align-items: center;
            font-size: 1.1em; /* Header un poco más grande */
        }
        .mysecret-chat-header .avatar {
            width: 45px; /* Avatar en header un poco más grande */
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 12px;
            border: 2px solid #ffc107; /* Borde dorado para avatares */
        }
        .mysecret-messages-display {
            flex-grow: 1;
            padding: 20px; /* Más padding */
            overflow-y: auto;
            display: flex;
            flex-direction: column; /* Para que los mensajes se apilen verticalmente */
            background-color: #242424; /* Fondo del área de mensajes */
        }

        .mysecret-message-bubble {
            max-width: 70%; /* Un poco más estrecho para OnlyFans */
            padding: 12px 18px; /* Más padding */
            border-radius: 22px; /* Bordes más redondeados */
            margin-bottom: 12px; /* Más espacio entre burbujas */
            word-wrap: break-word;
            color: white;
            line-height: 1.4; /* Mejora la legibilidad */
        }
        .mysecret-message-bubble.sent {
            background-color: #ffc107; /* Gold for sent messages */
            color: #212529; /* Dark text on gold */
            align-self: flex-end; /* Alinea a la derecha */
        }
        .mysecret-message-bubble.received {
            background-color: #495057; /* Grey for received messages */
            align-self: flex-start; /* Alinea a la izquierda */
        }
        .mysecret-message-bubble .timestamp {
            font-size: 0.7em; /* Timestamp un poco más pequeño */
            opacity: 0.8; /* Un poco menos opaco */
            margin-top: 6px; /* Más espacio */
            display: block;
            text-align: right;
            color: inherit;
        }
        .mysecret-message-bubble.received .timestamp {
            text-align: left;
        }

        .mysecret-message-input {
            background-color: #343a40;
            padding: 15px;
            border-top: 1px solid #495057;
            display: flex;
            align-items: center;
            flex-shrink: 0; /* Evita que se encoja */
        }
        .mysecret-message-input .form-control {
            background-color: #495057;
            border: none;
            color: white;
            padding: 12px 15px; /* Más padding en el input */
            border-radius: 25px; /* Bordes redondeados */
        }
        .mysecret-message-input .form-control:focus {
            background-color: #495057;
            border-color: #ffc107;
            box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25);
            color: white;
        }
        .mysecret-message-input .btn {
            margin-left: 10px;
            border-radius: 25px; /* Bordes redondeados */
            padding: 10px 20px;
        }

        /* Pequeños ajustes para responsividad */
        @media (max-width: 768px) {
            .mysecret-chat-container {
                flex-direction: column;
                height: auto; /* Permite que la altura se ajuste en móviles */
                width: 95%;
            }
            .mysecret-conversations-list {
                flex: none;
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #495057;
                height: 200px; /* Altura fija para la lista de conversaciones en móviles */
            }
            .mysecret-chat-page-content {
                padding: 10px 0;
            }
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
                        <a class="nav-link mysecret-nav-link active" href="messages_fan.php"><i class="bi bi-envelope-fill me-2"></i>Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="notifications.php"><i class="bi bi-bell-fill me-2"></i>notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mysecret-nav-link" href="fan_profile.php"><i class="bi bi-person-circle me-2"></i>My Profile</a>
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

    <main class="mysecret-chat-page-content">
        <div class="mysecret-chat-container">
            <div class="mysecret-conversations-list">
                <div class="p-3">
                    <h5 class="mysecret-gold">Conversations</h5>
                    <input type="text" class="form-control mysecret-form-control-dark mb-3" placeholder="Search conversations...">
                </div>

                <div class="mysecret-conversation-item active">
                    <img src="https://via.placeholder.com/50/ffc107/FFFFFF?text=SF" alt="Subscriber FanaticFan" class="avatar">
                    <div class="info">
                        <div class="name">SubscriberFan</div>
                        <div class="preview">Hey, love your new content! Keep it up.</div>
                    </div>
                    <span class="unread-badge d-none">1</span> </div>
                <div class="mysecret-conversation-item">
                    <img src="https://via.placeholder.com/50/495057/FFFFFF?text=NL" alt="NewbieLover" class="avatar">
                    <div class="info">
                        <div class="name">NewbieLover</div>
                        <div class="preview">Quick question about the Gold tier...</div>
                    </div>
                    <span class="unread-badge">2</span>
                </div>
                <div class="mysecret-conversation-item">
                    <img src="https://via.placeholder.com/50/212529/FFFFFF?text=TS" alt="TierSupporter" class="avatar">
                    <div class="info">
                        <div class="name">TierSupporter</div>
                        <div class="preview">Thanks for the exclusive access!</div>
                    </div>
                    <span class="unread-badge d-none"></span>
                </div>
                </div>

            <div class="mysecret-chat-area">
                <div class="mysecret-chat-header">
                    <img src="https://via.placeholder.com/45/ffc107/FFFFFF?text=SF" alt="Subscriber FanaticFan" class="avatar">
                    <span>SubscriberFan</span>
                </div>

                <div class="mysecret-messages-display" id="messagesDisplay">
                    <div class="mysecret-message-bubble received">
                        Hey, love your new content! Keep it up.
                        <span class="timestamp">Yesterday 10:30 AM</span>
                    </div>
                    <div class="mysecret-message-bubble sent">
                        Thank you so much! I'm glad you're enjoying it. What's your favorite so far?
                        <span class="timestamp">Yesterday 10:45 AM</span>
                    </div>
                     <div class="mysecret-message-bubble received">
                        Definitely the latest video on "Deep Dive into Lore". Blew my mind!
                        <span class="timestamp">Today 9:15 AM</span>
                    </div>
                </div>

                <div class="mysecret-message-input">
                    <input type="text" class="form-control mysecret-form-control" placeholder="Type your message here..." id="messageInput">
                    <button class="btn mysecret-btn-primary" id="sendMessageBtn"><i class="bi bi-send-fill"></i> Send</button>
                </div>
            </div>
        </div>
    </main>

    <footer class="mysecret-footer py-4 mt-auto"> <div class="container text-center">
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
        document.addEventListener('DOMContentLoaded', function() {
            const messagesDisplay = document.getElementById('messagesDisplay');
            if (messagesDisplay) {
                // Scroll al final al cargar para mostrar los mensajes más recientes
                messagesDisplay.scrollTop = messagesDisplay.scrollHeight;
            }

            const conversationItems = document.querySelectorAll('.mysecret-conversation-item');
            const chatHeaderName = document.querySelector('.mysecret-chat-header span');
            const chatHeaderAvatar = document.querySelector('.mysecret-chat-header .avatar');

            conversationItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Remover 'active' de todos y añadirlo al clickeado
                    conversationItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');

                    // Actualizar el encabezado del chat (solo para simulación)
                    const subscriberName = this.querySelector('.name').textContent;
                    const subscriberAvatarSrc = this.querySelector('.avatar').src;

                    chatHeaderName.textContent = subscriberName;
                    chatHeaderAvatar.src = subscriberAvatarSrc;

                    // Simulación: Limpiar y añadir mensajes de ejemplo para la nueva conversación
                    messagesDisplay.innerHTML = `
                        <div class="mysecret-message-bubble received">
                            ¡Hola! Estos son mensajes simulados con ${subscriberName}.
                            <span class="timestamp">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' })}</span>
                        </div>
                        <div class="mysecret-message-bubble sent">
                            ¡Perfecto! Aquí irá el contenido dinámico de la base de datos.
                            <span class="timestamp">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' })}</span>
                        </div>
                    `;
                    messagesDisplay.scrollTop = messagesDisplay.scrollHeight; // Scroll al final
                });
            });

            // Simular envío de mensaje (solo visual)
            const messageInput = document.getElementById('messageInput');
            const sendMessageBtn = document.getElementById('sendMessageBtn');

            const sendMessage = () => {
                const messageText = messageInput.value.trim();
                if (messageText) {
                    const newMessageBubble = document.createElement('div');
                    newMessageBubble.classList.add('mysecret-message-bubble', 'sent');
                    newMessageBubble.innerHTML = `
                        ${messageText}
                        <span class="timestamp">${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' })}</span>
                    `;
                    messagesDisplay.appendChild(newMessageBubble);
                    messagesDisplay.scrollTop = messagesDisplay.scrollHeight;
                    messageInput.value = ''; // Limpiar input
                    // Aquí iría la lógica AJAX para enviar el mensaje real a la DB
                }
            };

            sendMessageBtn.addEventListener('click', sendMessage);
            messageInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && !e.shiftKey) { // Enviar con Enter, permitir Shift+Enter para nueva línea
                    e.preventDefault(); // Prevenir el salto de línea en el input
                    sendMessage();
                }
            });
        });
    </script>
</body>
</html>