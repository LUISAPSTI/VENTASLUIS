<?php
session_start();
if (!isset($_SESSION['cliente'])) {
    header("Location: cliente_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Cliente</title>
    <style>
        /* Imagen de fondo en toda la página */
        body {
            font-family: Arial, sans-serif;
            background: url('https://i.pinimg.com/originals/40/32/e5/4032e5fb4cf8094a909c18970a5a6b54.gif') repeat-x;
            animation: scroll-background 20s linear infinite;
            margin: 0;
            padding: 0;
            color: #333;
            height: 100vh; /* Asegura que el fondo cubra toda la altura de la página */
            background-size: 100% auto; /* Asegura que la imagen se estire a lo largo de toda la página */
        }

        @keyframes scroll-background {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: 100% 0;
            }
        }

        /* Contenedor del panel de cliente */
        .dashboard-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #457b9d;
            font-size: 2.5em;
            text-align: center;
        }

        h2 {
            color: #1d3557;
            font-size: 1.8em;
            text-align: center;
            margin-bottom: 30px;
        }

        a {
            display: block;
            text-align: center;
            font-size: 1.2em;
            background-color: #457b9d;
            color: white;
            padding: 12px 20px;
            margin: 10px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #1d3557;
        }

        .logout {
            background-color: #e63946;
        }

        .logout:hover {
            background-color: #d62828;
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <h1>Bienvenido, Cliente!</h1>
        <h2>Tenemos las mejores laptops</h2>

        <a href="catalogo.php">Catalogo</a>
        <a href="mis_pedidos.php">Mis Pedidos</a>
        <a href="logout.php" class="logout">Cerrar Sesión</a>
    </div>

</body>
</html>
