<?php
$id= $_REQUEST['id_usuario'];
$conexion=mysqli_connect("localhost","root","","c9");
$registro=mysqli_query($conexion,"select nombre,email from personas WHERE id_p=$id;");
$reg= mysqli_fetch_array($registro);
if ($reg) {
	echo $reg["nombre"]." ".$reg["email"];
}



?>