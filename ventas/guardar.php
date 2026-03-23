<?php
include("../config/conexion.php");

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO ventas (producto, cantidad, precio, fecha)
VALUES (:producto, :cantidad, :precio, :fecha)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':producto', $producto);
$stmt->bindParam(':cantidad', $cantidad);
$stmt->bindParam(':precio', $precio);
$stmt->bindParam(':fecha', $fecha);

if ($stmt->execute()) {
    echo "Guardado correctamente";
} else {
    echo "Error al guardar";
}
?>
