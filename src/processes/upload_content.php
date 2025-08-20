<?php

// Incluir el archivo de conexión a la base de datos
require 'db_config.php';

// Validar que la sesión del creador esté activa
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['type_user'] !== 'creator') {
    // Redirigir si no es un creador o no ha iniciado sesión
    header("Location: ../../../public/sign_in.php");
    exit();
}

// Obtener el ID del creador de la sesión
$creator_id = $_SESSION['user_id'];

// Procesar el formulario de subida de contenido
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitizar y obtener los datos del formulario
    $title = filter_input(INPUT_POST, 'contentTitle', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'contentDescription', FILTER_SANITIZE_STRING);
    $contentType = filter_input(INPUT_POST, 'contentType', FILTER_SANITIZE_STRING);
    // Nota: Las etiquetas se pueden procesar por separado si es necesario
    $tags = filter_input(INPUT_POST, 'contentTags', FILTER_SANITIZE_STRING);

    // Manejar la subida del archivo
    $upload_dir = '/MySecret/uploads/content/'; // Carpeta donde se guardarán los archivos
    $file_path = null;

    if (isset($_FILES['contentFile']) && $_FILES['contentFile']['error'] === UPLOAD_ERR_OK) {
        $file_name = uniqid() . '_' . basename($_FILES['contentFile']['name']);
        $target_file = $upload_dir . $file_name;

        // Mover el archivo subido al directorio de destino
        if (move_uploaded_file($_FILES['contentFile']['tmp_name'], $target_file)) {
            $file_path = $target_file;
        } else {
            // Manejar error de subida
            $_SESSION['error'] = "Hubo un error al subir el archivo.";
            header("Location: ../creator/create_content.php");
            exit();
        }
    }
    
    // Preparar la consulta SQL para insertar el contenido en la base de datos
    // Usar sentencias preparadas para prevenir inyección SQL
    $sql = "INSERT INTO content (id_creator, title, description, type_content, url_file, state) VALUES (?, ?, ?, ?, ?, 'active')";

    // ASUMIR que $conn es el objeto de conexión PDO, definido en db_config.php
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros y ejecutar la consulta
    try {
        $stmt->execute([$creator_id, $title, $description, $contentType, $file_path]);
        
        // Redirigir al creador a su perfil o a una página de éxito
        $_SESSION['success'] = "Contenido subido exitosamente.";
        header("Location: ../creator/creator_profile.php");
        exit();

    } catch (PDOException $e) {
        // Manejar el error de la base de datos
        $_SESSION['error'] = "Error de base de datos: " . $e->getMessage();
        header("Location: ../creator/create_content.php");
        exit();
    }
} else {
    // Si la solicitud no es POST, redirigir
    header("Location: ../creator/create_content.php");
    exit();
}