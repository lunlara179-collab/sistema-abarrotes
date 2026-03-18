<?php $usuario=$_POST['usuario']??'Usuario'; ?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>Dashboard</title>
<style>
body{margin:0;font-family:Arial;background:#f5f7fa}
header{background:#1e3a5f;color:#fff;padding:15px;text-align:center}
nav{background:#3b82f6;padding:10px;text-align:center}
nav a{color:#fff;margin:0 15px;text-decoration:none;font-weight:bold}
nav a:hover{text-decoration:underline}
main{padding:20px}
</style></head>
<body>
<header><h2>Bienvenido, <?php echo $usuario;?></h2></header>
<nav>
<a href="ventas.php">Ventas</a>
<a href="compras.php">Compras</a>
<a href="gastos.php">Gastos</a>
</nav>
<main><h3>Panel Principal</h3><p>Selecciona una opción del menú</p></main>
</body></html>
