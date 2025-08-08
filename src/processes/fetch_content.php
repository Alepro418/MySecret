<?php
// Incluir el archivo de conexión a la base de datos PDO
require_once 'db_config.php';

// Establecer el encabezado de respuesta como JSON
header('Content-Type: application/json');

// Verificar si la solicitud es de tipo GET y si tiene un id_content
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_content'])) {

    $id_content = $_GET['id_content'];

    // Validar que el ID es un número entero
    if (!filter_var($id_content, FILTER_VALIDATE_INT)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "ID de contenido inválido."]);
        exit;
    }

    try {
        // Preparar la consulta para obtener los detalles del contenido
        $stmt = $conn->prepare("SELECT title, type_content, url_file FROM content WHERE id_content = :id_content");
        $stmt->bindParam(':id_content', $id_content, PDO::PARAM_INT);
        $stmt->execute();
        $content = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($content) {
            // **IMPORTANTE**: Aquí deberías añadir la lógica para verificar si el usuario tiene acceso
            // a este contenido (por suscripción o compra). Si no tiene acceso, puedes devolver un error.
            
            echo json_encode(["status" => "success", "data" => $content]);
        } else {
            http_response_code(404);
            echo json_encode(["status" => "error", "message" => "Contenido no encontrado."]);
        }

    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Error de la base de datos: " . $e->getMessage()]);
    }

} else {
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Método no permitido o ID de contenido no proporcionado."]);
}
?>