<?php
include("../config/conexion.php");

// Validación básica
if(empty($_POST['producto']) || empty($_POST['cantidad']) || empty($_POST['precio']) || empty($_POST['fecha'])){
    echo "Todos los campos son obligatorios";
    exit;
}

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO ventas (producto, cantidad, precio, fecha)
VALUES ('$producto', '$cantidad', '$precio', '$fecha')";

if ($conn->query($sql)) {
    echo "Guardado correctamente <br>";
    echo "<a href='formulario.php'>Regresar</a>";
} else {
    echo "Error: " . $conn->error;
}
?>
