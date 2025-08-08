<?php
// login.php
session_start(); // Inicia la sesión para guardar el rol del usuario

// Incluye el archivo de conexión a la base de datos
require_once 'db_config.php'; // Asegúrate de que la ruta sea correcta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_username = $_POST['email_username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validación básica de campos vacíos
    if (empty($email_username) || empty($password)) {
        $_SESSION['error_message'] = "Por favor, ingresa tu correo/nombre de usuario y contraseña.";
        header("Location: ../../public/sign_in.html");
        exit();
    }

    try {
        // Prepara la consulta SQL para buscar al usuario por email o nombre de usuario
        $stmt = $conn->prepare("SELECT id_users, username, email, hashed_password, type_user FROM users WHERE email = :email_username OR username = :email_username");
        $stmt->bindParam(':email_username', $email_username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verifica si el usuario existe y la contraseña es correcta
        if ($user && password_verify($password, $user['hashed_password'])) {
            // Contraseña correcta, actualiza la última conexión
            $stmt_update = $conn->prepare("UPDATE users SET last_connection = NOW() WHERE id_users = :id_users");
            $stmt_update->bindParam(':id_users', $user['id_users']);
            $stmt_update->execute();

            // Inicia la sesión y guarda los datos del usuario
            $_SESSION['user_id'] = $user['id_users'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['type_user'] = $user['type_user']; // Nombre de la sesión consistente con la DB

            // Redirige según el tipo de usuario
            if (isset($user['type_user'])) {
                switch ($user['type_user']) {
                    case 'creator':
                        header("Location: ../php/creator/index_creator.php");
                        break;
                    case 'fan':
                        header("Location: ../php/fan/index_fan.php");
                        break;
                    default:
                        // Si el tipo de usuario no está definido o es inesperado
                        $_SESSION['error_message'] = "Tipo de usuario no reconocido. Por favor, contacta a soporte.";
                        header("Location: ../../public/sign_in.html");
                        break;
                }
            } else {
                // Si el tipo de usuario no existe en la base de datos
                $_SESSION['error_message'] = "Error de configuración de usuario. Por favor, contacta a soporte.";
                header("Location: ../../public/sign_in.html");
            }
            exit();

        } else {
            // Credenciales inválidas
            $_SESSION['error_message'] = "Credenciales incorrectas. Por favor, verifica tu correo/nombre de usuario y contraseña.";
            header("Location: ../../public/sign_in.html");
            exit();
        }

    } catch (PDOException $e) {
        // Manejo de errores de la base de datos
        error_log("Error de base de datos en login: " . $e->getMessage());
        $_SESSION['error_message'] = "Ocurrió un error inesperado. Por favor, inténtalo de nuevo más tarde.";
        header("Location: ../../public/sign_in.html");
        exit();
    }
} else {
    // Si alguien intenta acceder a este script directamente sin enviar el formulario
    $_SESSION['error_message'] = "Acceso no autorizado.";
    header("Location: ../../public/sign_in.html");
    exit();
}
?>