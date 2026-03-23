<?php
include("../conexion.php");

// Validar datos
if (empty($_POST['producto']) || empty($_POST['cantidad']) || empty($_POST['precio']) || empty($_POST['fecha'])) {
    echo "Todos los campos son obligatorios";
    exit;
}

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha'];

// Insertar en la base de datos
$sql = "INSERT INTO ventas (producto, cantidad, precio, fecha)
        VALUES ('$producto', '$cantidad', '$precio', '$fecha')";

if ($conn->query($sql) === TRUE) {
    echo "Venta guardada correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>
