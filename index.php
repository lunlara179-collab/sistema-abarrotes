<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>SIG - El Progreso</title>
<style>
body{margin:0;font-family:'Segoe UI',sans-serif;background:linear-gradient(120deg,#0f172a,#1e293b,#0ea5e9);height:100vh;display:flex;justify-content:center;align-items:center}
.login-box{background:rgba(15,23,42,.85);padding:40px;border-radius:18px;box-shadow:0 15px 40px rgba(0,0,0,.4);width:350px;color:#fff;text-align:center}
h1{margin:0;font-weight:600;letter-spacing:1px}
p{color:#cbd5f5;font-size:14px;margin:10px 0 25px}
.input-group{margin:15px 0;text-align:left}
input{width:100%;padding:12px;border:none;border-radius:10px;background:#1e293b;color:#fff;outline:none}
input::placeholder{color:#94a3b8}
input:focus{box-shadow:0 0 8px #0ea5e9}
button{width:100%;padding:12px;border:none;border-radius:10px;background:linear-gradient(90deg,#0ea5e9,#38bdf8);color:#fff;font-weight:600;cursor:pointer;transition:.3s}
button:hover{transform:scale(1.05);box-shadow:0 8px 20px rgba(14,165,233,.4)}
.logo{font-size:22px;margin-bottom:10px;color:#38bdf8}
</style></head>
<body>
<div class="login-box">
<div class="logo">SIG</div>
<h1>El Progreso</h1>
<p>Sistema de gestión financiera</p>
<form action="dashboard.php" method="POST">
<div class="input-group"><input type="text" name="usuario" placeholder="Usuario" required></div>
<div class="input-group"><input type="password" name="password" placeholder="Contraseña" required></div>
<button>Ingresar</button>
</form>
</div>
</body></html>
