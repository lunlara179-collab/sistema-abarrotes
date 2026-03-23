<div class="sidebar">
    <h2>SIG "El Progreso"</h2>
    <p style="font-size: 0.8rem; margin-bottom: 30px;">Sprint 1: Captura de Datos</p>
    <a href="index.html" class="nav-link active">🏠 Panel de Control</a>
    <a href="usuarios.html" class="nav-link">👥 Gestión de Personal</a>
    <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
    <a href="#" class="nav-link">📦 Registrar Venta</a>
    <a href="#" class="nav-link">🛒 Registrar Compra</a>
    <a href="#" class="nav-link">💸 Registrar Gasto</a>
</div>

<div class="container">
    <h1 style="color: #37474f;">Panel de Entradas</h1>
    <p>Seleccione la operación que desea centralizar hoy.</p>

    <div class="form-grid" style="grid-template-columns: repeat(3, 1fr); margin-top: 40px;">
        <div class="glass-card" style="text-align: center; padding: 25px;">
            <div style="font-size: 2rem; margin-bottom: 10px;">📦</div>
            <h3>Ventas</h3>
            <p style="font-size: 0.85rem;">Registro de productos, cantidad y precios.</p>
            <button class="btn-main" style="padding: 10px;">Ir a Ventas</button>
        </div>
<!DOCTYPE html>
<html>
<body>

<h1>Sistema Abarrotes</h1>

<a href="ventas/formulario.php">Ir a Ventas</a>

</body>
</html>
        <div class="glass-card" style="text-align: center; padding: 25px;">
            <div style="font-size: 2rem; margin-bottom: 10px;">🛒</div>
            <h3>Compras</h3>
            <p style="font-size: 0.85rem;">Entrada de mercancía de proveedores.</p>
            <button class="btn-main" style="padding: 10px;">Ir a Compras</button>
        </div>

        <div class="glass-card" style="text-align: center; padding: 25px;">
            <div style="font-size: 2rem; margin-bottom: 10px;">💸</div>
            <h3>Gastos</h3>
            <p style="font-size: 0.85rem;">Control de egresos operativos y servicios.</p>
            <button class="btn-main" style="padding: 10px;">Ir a Gastos</button>
        </div>
    </div>
</div>
<style>
    :root {
        --bg-pastel: #f0f4f8; /* Azul grisáceo muy tenue */
        --card-bg: #ffffff;
        --accent-soft: #b2ebf2; /* Cian pastel */
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

    /* Sidebar Estilizada */
    .sidebar {
        width: 260px;
        background: white;
        box-shadow: 4px 0 10px rgba(0,0,0,0.05);
        padding: 30px 20px;
    }

    .sidebar h2 { font-size: 1.1rem; color: var(--btn-color); text-transform: uppercase; letter-spacing: 1px; }

    .nav-link {
        display: block;
        padding: 15px;
        margin: 8px 0;
        color: var(--primary-text);
        text-decoration: none;
        border-radius: 12px;
        transition: 0.3s;
    }

    .nav-link:hover, .nav-link.active {
        background: var(--accent-soft);
        color: #006064;
        font-weight: 600;
    }

    /* Contenedor de Formularios */
    .container { padding: 50px; flex-grow: 1; }
    
    .glass-card {
        background: var(--card-bg);
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        max-width: 800px;
        border: 1px solid rgba(255,255,255,0.8);
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .full-width { grid-column: span 2; }

    label { display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; }

    input, select, textarea {
        width: 100%;
        padding: 12px;
        border: 2px solid #e1e8ed;
        border-radius: 10px;
        background: #fdfdfd;
        transition: 0.3s;
        box-sizing: border-box;
    }

    input:focus { border-color: var(--input-focus); outline: none; box-shadow: 0 0 8px rgba(128, 222, 234, 0.4); }

    .btn-main {
        background: var(--btn-color);
        color: white;
        border: none;
        padding: 15px 30px;
        border-radius: 10px;
        cursor: pointer;
        font-weight: bold;
        font-size: 1rem;
        margin-top: 20px;
        width: 100%;
        transition: 0.3s;
    }

    .btn-main:hover { background: #00838f; transform: translateY(-2px); }
</style>
