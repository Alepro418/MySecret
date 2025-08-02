<?php
// db_connection.php

// --- Configuración de la base de datos ---
// ¡Importante! En un entorno de producción, nunca uses 'root' sin contraseña.
// Crea un usuario de base de datos dedicado con privilegios mínimos y una contraseña fuerte.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');       // Reemplaza con tu usuario de DB
define('DB_PASS', '');           // Reemplaza con tu contraseña de DB
define('DB_NAME', 'mysecret'); // Asegúrate de que este sea el nombre correcto de tu DB

// --- Establecer la conexión PDO ---
try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    // Configura PDO para lanzar excepciones en caso de errores, facilitando la depuración
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Modo de obtención predeterminado: asociativo (devuelve un array asociativo)
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // En un entorno de producción, es mejor registrar el error y mostrar un mensaje genérico.
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>