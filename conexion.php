<?php
// conexion.php - Versión mejorada con rutas absolutas

// Obtener la ruta raíz del proyecto (donde están index.php y conexion.php)
$rutaRaiz = dirname(__FILE__);
$rutaBaseDatos = $rutaRaiz . '/abarrotes.db';

// Debug: Mostrar la ruta (solo durante desarrollo)
error_log("Ruta de base de datos: " . $rutaBaseDatos);

try {
    $pdo = new PDO("sqlite:" . $rutaBaseDatos);
    // Configurar para que lance excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>
