<?php
require 'includes/db.php';

$query = "SELECT * FROM productos";
$stmt = $conn->prepare($query);
$stmt->execute();
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #1d3557;
            padding: 20px;
            background-color: #457b9d;
            margin: 0;
            font-size: 2em;
            border-bottom: 5px solid #1d3557;
        }

        .productos {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .producto {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 250px;
            margin: 15px;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .producto:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .producto img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .producto h3 {
            color: #1d3557;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .producto p {
            font-size: 1em;
            margin: 5px 0;
            color: #555;
        }

        /* Estilo para el stock */
        .producto .stock {
            font-weight: bold;
            color: red;
            font-size: 1.1em;
            margin-top: 10px;
        }

        /* Estilo para el botón de ver factura */
        .producto .ver-factura {
            display: inline-block;
            background-color: #457b9d;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }

        .producto .ver-factura:hover {
            background-color: #1d3557;
        }
    </style>
</head>
<body>

    <h2>Catálogo de Productos</h2>

    <div class="productos">
        <?php foreach ($productos as $producto): ?>
            <div class="producto">
                <img src="<?= $producto['imagen_url'] ?>" alt="<?= $producto['nombre'] ?>">
                <h3><?= $producto['nombre'] ?></h3>
                <p><?= $producto['descripcion'] ?></p>
                <p><strong>Precio: $<?= number_format($producto['precio'], 2) ?></strong></p>
                <p class="stock">Stock disponible: <?= $producto['stock'] ?> unidades</p>

                <!-- Botón Ver Factura -->
                <a href="factura.php?id=<?= $producto['id'] ?>" class="ver-factura">Ver Factura</a>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
