<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../conexion.php';

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$conn = $conexion(sql);
$ress =$conexion->query(sql);      
$sql = "INSERT INTO ventas (producto, cantidad, precio)
        VALUES (:producto, :cantidad, :precio)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':producto', $producto);
$stmt->bindParam(':cantidad', $cantidad);
$stmt->bindParam(':precio', $precio);

$stmt->execute();

// Redirige a ver ventas
header("Location: ver.php");
exit();
?>
