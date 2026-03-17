<?php
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha'];

echo "<h3>Venta registrada</h3>";
echo "Producto: " . $producto . "<br>";
echo "Cantidad: " . $cantidad . "<br>";
echo "Precio: " . $precio . "<br>";
echo "Fecha: " . $fecha;
?>
