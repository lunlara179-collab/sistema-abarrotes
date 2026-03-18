<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>SIG - El Progreso</title>
<style>
body{margin:0;font-family:'Segoe UI',Arial;background:linear-gradient(135deg,#e0f2fe,#f8fafc);height:100vh;display:flex;justify-content:center;align-items:center}
.login-box{background:rgba(255,255,255,.85);backdrop-filter:blur(10px);padding:35px;border-radius:15px;box-shadow:0 10px 30px rgba(0,0,0,.1);text-align:center;width:340px}
h1{color:#1e3a5f;margin-bottom:5px}
p{color:#64748b;font-size:14px;margin-bottom:20px}
.input-group{margin-bottom:15px;text-align:left}
input{width:100%;padding:10px;border-radius:8px;border:1px solid #cbd5e1;outline:none;transition:.3s}
input:focus{border-color:#3b82f6;box-shadow:0 0 5px rgba(59,130,246,.3)}
button{width:100%;padding:12px;background:linear-gradient(90deg,#3b82f6,#06b6d4);border:none;color:#fff;border-radius:8px;font-size:15px;cursor:pointer;transition:.3s}
button:hover{transform:scale(1.03);box-shadow:0 5px 15px rgba(59,130,246,.3)}
</style></head>
<body>
<div class="login-box">
<h1>SIG</h1>
<p>Distribuidora "El Progreso"</p>
<form action="dashboard.php" method="POST">
<div class="input-group"><input type="text" name="usuario" placeholder="👤 Usuario" required></div>
<div class="input-group"><input type="password" name="password" placeholder="🔒 Contraseña" required></div>
<button>Ingresar</button>
</form>
</div>
</body></html>
