<?php
$db = new SQLite3('data/abarrotes.db');

// TABLA VENTAS
$db->exec("CREATE TABLE IF NOT EXISTS ventas (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    producto TEXT,
    cantidad INTEGER,
    precio REAL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP
)");

// TABLA COMPRAS
$db->exec("CREATE TABLE IF NOT EXISTS compras (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    producto TEXT,
    cantidad INTEGER,
    costo REAL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP
)");

// TABLA GASTOS
$db->exec("CREATE TABLE IF NOT EXISTS gastos (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    descripcion TEXT,
    monto REAL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP
)");

echo "Tablas creadas correctamente";
?>
