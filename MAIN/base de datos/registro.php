<?php
$host = "nombre_del_servidor";
$correo = "contraseña";
$telefono = "contraseña";
$usuario = "nombre_de_usuario";
$contraseña = "contraseña";
$base_de_datos = "nombre_de_la_base_de_datos";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$base_de_datos", $usuario, $contraseña, $telefono, $correo);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";

    // Realizar operaciones en la base de datos...

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Cerrar la conexión cuando hayas terminado
$conexion = null;
?>
