<?php
session_start();
$usuario=$_POST['usuario']??'Usuario';
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>Dashboard</title>
<style>
body{margin:0;font-family:'Segoe UI',sans-serif;background:#0f172a;color:#fff;display:flex}
.sidebar{width:220px;background:#020617;height:100vh;padding:20px;box-shadow:5px 0 20px rgba(0,0,0,.5)}
.sidebar h2{color:#38bdf8;text-align:center;margin-bottom:30px}
.sidebar a{display:block;color:#cbd5f5;padding:10px;border-radius:8px;text-decoration:none;margin:5px 0;transition:.3s}
.sidebar a:hover{background:#0ea5e9;color:#fff}
.main{flex:1;padding:20px}
.header{display:flex;justify-content:space-between;align-items:center;margin-bottom:20px}
.header h1{font-size:22px}
.cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px}
.card{background:#1e293b;padding:20px;border-radius:15px;box-shadow:0 10px 25px rgba(0,0,0,.4);transition:.3s}
.card:hover{transform:translateY(-5px)}
.card h3{margin:0 0 10px;color:#38bdf8}
.logout{color:#f87171;text-decoration:none}
</style></head>
<body>

<div class="sidebar">
<h2>SIG</h2>
<a href="#">🏠 Inicio</a>
<a href="#">📦 Productos</a>
<a href="#">👥 Clientes</a>
<a href="#">💰 Ventas</a>
<a href="#">⚙️ Configuración</a>
<a href="logout.php" class="logout">Cerrar sesión</a>
</div>

<div class="main">
<div class="header">
<h1>Bienvenido, <?php echo $usuario; ?></h1>
</div>

<div class="cards">
<div class="card"><h3>Ventas Hoy</h3><p>$0.00</p></div>
<div class="card"><h3>Productos</h3><p>0 registrados</p></div>
<div class="card"><h3>Clientes</h3><p>0 activos</p></div>
<div class="card"><h3>Ingresos</h3><p>$0.00</p></div>
</div>
</div>

</body></html>
