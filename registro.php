<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios de contacto</title>
    <link rel="stylesheet" href="estili.css">
    <link rel="stylesheet" href="CSS/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/fontello.css">
    

</head>

<body>    
    <div class="logo">
       <a href="index.html" >
          <img src="IMG/13.png" alt="logo" width="100px">
       </a>
    </div>
    
    <form method="post">
    	<h1>¡Registrate!</h1>
        <hr>
        <?php
           include("registr.php")
    
        ?>
        <div class="col form-floating mb-1 p-1">
            <input type="text" class="form-control " name="nombre" id="floatingInput" placeholder="username" require>
            <label for="floatingInput">Nombre</label>
       </div>
       <div class="col form-floating mb-1 p-1">
            <input type="text" class="form-control " name="apellido" id="floatingInput" placeholder="username" require>
            <label for="floatingInput">Apelldo</label>
       </div>
       <div class="col form-floating mb-1 p-1">
            <input type="email" class="form-control " name="gmail" id="floatingInput" placeholder="name@example.com" require>
            <label for="floatingInput">Correo electronico</label>
       </div>
       <div class="col form-floating mb-1 p-1">
            <input type="text" class="form-control " name="usuario" id="floatingInput" placeholder="username" require>
            <label for="floatingInput">Nombre de usuario</label>
       </div>
       <div class="form-floating mb-1 p-1">
            <input type="password"  class="form-control" name="contraseña" id="floatingPassword" placeholder="Password" require>
            <label for="floatingPassword">Contraseña</label>
       </div>
       
    	<input class="pb-2 mb-1" type="submit" name="register">
        <P  class="pt-1">¿ya tiene cuenta?</P>
        <p><a href="iniciar sesion.php"> Inicia sesión</a></p>
    </form>
       
            
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>