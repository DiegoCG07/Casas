<?php
    session_name();
    session_id();
    session_start();

    $usuario=(isset($_POST['usuario']) && $_POST['usuario'] !== "")? $_POST['usuario']:false;
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
    
    <?php
        if ($usuario !== false){
            $_SESSION["usuario"]= $usuario
            echo "¡Bienvenido ".$_SESSION["nombre"]."!";
        }elseif($_SESSION["usuario"]){
            echo "¡Bienvenido ".$_SESSION["nombre"]."!";

        }
    ?>
    <form action="./dynamics/php/cerrarsesion.php" method="post" target="_self">
    <legend><h1>Subir Archivo</h1></legend>
    <label for="">
        Ingrese su Usuario:
        <br>
        <input type="text" name="Cerrarsesion" id="Cerrarsesion">
    </label>
        <button type="submit">Cerrar Sesion</button>
        
    </form>
    
    
</body>
</html>
    