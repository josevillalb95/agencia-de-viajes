<?php include('top.php'); ?>
		<div class="contenido">
	
			<div class="video cold" 	style="background-image: url(img/cold/logo-banda.png);">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/hMyKyOJdcjI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
			<p class="tit_descubre">COLDPLAY 2 ENERO 2018 </p>
			<div class="descubre-recital">
				<div class="img-recital">
					<img src="img/cold/Coldplay-2017.jpg" alt="">
				</div>
				<div class="info-recital">
					<p>Coldplay se presenta el 2,3 de enero 2018, formara parte del final de una gira que comenzó en La Plata Estadio Unico y aquí mismo finalizara con el nombre “CIERRE DE GIRA MUNDIAL DONDE TODO COMENZÓ”. La gira presenta su último material discográfico, lanzado en 2017 y llamado “A head full of dreams” y ademas el 14 de julio lanzará Kaleidoscope EP, compuesto por cinco nuevas canciones, incluyendo una versión en vivo del hit en colaboración con The Chainsmokers, Something Just Like This. Otro disco más aclamado por la crítica de una banda que en sus 20 años de carrera (arrancó en 1996) vendió más de 60 millones de copias a nivel mundial.</p>
					<div>
						<P>*INCLUYE TRASLADO, SERVICIO A BORDO, ENTRADA AL ESPECTÁCULO.</p>
						<p> *SALIDAS DESDE BUENOS AIRES</p>
					</div>
				</div>
				<div class="paquete-recital">
					<p>VALOR: $6100.</p> 
					<button id="botoncompra" type"submit" value="enviar">Comprar</button>
				<?php 
				include("modalcompra.php");
				?>
					
				</div>


			</div>

			<div class="modal" id="modalfecha" title="FECHA DE VIAJE">
			
			<form action="comprapag.php" method="post">
				<select name="formfecha"> 
					  <option value="1">02/01/18   15hs</option>
					  <option value="2">03/01/18   15hs</option>
				</select>
				<input type="hidden" name="variable" value="coldplay" />
				<button type"submit" value="enviar" >Comprar</button>
			</form>


		</div>

	<?php include('pie.php'); ?>