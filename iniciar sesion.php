<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios de contacto</title>
    <link rel="stylesheet" href="estili.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/fontello.css">

</head>
<body>
    <div class="logo">
        <a href="index.html">
            <img src="IMG/13.png" alt="logo" width="100px">
        </a>
    </div>
    <form method="post">
    	<h1>¡Inicia sesión!</h1>
        <hr>
        
        <?php
        include("regisusuario.php")
        ?>
    	<div class="col form-floating mb-1 p-1">
            <input type="text" class="form-control " name="usuario" id="floatingInput" placeholder="username" require>
            <label for="floatingInput">Nombre de usuario</label>
       </div>
       <div class="form-floating mb-1 p-1">
            <input type="password"  class="form-control" name="contraseña" id="floatingPassword" placeholder="Password" require>
            <label for="floatingPassword">Contraseña</label>
       </div>
	
    	<input type="submit" name="iniciar">
        <P class="pt-1">¿No te registraste?</P>
        <p><a href="registro.php"> registrarse</a></p>
    </form>      
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>