<?php

// Start a session to store messages (optional, but good for user feedback)
session_start();

// --- Configuration (In a real application, these would be in a separate config file) ---
define('DB_HOST', 'localhost');
define('DB_USER', 'root'); // Replace with your database username
define('DB_PASS', ''); // Replace with your database password
define('DB_NAME', 'mysecret');     // Replace with your database name

// --- Function to sanitize input data ---
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// --- Check if the form was submitted via POST ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- 1. Sanitize and retrieve form data ---
    $username = sanitize_input($_POST['username'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $password = $_POST['password'] ?? ''; // Passwords are not sanitized with htmlspecialchars before hashing
    $confirmPassword = $_POST['confirmPassword'] ?? '';
    $userRole = sanitize_input($_POST['userRole'] ?? '');
    $termsChecked = isset($_POST['termsCheck']);

    // --- 2. Server-side Validation ---
    $errors = [];

    if (empty($username)) {
        $errors[] = "El nombre de usuario es obligatorio.";
    } elseif (strlen($username) < 3) {
        $errors[] = "El nombre de usuario debe tener al menos 3 caracteres.";
    }

    if (empty($email)) {
        $errors[] = "El correo electrónico es obligatorio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El formato del correo electrónico no es válido.";
    }

    if (empty($password)) {
        $errors[] = "La contraseña es obligatoria.";
    } elseif (strlen($password) < 8) {
        $errors[] = "La contraseña debe tener al menos 8 caracteres.";
    }

    if (empty($confirmPassword)) {
        $errors[] = "La confirmación de contraseña es obligatoria.";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Las contraseñas no coinciden.";
    }

    if (empty($userRole)) {
        $errors[] = "Debes seleccionar un rol (Fan o Creador).";
    } elseif (!in_array($userRole, ['fan', 'creator'])) {
        $errors[] = "Rol de usuario inválido seleccionado.";
    }

    if (!$termsChecked) {
        $errors[] = "Debes aceptar los Términos de Servicio y la Política de Privacidad.";
    }

    // --- 3. Process if there are no errors ---
    if (empty($errors)) {
        // --- Hash the password ---
        // Always hash passwords before storing them!
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // --- Simulate Database Interaction ---
        // In a real application, you would connect to a database (e.g., MySQL)
        // and insert the user data.

        // Example using MySQLi (Procedural or Object-Oriented)
        // Using PDO is also a great option for database interaction.

        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Check if username or email already exists (important for unique users)
        $stmt_check = $conn->prepare("SELECT id_users FROM users WHERE username = ? OR email = ?");
        $stmt_check->bind_param("ss", $username, $email);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            $errors[] = "El nombre de usuario o correo electrónico ya está registrado.";
            $_SESSION['errors'] = $errors;
            header("Location: ../register.html"); // Redirect back to registration form (adjust path if needed)
            exit();
        }
        $stmt_check->close();


        // Prepare and execute the SQL statement to insert user data
        $stmt = $conn->prepare("INSERT INTO users (username, email, hashed_password, type_user) VALUES (?, ?, ?, ?)");
        if ($stmt === false) {
             die("Error al preparar la consulta: " . $conn->error);
        }
        $stmt->bind_param("ssss", $username, $email, $hashed_password, $userRole);

        if ($stmt->execute()) {
            $_SESSION['success_message'] = "¡Registro exitoso! Ahora puedes iniciar sesión.";
            header("Location: ../php/index.php"); // Redirect to login page
            exit();
        } else {
            $errors[] = "Error al registrar el usuario. Por favor, inténtalo de nuevo. " . $stmt->error;
            $_SESSION['errors'] = $errors;
            header("Location: ../register.html"); // Redirect back to registration form
            exit();
        }

        $stmt->close();
        $conn->close();

    } else {
        // --- 4. If there are errors, store them in session and redirect back to the form ---
        $_SESSION['errors'] = $errors;
        header("Location: ../register.html"); // Redirect back to the registration form
        exit();
    }

} else {
    // --- If accessed directly without POST data ---
    $_SESSION['errors'] = ["Acceso no autorizado."];
    header("Location: ../register.html");
    exit();
}
