<?php
include '../conexion.php';

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$sql = "INSERT INTO ventas (producto, cantidad, precio)
        VALUES (:producto, :cantidad, :precio)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':producto', $producto);
$stmt->bindParam(':cantidad', $cantidad);
$stmt->bindParam(':precio', $precio);

$stmt->execute();

// Redirige a ver ventas
header("Location: ver.php");
?>
