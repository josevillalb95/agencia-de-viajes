<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>muestra data base</title>
</head>
<body>
	<?php 
	$conexion=mysqli_connect("localhost","root","","c9");
	session_start();
	$USER= $_SESSION['id'];
	$vacio=1;
	$registro= mysqli_query($conexion,"select * from `reservas` where `id_p`='$USER'");
	while($reg0 = mysqli_fetch_array($registro)){			
	$conectorviaje= $reg0["id_viaje"];
		

		$registro2= mysqli_query($conexion,"select * from `viajes` where `id_viaje`='$conectorviaje' ");
		
		if($reg = mysqli_fetch_array($registro2)){
			$vacio=0;
			 echo "Nombre:"." ".$reg["nombreviaje"]."<br>";
			echo "Valor:"." $".$reg["precio"]."<br>";
			echo "Destino:"." ".$reg["destino"]."<br>";
			echo "Salida:"." ".$reg["salida"]."<br>";
			echo "Llegada:"." ".$reg["llegada"]."<br>";
		}
	
		$registro3= mysqli_query($conexion,"select * from `colectivo` where `id_colectivo`='$reg[id_colectivo];' ");
		if($reg3 = mysqli_fetch_array($registro3)){
			$vacio=0;
			echo "Colectivo:"." ".$reg3["modelo"]."<br>";
			echo "Comodidad: ".$reg3["corroceria"]."<br>";
			echo "----------------------"."<br>";
		}
	}
	if($vacio==1){
		echo "no tiene ningun viaje reservado";
	}
	?>
	 
</body>
</html>