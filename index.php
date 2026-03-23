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
