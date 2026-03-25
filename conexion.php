<?php
try {
    $ruta = __DIR__ . "/abarrotes.db"; // 👈 AQUÍ ESTÁ LA CLAVE

    $conn = new PDO("sqlite:$ruta");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
