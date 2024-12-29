<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            background: linear-gradient(to bottom, #1d3557, #457b9d);
        }

        .container {
            text-align: center;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 350px;
        }

        h1 {
            color: #1d3557;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
        }

        .btn {
            background-color: #457b9d;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin: 10px;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #1d3557;
        }

        .logout-btn {
            background-color: #d9534f;
        }

        .logout-btn:hover {
            background-color: #c9302c;
        }

    </style>
</head>
<body>
    <div class="container">
        <!-- Avatar de usuario -->
        <img src="https://scontent.ftcq3-1.fna.fbcdn.net/v/t39.30808-6/463101339_2736563209845626_4658287892412898420_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeEB51Mj7fQ7tlSCyoxPASsPqE-D6ox9KKuoT4PqjH0oq7TdVTHTmF938E6kDrP24ZFufJZgp7MxNzQ2Q4i_XpA2&_nc_ohc=Ms8Jt6R3ZNUQ7kNvgGa_gL6&_nc_oc=AdiIZFDCvBn-W2VMb4WUDMJu06X1C3rl-Y42kGoSRQFtmuxTsgy3dbR3pAcJh_61c0-wIU7AIXunhS4DyFpOrGKN&_nc_zt=23&_nc_ht=scontent.ftcq3-1.fna&_nc_gid=Ap3_x9tIxGR4RfXAoqPLdR8&oh=00_AYBYGeOpe8STexgVSuClZ71Q3myHBMZd4b65N_t6DcnILQ&oe=67761E46" alt="Avatar de Administrador" class="avatar">

        <h1>Bienvenido, <?= htmlspecialchars($_SESSION['admin']) ?>!</h1>

        <!-- Botones para las páginas referidas -->
        <a href="ver_productos.php" class="btn">Ver Productos</a><br>
        <a href="gestionar_pedidos.php" class="btn">Gestionar Pedidos</a><br>
        
        <!-- Botón para cerrar sesión -->
        <a href="logout.php" class="btn logout-btn">Cerrar Sesión</a>
    </div>
</body>
</html>
