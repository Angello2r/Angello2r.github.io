
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="dise.css">
</head>


<body>

<div class="formulario">

<h1>Inicio de Sesion</h1>

<?php
    include("conexion_bd.php");
    include("controlador.php");
    ?>
<br>

<form method="post">

<input placeholder="Nombre de Usuario" class="pepe" name="usuario" type="text" />

<br><br>

<input placeholder="Correo" class="pepe" name="correo" type="email" />

<br>

<div class="input">

<input type="submit" value="Iniciar" name="boton">
</div>

<br><br><br><br>

<label>Aun no Eres Usuario?, </label><a href="registro.php">Registrate Aqui!</a>

</form>

</div>
    
</body>
</html>