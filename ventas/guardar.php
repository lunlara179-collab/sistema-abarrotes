<?php
include("../config/conexion.php");

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$sql = "INSERT INTO ventas (producto, cantidad, precio)
        VALUES ('$producto', '$cantidad', '$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Venta guardada correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>
