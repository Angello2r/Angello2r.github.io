<?php

session_start();
error_reporting(0);

$usuario=$_POST["usuario"];
$correo=$_POST["correo"];

$_SESSION['usuario']=$usuario;

require('conexion_bd.php')

$consulta = "SELECT * FROM alumnos WHERE name_alum = '$usuario' AND correo_alum = '$correo' ";
$resultado = mysqli_query($conexion, $consulta);

?>