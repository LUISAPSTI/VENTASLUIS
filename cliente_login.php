<?php
session_start();
require 'includes/db.php'; // Archivo con la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar si el usuario es cliente
    $query = "SELECT * FROM usuarios WHERE email = :email AND rol = 'cliente'";
    $stmt = $conn->prepare($query);

    // Bind de parámetros usando PDO
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    // Ejecutar la consulta
    $stmt->execute();

    // Verificar si el usuario existe
    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Comparar la contraseña directamente sin encriptación
        if ($password == $user['password']) {
            $_SESSION['cliente'] = $user['nombre']; 
            header("Location: cliente_dashboard.php"); // Redirige al panel del cliente
            exit();
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "Usuario no encontrado o no tiene permisos de cliente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: url('https://i.pinimg.com/originals/94/24/c4/9424c4c89a3a37536d05df7cf7d48e25.gif') no-repeat center center fixed;
            background-size: cover;
        }

        /* Contenedor del formulario */
        .login-container {
            width: 100%;
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semitransparente */
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #457b9d;
            font-size: 2em;
            margin-bottom: 20px;
        }

        label {
            font-size: 1.1em;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #457b9d;
            color: white;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #1d3557;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login Cliente</h1>
        <form method="POST" action="">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Iniciar Sesión</button>
        </form>

        <?php if (isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
    </div>

</body>
</html>
