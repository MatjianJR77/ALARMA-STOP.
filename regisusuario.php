<?php 

require("conexion.php");

if (isset($_POST['iniciar'])) {
   
		$usuario = ($_POST['usuario']);
		$contraseña = ($_POST['contraseña']);
	    
	    $sql = "SELECT * FROM registro WHERE usuario = '$usuario' and contraseña = '$contraseña'";
        $resultado = mysqli_query($conex,$sql);
        $numero_registros = mysqli_num_rows($resultado);
	    if($numero_registros != 0) {
		// Inicio de sesión exitoso
		header("location: usalarma.php")
		
		;
	   } else {
		// Credenciales inválidas
		echo "Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña.";
		
	
      }

	
}  

?>
