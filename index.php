<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Gerencial - El Progreso</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
    <div class="login-box">
        <h1>SIG - El Progreso</h1>
        <p>Bienvenido al sistema de gestión financiera</p>
        <form action="dashboard.php" method="POST">     
            <div class="input-group">
                <label>Usuario</label>
                <input type="text" name="usuario" required>
            </div>
            <div class="input-group">
                <label>Contraseña</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</div>

</body>
</html>
