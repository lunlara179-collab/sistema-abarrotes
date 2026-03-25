<?php
include 'conexion.php';

$conn->exec("CREATE TABLE IF NOT EXISTS ventas (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    producto TEXT,
    cantidad INTEGER,
    precio REAL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP
)");

echo "Tabla ventas creada correctamente";
?>
