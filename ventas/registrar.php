<!DOCTYPE html>
<html>
<head>
    <title>Registrar Venta</title>
</head>

<body>

<div class="container">

    <h2>📦 Registrar Venta</h2>
    <p>Ingresa los datos de la venta</p>

    <div class="glass-card">

        <form action="guardar.php" method="POST">

            <label>Producto</label>
            <input type="text" name="producto" required>

            <label>Cantidad</label>
            <input type="number" name="cantidad" required>

            <label>Precio</label>
            <input type="number" step="0.01" name="precio" required>

            <button class="btn-main">Guardar Venta</button>

        </form>

    </div>

    <a href="../index.php">⬅ Volver al inicio</a>

</div>

<style>
:root {
    --bg-pastel: #f0f4f8;
    --btn-color: #00acc1;
}

body {
    font-family: 'Segoe UI';
    background: var(--bg-pastel);
}

.container {
    width: 400px;
    margin: auto;
    margin-top: 80px;
}

.glass-card {
    background: white;
    padding: 30px;
    border-radius: 20px;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
}

label {
    font-weight: bold;
}

.btn-main {
    width: 100%;
    padding: 12px;
    background: var(--btn-color);
    color: white;
    border: none;
    border-radius: 10px;
}
</style>

</body>
</html> <!DOCTYPE html>
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

    <button type="submit">Guardar</button>
</form>

<a href="../index.php">Volver</a>

</body>
</html>
