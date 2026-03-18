<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Gerencial</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1e3a5f, #3b82f6);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #3b82f6;
            border: none;
            color: white;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #1e3a5f;
        }
    </style>

</head>
<body>

<div class="login-box">
    <h1>SIG - El Progreso</h1>
    <p>Bienvenido</p>

    <form>
        <input type="text" placeholder="Usuario"><br><br>
        <input type="password" placeholder="Contraseña"><br><br>
        <button>Ingresar</button>
    </form>
</div>

</body>
</html>
