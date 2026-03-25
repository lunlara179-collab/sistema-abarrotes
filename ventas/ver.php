<?php
include '../conexion.php';

$result = $conn->query("SELECT * FROM ventas");
?>

<h2>Ventas registradas</h2>

<table border="1">
<tr>
  <th>Producto</th>
  <th>Cantidad</th>
  <th>Precio</th>
  <th>Fecha</th>
</tr>

<?php foreach ($result as $row): ?>
<tr>
  <td><?= $row['producto'] ?></td>
  <td><?= $row['cantidad'] ?></td>
  <td><?= $row['precio'] ?></td>
  <td><?= $row['fecha'] ?></td>
</tr>
<?php endforeach; ?>

</table>
