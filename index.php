<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>SIG - El Progreso</title>
<style>
body{margin:0;font-family:Arial;background:linear-gradient(135deg,#1e3a5f,#3b82f6);height:100vh;display:flex;justify-content:center;align-items:center}
.login-box{background:#fff;padding:30px;border-radius:12px;box-shadow:0 8px 20px rgba(0,0,0,.2);text-align:center;width:320px}
h1{color:#1e3a5f;margin:0 0 10px}
p{color:#555;font-size:14px;margin-bottom:20px}
.input-group{text-align:left;margin-bottom:15px}
label{font-size:14px;font-weight:bold}
input{width:100%;padding:8px;margin-top:5px;border:1px solid #ccc;border-radius:6px;outline:none}
input:focus{border-color:#3b82f6}
button{width:100%;padding:10px;background:#3b82f6;border:none;color:#fff;border-radius:6px;font-size:15px;cursor:pointer;transition:.3s}
button:hover{background:#1e3a5f}
</style>
</head>
<body>
<div class="login-box">
<h1>SIG - El Progreso</h1>
<p>Gestión financiera inteligente</p>
<form action="dashboard.php" method="POST">
<div class="input-group"><label>Usuario</label><input type="text" name="usuario" required></div>
<div class="input-group"><label>Contraseña</label><input type="password" name="password" required></div>
<button type="submit">Ingresar</button>
</form>
</div>
</body></html>
