<!DOCTYPE html>
<html>
<head>
    <title>SIG "El Progreso"</title>
</head>

<body>

<div class="sidebar">
    <h2>SIG "El Progreso"</h2>
    <p style="font-size: 0.8rem; margin-bottom: 30px;">Sprint 1: Captura de Datos</p>

    <!-- CORREGIDO -->
    <a href="index.php" class="nav-link active">🏠 Panel de Control</a>
    <a href="#" class="nav-link">👥 Gestión de Personal</a>

    <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">

    <!-- YA FUNCIONAN -->
    <a href="ventas/registrar.php" class="nav-link">📦 Registrar Venta</a>
    <a href="compras/registrar.php" class="nav-link">🛒 Registrar Compra</a>
    <a href="gastos/registrar.php" class="nav-link">💸 Registrar Gasto</a>
</div>

<div class="container">
    <h1 style="color: #37474f;">Panel de Entradas</h1>
    <p>Seleccione la operación que desea centralizar hoy.</p>

    <div class="form-grid" style="grid-template-columns: repeat(3, 1fr); margin-top: 40px;">

        <!-- VENTAS -->
        <div class="glass-card" style="text-align: center; padding: 25px;">
            <div style="font-size: 2rem;">📦</div>
            <h3>Ventas</h3>
            <p style="font-size: 0.85rem;">Registro de productos, cantidad y precios.</p>
            <a href="ventas/registrar.php">
                <button class="btn-main">Ir a Ventas</button>
            </a>
        </div>

        <!-- COMPRAS -->
        <div class="glass-card" style="text-align: center; padding: 25px;">
            <div style="font-size: 2rem;">🛒</div>
            <h3>Compras</h3>
            <p style="font-size: 0.85rem;">Entrada de mercancía de proveedores.</p>
            <a href="compras/registrar.php">
                <button class="btn-main">Ir a Compras</button>
            </a>
        </div>

        <!-- GASTOS -->
        <div class="glass-card" style="text-align: center; padding: 25px;">
            <div style="font-size: 2rem;">💸</div>
            <h3>Gastos</h3>
            <p style="font-size: 0.85rem;">Control de egresos operativos y servicios.</p>
            <a href="gastos/registrar.php">
                <button class="btn-main">Ir a Gastos</button>
            </a>
        </div>

    </div>
</div>

<style>
:root {
    --bg-pastel: #f0f4f8;
    --card-bg: #ffffff;
    --accent-soft: #b2ebf2;
    --primary-text: #455a64;
    --input-focus: #80deea;
    --btn-color: #00acc1;
}

body {
    font-family: 'Segoe UI', Roboto, sans-serif;
    background-color: var(--bg-pastel);
    color: var(--primary-text);
    margin: 0;
    display: flex;
    min-height: 100vh;
}

.sidebar {
    width: 260px;
    background: white;
    box-shadow: 4px 0 10px rgba(0,0,0,0.05);
    padding: 30px 20px;
}

.nav-link {
    display: block;
    padding: 15px;
    margin: 8px 0;
    text-decoration: none;
    border-radius: 12px;
    color: var(--primary-text);
}

.nav-link:hover, .nav-link.active {
    background: var(--accent-soft);
}

.container {
    padding: 50px;
    flex-grow: 1;
}

.glass-card {
    background: white;
    padding: 20px;
    border-radius: 20px;
}

.form-grid {
    display: grid;
    gap: 20px;
}

.btn-main {
    background: #00acc1;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 10px;
    cursor: pointer;
}
</style>

</body>
</html>
