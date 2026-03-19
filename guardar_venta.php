<?php
include 'conexión.php';
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha'];
if ($cantidad > 0 && $precio > 0) {
    $sql = "INSERT INTO ventas (producto, cantidad, precio_unitario, fecha) 
            VALUES ('$producto', $cantidad, $precio, '$fecha')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Venta registrada con éxito'); window.location='ventas.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "<script>alert('Los datos deben ser positivos'); window.history.back();</script>";
}
?>
