<?php
include("conexion.php");
$prov=$_POST['proveedor'];
$prod=$_POST['producto'];
$m=$_POST['monto'];
$f=$_POST['fecha'];

$sql="INSERT INTO compras(proveedor,producto,monto,fecha)VALUES('$prov','$prod','$m','$f')";
$conexion->query($sql);

header("Location: compras.php");
?>
