<?php
include("conexion.php");
$t=$_POST['tipo'];
$d=$_POST['descripcion'];
$m=$_POST['monto'];
$f=$_POST['fecha'];

$sql="INSERT INTO gastos(tipo,descripcion,monto,fecha)VALUES('$t','$d','$m','$f')";
$conexion->query($sql);

header("Location: gastos.php");
?>
