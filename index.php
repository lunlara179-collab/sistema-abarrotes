<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema "El Progreso" | Gestión Gerencial</title>
    <style>
        :root {
            --blanco-elegante: #fdfdfd;
            --dorado-luz: #d4af37;
            --sombra-suave: rgba(0, 0, 0, 0.05);
            --efecto-brillo: rgba(212, 175, 55, 0.2);
        }

        body {
            background-color: var(--blanco-elegante);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            text-align: center;
            padding: 40px;
            color: #444;
        }

        /* Contenedor de Luces y Tarjetas */
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            width: 80%;
            padding: 20px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 20px var(--sombra-suave);
            transition: all 0.4s ease;
            border: 1px solid #f0f0f0;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            text-decoration: none;
            color: #333;
        }

        /* Efecto de Luz al pasar el mouse */
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px var(--efecto-brillo);
            border-color: var(--dorado-luz);
        }

        .card h3 {
            margin-bottom: 15px;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            background: #fafafa;
            border-radius: 50%;
            margin: 0 auto 20px;
            line-height: 60px;
            font-size: 24px;
            border: 1px solid #eee;
        }
    </style>
</head>
<body>

<header>
    <h1>Distribuidora "El Progreso"</h1>
    <p>Sistema de Información Gerencial</p>
</header>

<div class="container">
    <a href="registro_operaciones.php" class="card">
        <div class="icon-circle">✍️</div>
        <h3>Registros</h3>
        <p>Ventas, Compras y Gastos</p>
    </a>

    <a href="tablero.php" class="card">
        <div class="icon-circle">📊</div>
        <h3>Dashboards</h3>
        <p>Visualización de Indicadores</p>
    </a>

    <a href="reportes.php" class="card">
        <div class="icon-circle">📄</div>
        <h3>Reportes</h3>
        <p>Exportar PDF y Excel</p>
    </a>
</div>

</body>
</html>
