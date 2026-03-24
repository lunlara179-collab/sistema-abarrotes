<?php
include("conexion.php");

$fecha = $_POST['fecha'];
$total = $_POST['total'];
$id_cliente = $_POST['id_cliente'];

$sql = "INSERT INTO ventas (fecha, total, id_cliente)
VALUES ('$fecha', '$total', '$id_cliente')";

if ($conn->query($sql) === TRUE) {
    echo "Venta guardada correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>