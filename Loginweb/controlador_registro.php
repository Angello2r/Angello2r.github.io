
<?php
if (!empty($_POST["boton"])) {
if (empty($_POST["usuario"]) or empty($_POST["ap_alum"]) or empty($_POST["am_alum"]) or empty($_POST["fn_alum"]) or empty($_POST["correo_alum"]) or empty($_POST["nocon_alum"]) ) {
echo '<div class="alerta"><center>Uno de los campos está vacío</div>';
} else {
$nombre=$_POST["usuario"];
$apellidop=$_POST["ap_alum"];
$apellidom=$_POST["am_alum"];
$fecha=$_POST["fn_alum"];
$correo=$_POST["correo_alum"];
$control=$_POST["nocon_alum"];

$sql=$conexion->query( "insert into alumnos (name_alum, ap_alum, am_alum, fn_alum, correo_alum, NoCon_alum) values('$nombre', '$apellidop', '$apellidom', '$fecha', '$correo', '$control') ");
 if ($sql==1) {
echo '<div class="success">Usuario registrado correctamente</div>';
} else {
echo '<div class="alerta">error al registrar</div>';
}

}

}
?>