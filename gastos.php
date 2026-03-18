<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>Gastos</title></head>
<body>
<h2>Registrar Gasto</h2>
<form action="guardar_gasto.php" method="POST">
<input type="text" name="tipo" placeholder="Tipo de gasto" required>
<input type="text" name="descripcion" placeholder="Descripción" required>
<input type="number" name="monto" placeholder="Monto" required>
<input type="date" name="fecha" required>
<button>Guardar</button>
</form>
</body></html>
