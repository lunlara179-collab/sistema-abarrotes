<?php
include("conexion.php");

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$sql = "INSERT INTO ventas (producto, cantidad, precio) 
        VALUES ('$producto', '$cantidad', '$precio')";

if ($conexion->query($sql) === TRUE) {
    echo "<h3>Venta registrada</h3>";
    echo "Producto: " . $producto . "<br>";
    echo "Cantidad: " . $cantidad . "<br>";
    echo "Precio: " . $precio . "<br>";
} else {
    echo "Error: " . $conexion->error;
}
?>
