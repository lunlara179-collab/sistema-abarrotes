<!DOCTYPE html>
<html>
<head>
    <title>Registrar Venta</title>
</head>
<body>

<h2>Registrar Venta</h2>

<form action="guardar.php" method="POST">
    <input type="text" name="producto" placeholder="Producto" required><br><br>

    <input type="number" name="cantidad" placeholder="Cantidad" required><br><br>

    <input type="number" step="0.01" name="precio" placeholder="Precio" required><br><br>

    <input type="date" name="fecha" required><br><br>

    <button type="submit">Guardar</button>
</form>

</body>
</html>
