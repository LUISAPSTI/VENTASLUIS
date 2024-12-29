<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Empresa de Computadoras y Laptops</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Contenedor principal */
        .empresa-container {
            max-width: 900px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Estilo para el logo */
        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 150px; /* Ajusta el tamaño del logo */
            height: auto;
        }

        h1 {
            text-align: center;
            color: #1d3557;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .descripcion {
            font-size: 1.2em;
            line-height: 1.6;
            color: #555;
            margin-bottom: 30px;
        }

        /* Sección de contacto */
        .contacto {
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
        }

        .contacto h3 {
            text-align: center;
            color: #1d3557;
            font-size: 1.8em;
            margin-bottom: 20px;
        }

        .contacto .info {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-bottom: 15px;
        }

        .contacto .info i {
            font-size: 1.5em;
            color: #457b9d;
            margin-right: 15px;
        }

        .contacto .info p {
            font-size: 1.2em;
            color: #555;
        }

        /* Botón para regresar al inicio */
        .regresar-btn {
            display: block;
            width: 200px;
            margin: 0 auto;
            padding: 10px 20px;
            text-align: center;
            background-color: #457b9d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .regresar-btn:hover {
            background-color: #1d3557;
        }
    </style>
</head>
<body>

    <div class="empresa-container">
        <!-- Logo de la empresa -->
        <img src="https://www.zarla.com/images/zarla-compu-space-1x1-2400x2400-20210603-9x3dmk6pq9jgdpm8rwh4.png?crop=1:1,smart&width=250&dpr=2" alt="Logo de la Empresa" class="logo">

        <h1>Sobre Nosotros</h1>

        <div class="descripcion">
            <p>Somos una empresa dedicada a la venta de computadoras y laptops de las mejores marcas, ofreciendo productos de alta calidad y un excelente servicio al cliente.</p>
            <p>Contamos con un catálogo amplio de equipos, desde computadoras de escritorio hasta laptops portátiles, todos con especificaciones adaptadas a las necesidades tanto de usuarios domésticos como profesionales.</p>
            <p>Nos comprometemos a brindarte soluciones tecnológicas a precios competitivos, con garantía y soporte postventa para asegurar que tengas la mejor experiencia con nuestros productos.</p>
            <p>En nuestra tienda online, podrás encontrar productos de marcas reconocidas y los últimos modelos de computadoras y laptops disponibles en el mercado.</p>
        </div>

        <!-- Sección de contacto -->
        <div class="contacto">
            <h3>Contáctanos</h3>
            <div class="info">
                <i class="fas fa-phone-alt"></i>
                <p>Teléfono: +51 958 120 855</p>
            </div>
            <div class="info">
                <i class="fas fa-map-marker-alt"></i>
                <p>Ubicación: Av. Principal 123, Puno, Perú</p>
            </div>
            <div class="info">
                <i class="fas fa-envelope"></i>
                <p>Correo: compuspace@empresa.com</p>
            </div>
        </div>

        <!-- Botón para regresar al índice -->
        <a href="index.php" class="regresar-btn">Regresar al Inicio</a>
    </div>

</body>
</html>
