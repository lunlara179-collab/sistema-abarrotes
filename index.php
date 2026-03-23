<style>
    :root {
        --primary-pastel: #e3f2fd; /* Azul pastel suave */
        --accent-color: #5c6bc0;  /* Azul profesional */
        --text-dark: #37474f;
        --bg-light: #f5f7fa;
        --white: #ffffff;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--bg-light);
        color: var(--text-dark);
        margin: 0;
        display: flex;
    }

    /* Sidebar Navegación */
    .sidebar {
        width: 250px;
        background-color: var(--white);
        height: 100vh;
        box-shadow: 2px 0 5px rgba(0,0,0,0.05);
        padding: 20px;
        position: fixed;
    }

    .sidebar h2 { color: var(--accent-color); font-size: 1.2rem; margin-bottom: 30px; }
    
    .sidebar a {
        display: block;
        padding: 12px;
        color: var(--text-dark);
        text-decoration: none;
        border-radius: 8px;
        margin-bottom: 10px;
        transition: 0.3s;
    }

    .sidebar a:hover, .sidebar a.active {
        background-color: var(--primary-pastel);
        color: var(--accent-color);
        font-weight: bold;
    }

    /* Contenido Principal */
    .main-content {
        margin-left: 280px;
        padding: 40px;
        width: calc(100% - 320px);
    }

    .header-title { margin-bottom: 30px; }
    .header-title h1 { font-size: 2rem; color: var(--accent-color); }

    /* Tarjetas y Contenedores */
    .card {
        background: var(--white);
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        margin-bottom: 20px;
    }

    /* Formularios */
    .form-group { margin-bottom: 15px; }
    label { display: block; margin-bottom: 5px; font-weight: 600; }
    input, select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #fafafa;
    }

    .btn-submit {
        background-color: var(--accent-color);
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1rem;
        transition: 0.3s;
    }

    .btn-submit:hover { opacity: 0.9; transform: translateY(-2px); }
</style>
<div class="sidebar">
    <h2>SIG El Progreso</h2>
    <a href="#" class="active">🏠 Inicio</a>
    <a href="#">📦 Ventas</a>
    <a href="#">🛒 Compras</a>
    <a href="#">📝 Gastos</a>
    <a href="#">👥 Usuarios</a>
    <a href="#">📊 Reportes</a>
</div>

<div class="main-content">
    <div class="header-title">
        <h1>Resumen Gerencial</h1>
        <p>Bienvenido al control financiero de Distribuidora El Progreso.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div class="card" style="border-left: 5px solid #81c784;">
            <small>Ingresos Mensuales</small>
            <h2 style="color: #2e7d32;">$0.00</h2>
        </div>
        <div class="card" style="border-left: 5px solid #e57373;">
            <small>Egresos Mensuales</small>
            <h2 style="color: #c62828;">$0.00</h2>
        </div>
        <div class="card" style="border-left: 5px solid #64b5f6;">
            <small>Flujo de Efectivo</small>
            <h2 style="color: #1565c0;">$0.00</h2>
        </div>
    </div>

    <div class="card">
        <h3>Evolución de Ventas vs Gastos</h3>
        <div style="height: 200px; background: #f9f9f9; border: 1px dashed #ccc; display: flex; align-items: center; justify-content: center; border-radius: 10px;">
            <p style="color: #999;">[Gráfico Dinámico - Módulo de Visualización]</p>
        </div>
    </div>
</div>
