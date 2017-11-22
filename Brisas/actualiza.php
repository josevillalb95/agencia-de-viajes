<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>actualiza</title>
</head>
<body>
<?php 

session_start();
$id=$_SESSION['id'];
$conexion= mysqli_connect("localhost","root","","c9");
$registro=mysqli_query($conexion,"select * from `personas` where `id_p` = '$id' ");
$reg= mysqli_fetch_array($registro);

 ?>

	<form class="formactualiza" method="POST" action="proceso.php?ac=2">
		<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>"> <!-- mantener el valor constante -->
		<input type="text" name="nombre" value="<?php echo $reg['nombre'];?>" >
		<input type="text" name="apellido" value="<?php echo $reg['apellido']; ?>" >
		<input type="email" name="email" value="<?php echo $reg['email'] ?>" >
		<input type="password" name="contra" value="<?php echo $reg['contra'] ?> ">
		<input type="tel"  name="telefono" value="<?php echo $reg['telefono'] ?> ">
		<input type="text" name="localida" value="<?php echo $reg['localida'] ?> ">
		<input type="submit" name="enviar" value="actualizar">
	</form>
</body>
</html>