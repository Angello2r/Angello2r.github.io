<?php
if (!empty($_POST["boton"])) {
if (empty($_POST["usuario"]) and empty($_POST["correo"])) {
echo '<div class="alert-danger"> <center>LOS CAMPOS ESTAN VACIOS<center></div>';
} else {
$usuario=$_POST["usuario"];
$correo=$_POST["correo"];
$sql=$conexion->query("select * from alumnos where name_alum='$usuario' and correo_alum='$correo' "); 
if ($datos=$sql->fetch_object()) {
header("Location:./PAGINAWEB/index.html");
       } else {
        echo '<div class="alert alert-danger"><center>ACCESO DENEGADO</div>';
       }

    }

}


?>

