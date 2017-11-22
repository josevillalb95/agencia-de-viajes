
<?php
$conexion=mysqli_connect("localhost","root","","c9");
session_start();
$bus=$_REQUEST['conectbus'];
$pasajero=$_REQUEST['id_usuario'];
$numasiento=$_REQUEST['id_asiento'];
$asiento= "asiento".$_REQUEST['id_asiento'];
$f_viaje=$_REQUEST['f_viaje'];
$f_pago=$_REQUEST['f_pago'];
$id_viaje=$_REQUEST['idviaje'];
$consulta= "INSERT INTO `reservas`(`id_p`,`numero-asiento`,`mediopago`,`fecha-hora`,`estado-pago`,`id_viaje`) VALUES ('$pasajero','$numasiento','$f_pago','$f_viaje','ok','$id_viaje');";
$consulta2="UPDATE `colectivo` SET `$asiento`= '0' WHERE `id_colectivo` = '$bus' and `$asiento`='1';";
mysqli_query($conexion,$consulta);
mysqli_query($conexion,$consulta2);
?>


