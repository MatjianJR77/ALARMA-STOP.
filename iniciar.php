<?php 

include("conexion.php");

if (isset($_POST['iniciar'])) {
    if (
		strlen($_POST['usuario']) >= 1 && 
		strlen($_POST['contraseña']) >= 1 
		) {
      
		$usuario = trim($_POST['usuario']);
		$contraseña = trim($_POST['contraseña']);
	    $fecha = date("d/m/y");
	    $consulta = "INSERT INTO iniciar_sesion(usuario, contraseña, fecha)
		 VALUES ('$usuario', '$contraseña', '$fecha')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Has iniciado sesión correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>

