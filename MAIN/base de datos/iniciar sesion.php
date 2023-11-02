<?php
// Información de conexión a la base de datos
$host = "Alarma stop";
$usuario = "nombre";
$contraseña = "";
$base_de_datos = "";

// Crear una conexión
$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Verificar si la conexión tuvo éxito
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "Conexión exitosa a la base de datos.";

// Realizar operaciones en la base de datos...

// Cerrar la conexión cuando hayas terminado
$conexion->close();
?>