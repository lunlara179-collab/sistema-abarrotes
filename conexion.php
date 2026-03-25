<?php
// conexion.php

// __DIR__ obtiene la ruta de la carpeta donde reside ESTE archivo (conexion.php)
// Asumiendo que conexion.php está en la raíz del proyecto:
$rutaBaseDeDatos = __DIR__ . '/abarrotes.db';

try {
    $pdo = new PDO("sqlite:" . $rutaBaseDeDatos);
    // Configurar para que lance excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
