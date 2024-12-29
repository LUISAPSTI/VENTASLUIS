<?php
require 'includes/db.php';

// Obtener el ID del producto desde la URL
if (isset($_GET['id'])) {
    $producto_id = $_GET['id'];

    // Obtener los detalles del producto
    $query = "SELECT * FROM productos WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $producto_id, PDO::PARAM_INT);
    $stmt->execute();
    $producto = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($producto) {
        // Calcular el IGV (18%)
        $precio_con_igv = $producto['precio'] * 1.18;
        $igv = $precio_con_igv - $producto['precio'];
    } else {
        echo "Producto no encontrado.";
        exit();
    }
} else {
    echo "ID del producto no especificado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura - <?= $producto['nombre'] ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Estilo para el contenedor de la factura */
        .factura-container {
            width: 60%;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border: 2px solid #457b9d;
        }

        h2 {
            text-align: center;
            color: #1d3557;
            font-size: 2em;
            margin: 20px 0;
        }

        /* Logo de la empresa */
        .logo {
            display: block;
            margin: 0 auto;
            width: 150px; /* Ajusta el tamaño del logo según sea necesario */
            height: auto;
        }

        .detalle {
            margin-top: 20px;
            padding: 20px;
            border: 2px solid #457b9d;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .detalle p {
            font-size: 1.2em;
        }

        .detalle .precio {
            font-weight: bold;
            color: #457b9d;
        }

        .detalle .igv {
            font-weight: bold;
            color: red;
        }

        .detalle .total {
            font-weight: bold;
            font-size: 1.5em;
            color: green;
        }

        .volver {
            display: block;
            text-align: center;
            background-color: #457b9d;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 30px;
            transition: background-color 0.3s ease;
        }

        .volver:hover {
            background-color: #1d3557;
        }
    </style>
</head>
<body>

    <div class="factura-container">
        <!-- Logo de la empresa en la parte superior central -->
        <img src="https://www.zarla.com/images/zarla-compu-space-1x1-2400x2400-20210603-9x3dmk6pq9jgdpm8rwh4.png?crop=1:1,smart&width=250&dpr=2" alt="Logo de la Empresa" class="logo">

        <h2>Factura de Compra</h2>

        <div class="detalle">
            <p>Producto: <?= $producto['nombre'] ?></p>
            <p>Precio sin IGV: $<?= number_format($producto['precio'], 2) ?></p>
            <p class="igv">IGV (18%): $<?= number_format($igv, 2) ?></p>
            <p class="total">Precio Total: $<?= number_format($precio_con_igv, 2) ?></p>
        </div>
        
        <a href="catalogo.php" class="volver">Volver al Catálogo</a>
    </div>

</body>
</html>
