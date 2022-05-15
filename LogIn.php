<?php
    sesion_name();
    session_id();
    session_start();

    if(isset($_SESSION["nombre"])){
        header("location: ./dynamics/sesion.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas</title>
    <link rel="stylesheet" href="./statics/styles/LogIn.css">
</head>
<body>
    <img src="./statics/images/Hogwarts.jpg" alt="Hogwarts">
    <form action="./dynamics/php/sesion.php" method="post" target="_self">

        <legend><h1>Inicio de sesión</h1></legend>
        <label for="Nusuario">
            Ingrese su Usuario:
            <br>
            <input type="text" name="usuario" id="Nusuario">
        </label>
        <br>
        <br>
        <button type="submit">Enviar</button>
        <button type="reset">Borrar</button>
        <br>
        <br>
             <p>¿Aún no te registras?<a href="http://localhost/php/Casas/Registro.html"><u>click aquí</u></a></p>
    </form>
    
    
</body>
</html>