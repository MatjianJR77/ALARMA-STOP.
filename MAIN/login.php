<?php
require 'database.php';
session_start();


if(isset($_SESION['user_id'])){
    header('location: /registroELBAGRE');



}

//validar que sie ste registrado
if(!empty($_POST['email']) && !empty($_POST['password']))


?>








<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienbenidos a la app el Bagre</title>
    <link rel="stylesheet" href="assets/estilos.css">
</head>
<body>
    <?php require 'partials/header.php'?>
   
    <h1>iniciar session</h1>
    <form action="login.php" method="post">
        <input type="text" class="input" name="email" placeholder="ingrese su correo">
        <input type="password" class="input"
        name="password" placeholder="ingrese su contraseña">
        <input type="submit" class="boton" value="enviar">
    </form>


</body>
</html>