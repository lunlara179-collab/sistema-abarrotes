<?php
try {
    $ruta = __DIR__ . "/data/abarrotes.db";
    $conn = new PDO("sqlite:$ruta");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
