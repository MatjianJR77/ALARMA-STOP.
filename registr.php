<?php 

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && 
	    strlen($_POST['apellido']) >= 1 && 
	    strlen($_POST['gmail']) >= 1 &&
		strlen($_POST['usuario']) >= 1 && 
		strlen($_POST['contraseña']) >= 1 
		) {
        
	    $name = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
	    $gmail = trim($_POST['gmail']);
		$usuario = trim($_POST['usuario']);
		$contraseña = trim($_POST['contraseña']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO registro( nombre, apellido, gmail, usuario, contraseña, fecha_registro)
		 VALUES ('$name', '$apellido','$gmail', '$usuario', '$contraseña', '$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	header("location: usalarma.php");
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