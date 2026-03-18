<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>Compras</title></head>
<body>
<h2>Registrar Compra</h2>
<form action="guardar_compra.php" method="POST">
<input type="text" name="proveedor" placeholder="Proveedor" required>
<input type="text" name="producto" placeholder="Producto" required>
<input type="number" name="monto" placeholder="Monto" required>
<input type="date" name="fecha" required>
<button>Guardar</button>
</form>
</body></html>
