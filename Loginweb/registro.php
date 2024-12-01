<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="dise.css">
</head>
<body>

<div class="formulario">
<h1>Registrarse</h1>
<?php
include("conexion2bd.php");
include("controlador_registro.php");
?>

<form method="post">
    

<input placeholder="Nombre" class="pepe" name="usuario" type="text" />

<br><br><br>

<input placeholder="Apellido Paterno" class="pepe" name="ap_alum" type="text" />

<br><br><br>

<input placeholder="Apellido Materno" class="pepe" name="am_alum" type="text" />

<br><br><br>

<input placeholder="Fecha de Nacimiento" class="pepe" name="fn_alum" type="date" />

<br><br>

<input placeholder="Correo" class="pepe" name="correo_alum" type="email" />

<br>

<input placeholder="Numero de Control" class="pepe" name="nocon_alum" type="text" />

<br><br><br>

<input type="submit" value="Registrarse" name="boton">
<br>
<a href="login.php">Inicio de Sesion</a>

</form>
</div>
    
</body>
</html>