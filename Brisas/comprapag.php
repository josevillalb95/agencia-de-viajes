<?php
	include("top.php");
	
	
	$nombreviaje=$_REQUEST['variable']; 
	
	$idfecha=$_POST['formfecha'];		
	$idviaje=$nombreviaje.$idfecha;
	$user=$_SESSION['id'];
	$registro= mysqli_query($conexion,"SELECT * FROM viajes
	WHERE id_viaje='$idviaje'	");
	while($reg = mysqli_fetch_array($registro)){
			$id_viaje= $reg["id_viaje"];
			$conectorbus= $reg["id_colectivo"];
			$viajenombre= $reg["nombreviaje"];
			$precio=$reg["precio"];
			$salida=$reg["salida"];
			$llegada=$reg["llegada"];
			
	}
	$registro1= mysqli_query($conexion,"SELECT * FROM personas
	WHERE id_p='$user' ");
	while($reg1 = mysqli_fetch_array($registro1)){
		$usuario=$reg1["nombre"]." ".$reg1["apellido"];

	}
	$registro2= mysqli_query($conexion,"SELECT * FROM colectivo
	WHERE id_colectivo='$conectorbus'");
?>

<?php	
while($reg2= mysqli_fetch_array($registro2)){ ?>
		<div class="contenido">
			<p class="tit_descubre"> <?php echo $viajenombre; ?> </p>
			<div class="info-viaje">
					<div class="cajaviaje">
						<img src="img/svg/seat.svg" alt="">
						<p>	
							<?php echo $reg2["corroceria"]; ?>
						</p>
					</div>
					<div class="cajaviaje">
						<img src="img/svg/bus.svg" alt="">
						<p> <?php echo $salida ?> </p>
					</div>
					<div class="cajaviaje">
						<img src="img/svg/hotel.svg" alt="">
						<p>Hotel 3*</p>
					</div>
					<div class="cajaviaje">
						<img src="img/svg/dinner.svg" alt="">
						<p>Media Pensión</p>
					</div>
			</div>
			<div class="info-viaje">
					
					<div class="cajaviaje">
						<img src="img/svg/bus.svg" alt="">
						<p> <?php echo $llegada ?> </p>
					</div>
					<div class="cajaviaje">
						<img src="img/svg/avatar.svg" alt="">
						<p> <?php echo $usuario ?> </p>
					</div>
					<div class="cajaviaje">
						<img src="img/svg/precio.svg" alt="">
						<p> <?php echo $precio."$"; ?> </p>
					</div>
			</div>
	</div>
	<div class="contenido contenido-asiento">
			<div class="fila1">
	                <span>Fila nº 1</span>
					<?php
					for ($a=1;$a<13;$a++){
					?>
					<button id="<?=$a;?>" data-estado="<?php echo $reg2["asiento".$a]; ?>" class="<?php if ($reg2["asiento".$a]==0) echo "comprado"; ?>" ><img src="img/aciento.png" alt=""></button>
					<?php } ?>
			</div>
			<div class="filamedio">
				<div><img src="img/svg/tv.svg"></img></div>
				<div><img src="img/svg/tv.svg"></img></div>
				<div><img src="img/svg/tv.svg"></img></div>
			</div>
			<div class="fila2">
	                <span>Fila nº 2</span>
					<?php
					for ($a=13;$a<25;$a++){
					?>
					<button id="<?=$a;?>" data-estado="<?php echo $reg2["asiento".$a]; ?>" class="<?php if ($reg2["asiento".$a]==0) echo "comprado"; ?>" ><img src="img/aciento.png" alt=""></button>
					<?php } ?>
			</div>
	</div>  <?php
}
?>	

	<script>
		$("button").on("click", function(){ 
			if($(this).attr('data-estado') == 1){
				$('#modalinfo p').html('.En el asiento: '+$(this).attr('id'));
				$("#modalinfo").dialog();
						var id_asiento = $(this).attr('id');
						var conectbus='<?php echo $conectorbus; ?>';
						$("input#ok").off("click").on("click",function(){
							
							var pago = $("#formpago").val();
							var fechaviaje = '<?php echo $salida; ?>';
							var viaje= '<?php echo $id_viaje; ?>';
							
							$(".contenido-asiento button#" + id_asiento).addClass('comprado');
							
					
							event.preventDefault();
							$.ajax({
								url:"asientoajax.php",
								data: { id_asiento:id_asiento,id_usuario:'<?php echo $_SESSION['id'];?>',f_pago:pago,f_viaje:fechaviaje,idviaje:viaje,conectbus:conectbus}
								 
							})
							.done(function() {
								alert("Compra Exitosa");
							})
							.fail(function() {
								console.log("error");
							})
							.always(function() {
								console.log("complete");
							});
						});
				
			}
			else{
				alert("asiento ocupado");
			}
		});
	</script>
	
	<div class="modal" id="modalinfo" title="informacion de compra">
			<?php
			echo("Usted va a viajar a: ".$viajenombre);
			echo("<br>");
			echo(", el dia:".$salida);
			?><p></p>
			<label for="formpago">Forma de Pago
		
			
			<select id="formpago" name="formpago">
				  <option value="visa">Visa</option>
				  <option value="master_card">MasterCard</option>
				  <option value="frances">BBVA Frances</option>
				  <option value="icbc">ICBC</option>
			</select>
			</label><br>
			<label for="cuotas">Cuotas:
		
				
				<select id="coutas" name="cuotas">
					  <option >3 cuotas</option>
					  <option >6 cuotas</option>
					  <option >8 cuotas</option>
					  <option >12 cuotas</option>
				</select>
			</label><br>
		<label for="numtarje">Nº tarjeta:
			<input type="text" id="numtarje" name="tarjeta" placeholder="1234-1234-1234-4213"/>
		</label>
		
			<input type="submit" id="ok"  value="confirmar viaje!"/>

		</div>

<?php
include("pie.php");
?>