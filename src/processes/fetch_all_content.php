<?php
// Incluir el archivo de configuración de la base de datos
require 'db_config.php';

// Establecer el encabezado para que la respuesta sea JSON
header('Content-Type: application/json');

// Preparar la consulta SQL para seleccionar el contenido más reciente de todos los creadores
$sql = "SELECT c.id_content, c.title, c.description, c.type_content, c.url_file, u.username as creator_name
        FROM content c
        JOIN users u ON c.id_creator = u.id_users
        WHERE c.state = 'active'
        ORDER BY c.publication_date DESC
        LIMIT 10"; // Puedes ajustar el límite de posts a mostrar

// Usar sentencias preparadas
$stmt = $conn->prepare($sql);

try {
    $stmt->execute();
    $content = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Devolver el contenido en formato JSON
    echo json_encode(['status' => 'success', 'data' => $content]);

} catch (PDOException $e) {
    // En caso de error, devolver un JSON con el mensaje de error
    echo json_encode(['status' => 'error', 'message' => 'Error de base de datos: ' . $e->getMessage()]);
}
