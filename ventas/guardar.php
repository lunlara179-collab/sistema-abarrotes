<?php
include("../config/conexion.php");

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO ventas (producto, cantidad, precio, fecha)
VALUES ('$producto', '$cantidad', '$precio', '$fecha')";

if ($conn->query($sql)) {
    echo "Guardado correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>
