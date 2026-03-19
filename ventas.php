<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Ventas</title>
    <style>
        body { font-family: sans-serif; background-color: #fdfdfd; padding: 20px; }
        .form-container { background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); max-width: 500px; margin: auto; }
        input, select { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; }
        button { background-color: #d4af37; color: white; border: none; padding: 12px; width: 100%; cursor: pointer; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 style="font-weight: 300; text-align: center;">Registrar Nueva Venta</h2>
        <form action="guardar_venta.php" method="POST">
            <input type="text" name="producto" placeholder="Nombre del Producto" required>
            <input type="number" name="cantidad" placeholder="Cantidad" required>
            <input type="number" step="0.01" name="precio" placeholder="Precio Unitario" required>
            <input type="date" name="fecha" required>
            <button type="submit">Guardar Venta</button>
        </form>
    </div>
</body>
</html>
