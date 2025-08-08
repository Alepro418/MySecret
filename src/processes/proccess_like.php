<?php
// Incluir el archivo de conexión a la base de datos PDO
require_once 'db_config.php';

// Iniciar sesión y obtener el ID del usuario de forma segura
session_start();
$id_user = $_SESSION['user_id'] ?? null;

// Verificar si la solicitud es de tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Si el ID del usuario no está en la sesión, significa que no ha iniciado sesión
    if ($id_user === null) {
        http_response_code(401); // Unauthorized
        echo json_encode(["status" => "error", "message" => "Usuario no autenticado."]);
        exit;
    }
    
    // Asumir que el ID del contenido se envía a través de una solicitud POST
    $id_content = $_POST['id_content'] ?? null;

    if ($id_content === null) {
        // Enviar una respuesta de error si faltan datos
        http_response_code(400); // Bad Request
        echo json_encode(["status" => "error", "message" => "Faltan datos de contenido."]);
        exit;
    }

    try {
        // 1. Verificar si el usuario ya le dio "me gusta" a este contenido
        $stmt_check = $conn->prepare("SELECT id_like FROM likes WHERE id_user = :id_user AND id_content = :id_content");
        $stmt_check->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $stmt_check->bindParam(':id_content', $id_content, PDO::PARAM_INT);
        $stmt_check->execute();
        
        $like_exists = $stmt_check->fetch();

        if ($like_exists) {
            // El usuario ya le dio "me gusta", por lo que se elimina el "me gusta" (toggle like)
            $stmt_delete = $conn->prepare("DELETE FROM likes WHERE id_user = :id_user AND id_content = :id_content");
            $stmt_delete->bindParam(':id_user', $id_user, PDO::PARAM_INT);
            $stmt_delete->bindParam(':id_content', $id_content, PDO::PARAM_INT);
            $stmt_delete->execute();
            
            echo json_encode(["status" => "success", "message" => "Like eliminado con éxito."]);

        } else {
            // El usuario no le ha dado "me gusta", así que se inserta un nuevo registro
            $stmt_insert = $conn->prepare("INSERT INTO likes (id_user, id_content) VALUES (:id_user, :id_content)");
            $stmt_insert->bindParam(':id_user', $id_user, PDO::PARAM_INT);
            $stmt_insert->bindParam(':id_content', $id_content, PDO::PARAM_INT);
            $stmt_insert->execute();

            echo json_encode(["status" => "success", "message" => "Like registrado con éxito."]);
        }

    } catch (PDOException $e) {
        // Capturar y manejar errores de la base de datos
        http_response_code(500); // Internal Server Error
        echo json_encode(["status" => "error", "message" => "Error de la base de datos: " . $e->getMessage()]);
    }

} else {
    // Si la solicitud no es POST, devolver un error
    http_response_code(405); // Method Not Allowed
    echo json_encode(["status" => "error", "message" => "Método de solicitud no permitido."]);
}
?>