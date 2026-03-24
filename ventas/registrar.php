<!DOCTYPE html>
<html>
<head>
    <title>Registrar Venta</title>
</head>
<body>

<h2>Registrar Venta</h2>

<form action="guardar.php" method="POST">
    Producto: <input type="text" name="producto"><br><br>
    Cantidad: <input type="number" name="cantidad"><br><br>
    Precio: <input type="number" step="0.01" name="precio"><br><br>

   <a href="ventas/registrar.php">
    <button class="btn-main">Ir a Ventas</button>
</a>
</form>

</body>
</html>
