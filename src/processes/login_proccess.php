<?php
session_start(); // Inicia la sesión para guardar el rol del usuario

// Incluye el archivo de conexión a la base de datos
require_once 'db_config.php'; // Asegúrate de que la ruta sea correcta

// Función para sanear datos (si la necesitas, aunque para email/username y password no es tan crítica aquí)
// En este caso, PDO con sentencias preparadas ya maneja la mayoría de la inyección SQL.
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data); // Para evitar XSS en la visualización, no para la DB directamente
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asume que el campo de inicio de sesión puede ser email o username
    $email_username = sanitize_input($_POST['email_username'] ?? '');
    $password = $_POST['password'] ?? '';

    // Validación básica de campos vacíos
    if (empty($email_username) || empty($password)) {
        $_SESSION['error_message'] = "Por favor, ingresa tu correo/nombre de usuario y contraseña.";
        header("Location: ../../public/sign_in.html"); // Redirige de nuevo al formulario de inicio de sesión
        exit();
    }

    try {
        // Prepara la consulta SQL para buscar al usuario por email o nombre de usuario
        // NOTA: 'hashed_password' es el nombre correcto de la columna de tu tabla
        $stmt = $conn->prepare("SELECT id_users, username, email, hashed_password, type_user FROM users WHERE email = :email_username OR username = :email_username");
        $stmt->bindParam(':email_username', $email_username); // Un solo parámetro para ambos casos
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC); // FETCH_ASSOC es el predeterminado si lo configuraste en db_connection.php

        // Verifica si el usuario existe y la contraseña es correcta
        // NOTA: 'hashed_password' es el nombre correcto de la columna de tu tabla
        if ($user && password_verify($password, $user['hashed_password'])) {
            // Contraseña correcta, inicia sesión

            // Actualiza la fecha de última conexión
            $stmt_update = $conn->prepare("UPDATE users SET last_connection = NOW() WHERE id_users = :id_users");
            $stmt_update->bindParam(':id_users', $user['id_users']);
            $stmt_update->execute();

            $_SESSION['user_id'] = $user['id_users']; // Usa 'id_users' como en tu tabla
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['user_type'] = $user['type_user']; // Guarda el tipo de usuario en la sesión

            // Redirige según el tipo de usuario
            switch ($user['type_user']) {
                case 'creator':
                    header("Location: ../php/creator/index_creator.php"); // Redirige a la página del creador
                    break;
                case 'fan':
                    header("Location: ../php/fan/index_fan.php"); // Redirige a la página del fan
                    break;
                default:
                    // Si el tipo de usuario no está definido o es inesperado
                    $_SESSION['error_message'] = "Tipo de usuario no reconocido. Por favor, contacta a soporte.";
                    header("Location: ../sign_in.html");
                    break;
            }
            exit();

        } else {
            // Credenciales inválidas
            $_SESSION['error_message'] = "Credenciales incorrectas. Por favor, verifica tu correo/nombre de usuario y contraseña.";
            header("Location: ../sign_in.html"); // Redirige de nuevo al formulario de inicio de sesión
            exit();
        }

    } catch (PDOException $e) {
        // Manejo de errores de la base de datos
        error_log("Error de base de datos en login: " . $e->getMessage()); // Registra el error para depuración
        $_SESSION['error_message'] = "Ocurrió un error inesperado. Por favor, inténtalo de nuevo más tarde.";
        header("Location: ../sign_in.html");
        exit();
    }

} else {
    // Si alguien intenta acceder a este script directamente sin enviar el formulario
    $_SESSION['error_message'] = "Acceso no autorizado.";
    header("Location: ../sign_in.html");
    exit();
}
?>