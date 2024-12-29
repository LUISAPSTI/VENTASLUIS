<?php
require 'includes/db.php';

// Verifica si se recibieron los productos seleccionados
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['productos'])) {
    // Obtiene los productos seleccionados
    $producto_ids = $_POST['productos'];
    // Consulta para obtener los detalles de los productos seleccionados
    $placeholders = implode(',', array_fill(0, count($producto_ids), '?'));
    $query = "SELECT * FROM productos WHERE id IN ($placeholders)";
    $stmt = $conn->prepare($query);
    $stmt->execute($producto_ids);
    $productos_seleccionados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Calcular el total
    $total = 0;
    foreach ($productos_seleccionados as $producto) {
        $total += $producto['precio'];
    }

    // Calcular el IGV (18%)
    $igv = $total * 0.18;

    // Calcular el total con IGV
    $total_con_igv = $total + $igv;
    
    // Numeración de la factura (se empieza desde 1)
    $numero_factura = 1; // Asignación manual para empezar desde 1
    $fecha_hora = date("Y-m-d H:i:s"); // Fecha y hora actual

    // Guardar la factura en la base de datos
    $productos_json = json_encode($productos_seleccionados); // Convierte los productos en un JSON para guardarlos
    $insert_query = "INSERT INTO facturas (numero_factura, fecha_hora, total, igv, total_con_igv, productos)
                     VALUES (?, ?, ?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($insert_query);
    $stmt_insert->execute([$numero_factura, $fecha_hora, $total, $igv, $total_con_igv, $productos_json]);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Pedido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
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

        .facturas-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin: 20px 0;
        }

        .factura {
            width: 48%;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border: 2px solid #1d3557;
        }

        .factura .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .factura .logo img {
            max-width: 150px;
        }

        .factura table {
            width: 100%;
            border-collapse: collapse;
        }

        .factura table, th, td {
            border: 1px solid #ddd;
        }

        .factura th, td {
            padding: 10px;
            text-align: center;
        }

        .factura .numero-factura {
            text-align: right;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .total {
            font-size: 1.5em;
            font-weight: bold;
            color: #457b9d;
            text-align: right;
            margin-top: 20px;
        }

        .botones-footer {
            margin-top: 20px;
            text-align: center;
        }

        .botones-footer button, .botones-footer a {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.2em;
            background-color: #457b9d;
            color: white;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .botones-footer button:hover, .botones-footer a:hover {
            background-color: #1d3557;
        }

        .volver-catalogo {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.2em;
            background-color: #457b9d;
            color: white;
            transition: background-color 0.3s ease;
            display: inline-block;
            margin-left: 10px;
        }

        .volver-catalogo:hover {
            background-color: #1d3557;
        }
    </style>
</head>
<body>

    <h2>Factura Preliminar</h2>

    <div class="facturas-container">
        <!-- Factura para la empresa -->
        <div class="factura">
            <div class="logo">
                <img src="https://www.zarla.com/images/zarla-compu-space-1x1-2400x2400-20210603-9x3dmk6pq9jgdpm8rwh4.png?crop=1:1,smart&width=250&dpr=2" alt="Logo Empresa">
            </div>
            <div class="numero-factura">
                <p>Número de Factura: <?= $numero_factura ?></p>
                <p>Fecha y Hora: <?= $fecha_hora ?></p>
            </div>
            <h3>Factura - Empresa</h3>
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos_seleccionados as $producto): ?>
                        <tr>
                            <td><?= htmlspecialchars($producto['nombre']) ?></td>
                            <td>S/ <?= number_format($producto['precio'], 2) ?></td>
                            <td>1</td>
                            <td>S/ <?= number_format($producto['precio'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="total">
                <p>Total: S/ <?= number_format($total, 2) ?></p>
                <p>IGV (18%): S/ <?= number_format($igv, 2) ?></p>
                <p><strong>Total con IGV: S/ <?= number_format($total_con_igv, 2) ?></strong></p>
            </div>
        </div>

        <!-- Factura para el cliente -->
        <div class="factura">
            <div class="logo">
                <img src="https://www.zarla.com/images/zarla-compu-space-1x1-2400x2400-20210603-9x3dmk6pq9jgdpm8rwh4.png?crop=1:1,smart&width=250&dpr=2" alt="Logo Empresa">
            </div>
            <div class="numero-factura">
                <p>Número de Factura: <?= $numero_factura ?></p>
                <p>Fecha y Hora: <?= $fecha_hora ?></p>
            </div>
            <h3>Factura - Cliente</h3>
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos_seleccionados as $producto): ?>
                        <tr>
                            <td><?= htmlspecialchars($producto['nombre']) ?></td>
                            <td>S/ <?= number_format($producto['precio'], 2) ?></td>
                            <td>1</td>
                            <td>S/ <?= number_format($producto['precio'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="total">
                <p>Total: S/ <?= number_format($total, 2) ?></p>
                <p>IGV (18%): S/ <?= number_format($igv, 2) ?></p>
                <p><strong>Total con IGV: S/ <?= number_format($total_con_igv, 2) ?></strong></p>
            </div>
        </div>
    </div>

    <div class="botones-footer">
        <button onclick="window.print()">Confirmar Pedido e Imprimir Facturas</button>
        <a href="catalogo.php" class="volver-catalogo">Volver al Catálogo</a>
    </div>

</body>
</html>
