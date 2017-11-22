<?php


	include("top.php");
	
	$bus = $_REQUEST['bus'];
	$registros= mysqli_query($conexion,"SELECT * FROM viajes WHERE destino like '%$bus%' or id_viaje like '%$bus%' or nombreviaje like '%$bus%';");
	while($reg = mysqli_fetch_array($registros)){
			$id_viaje= $reg["id_viaje"];
			$conectorbus= $reg["id_colectivo"];
			$viajenombre= $reg["nombreviaje"];
			$viajesalida= $reg["salida"];
		   ?>
		<div class="contenido-busqueda">
		   <div class="busqueda">
		  
				<h2><?php echo $reg['nombreviaje'];?></h2>
			
				<?php $conector= $reg["id_colectivo"]; ?>
				<div class="busqueda-img">
					<img src="<?php echo "img/".$reg['php'].".jpg";?>" alt="">
				</div>
				<div class="busqueda-info">
					<?php echo "salida: ".$reg["salida"]."<br>"."Precio: $".$reg["precio"]."<br>"; 
					
					$registro3= mysqli_query($conexion,"select * from `colectivo` where `id_colectivo`='$conector'; ");
					
					if($reg3 = mysqli_fetch_array($registro3)){
						echo "comodidad: ".$reg3["corroceria"]."<br>";
					}
				?>
				</div>
				
				<div class="busqueda-link">
					
				<button type="button" onclick="window.location.href = '<?php echo $reg['php'].".php";?>'" target="_blank">Ver Mas</button>
					
				</div>
			
				
		   </div>
	
		  
		</div>
		 <?php } ?>