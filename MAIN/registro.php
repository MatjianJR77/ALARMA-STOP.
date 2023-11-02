<?php
require 'database.php';

//agregar la informacion BD
if(!empty($_POST['email']) && !empty($_POST['password']))
{
    $sql = "INSERT INTO usuario (email, password)
    VALUE (:email, :password);";
    $stmt = $conexio->prepare($sql);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindparam(':password', $password);

}

//validar si la informacion se aseguro correctamente

if($stmt) ; 