<?php
try {
    $ruta = __DIR__ . "/data/abarrotes.db";

    // Verifica si el archivo existe
    if (!file_exists($ruta)) {
        die("NO EXISTE LA BASE EN: " . $ruta);
    }

    $conn = new PDO("sqlite:$ruta");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
