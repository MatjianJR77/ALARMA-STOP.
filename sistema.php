<?php
  // Recibe los datos del formulario
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['mensaje'];
  
  // Configura los datos del correo electrónico
  $destinatario = 'tu@email.com'; //Aquí debes sustituir tu@email.com por tu email
  $asunto = 'Nuevo mensaje de formulario de contacto';
  $cuerpo = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nMensaje: $mensaje";
  $headers = "From: $email\r\nReply-To: $email\r\n";
  // Envía el correo
  electrónico
  mail($destinatario, $asunto, $cuerpo, $headers);
  // Redirige al usuario a una página de confirmación
  header('Location: confirmacion.html'); // confirmacion.html debe existir
?>

<?php

include("conexion.php");

if (isset($_POST['alarma stop']))
   if(
      strlen($_POST['nombre']) >= 1 &&
      strlen($_POST['apellido']) >= 1 &&
      strlen($_POST['gmail']) >= 1 &&
      strlen($_POST['nombre de usuario']) >= 1 &&
      strlen($_POST['contraseña']) >= 1 &&
      strlen($_POST['confirmar contraseña']) >= 1 
   ){

      $nombre = trim($_POST['nombre']) ;
      $apellido = trim($_POST['apellido']);
      $gmail = trim($_POST['gmail']);
      $nombre_de_usuario = trim($_POST['nombre de usuario']);
      $contraseña = trim($_POST['contraseña']);
      $confirmar_contraseña = trim($_POST['confirmar contraseña']);
      $fecha = date("d/m/y");

      $consulta = "INSERT INTO `registro`(`id`, `nombre`, `apellido`, `gmail`, `nombre de usuario`, `contraseña`, `confirmar contraseña`, `fecha de registro`)
       VALUES ('$nombre', '$apellido', '$gmail', '$nombre_de_usuario', '$contraseña', '$confirmar_contraseña', '$fecha')";

      $resultado = mysqli_connect($conexion, $consulta) ;
      if($resultado){
         ?>
         <h3 class="correcto">!Sea a completado tu registro¡</h3>
         <?php
      } else {
         ?>
         <h3 class="error">!Ups ocurrio un ERROR¡</h3>
         <?php
      }
   }else{
      ?>
         <h3 class="error">!Llena todos los campos¡</h3>
      <?php
   }


?>






action="registro.php"