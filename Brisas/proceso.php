<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PROCESO</title>
</head>
<body>
	
<?php 
if (isset($_POST['nombre'])&& isset($_POST['apellido'])) {
		// vadilar string y email para mas seguridad
		$nombre= filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
		$apellido=filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
		$email=filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
		$contra=filter_var(md5($_POST['contra']), FILTER_SANITIZE_STRING);
		$localida=filter_var($_POST['localida'], FILTER_SANITIZE_STRING);
		$telefono=filter_var($_POST['telefono'],FILTER_SANITIZE_STRING);
	}
$realizar=$_GET['ac'];
$conexion=mysqli_connect("localhost","root","","c9");
session_start();


switch ($realizar) {
	case 1:
		$consulta= "INSERT INTO `personas`(`id_p`, `nombre`, `apellido`, `email`, `contra`, `telefono` ,`localida`) VALUES (NULL,'$nombre','$apellido','$email','$contra','$telefono','$localida')";
		mysqli_query($conexion,$consulta);
		break;
	case 2:
		$id= $_POST['id']; 
		$consulta= "UPDATE `personas` SET `nombre`='$nombre' , `apellido`='$apellido', `email`='$email', `contra`='$contra', `telefono`='$telefono', `localida`='$localida' where id_p=$id";
		
		mysqli_query($conexion,$consulta);
		break;
	default:
		$id= $_GET['id']; 
		$consulta= "DELETE FROM personas where id_p = $id";
		mysqli_query($conexion,$consulta);
		break;
}
header('Location: index.php');
?>
 
</body>
</html>