<?php
// Datos de conexión a la base de datos
$host = 'localhost'; // o tu host
$dbname = 'sistema_ventas'; // Nombre de tu base de datos
$username = 'root'; // Usuario de la base de datos
$password = ''; // Contraseña de la base de datos

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establece el modo de error de PDO a excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
