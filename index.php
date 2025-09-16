<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Prueba en Laragon</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            color: #333;
            text-align: center;
        }

        header {
            background-color: #222;
            color: #fff;
            padding: 20px;
        }

        h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        main {
            padding: 40px;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            display: inline-block;
            padding: 20px;
            margin: 10px;
            width: 250px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card h2 {
            margin-top: 0;
            color: #4facfe;
        }

        footer {
            background-color: #222;
            color: #fff;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>🚀 Bienvenido a mi página de prueba en Laragon</h1>
    </header>

    <main>
        <p>Este es un ejemplo sencillo de un proyecto PHP con HTML y CSS en Laragon.</p>

        <div class="card">
            <h2>PHP</h2>
            <p>
                <?php echo "Versión actual de PHP: " . phpversion(); ?>
            </p>
        </div>

        <div class="card">
            <h2>Fecha</h2>
            <p>
                <?php echo "Hoy es " . date("d/m/Y H:i:s"); ?>
            </p>
        </div>
    </main>

    <footer>
        <p>© <?php echo date("Y"); ?> Mi Proyecto en Laragon</p>
    </footer>
</body>
</html>