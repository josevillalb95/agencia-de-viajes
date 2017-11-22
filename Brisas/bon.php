<?php 
$bon = true;
include('top.php'); ?>
		<div class="contenido">
	
			<div class="video bon" 
			style="
    			background-image: url(img/bonjovi/logo-banda.png);">
				<iframe width="560" height="315"  src="https://www.youtube.com/embed/7u6rVHI4nI0?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<p class="tit_descubre">BON JOVI 20 DICIEMBRE </p>
			<div class="descubre-recital">
				<div class="img-recital ">
					<img src="img/bonjovi/Bon2017.jpg" alt="">
				</div>
				<div class="info-recital">
					<p>En el marco de su This House Is Not For Sale Tour, Bon Jovi llega a la Argentina. La banda, con más de 34 años de carrera y 19 discos, se presenta en el Estadio Vélez Sarsfield el 20,21,22 de diciembre. Su último trabajo debutó en la cima de los charts mundiales, dándole a la banda de rock su sexto hit número 1 en Estados Unidos. This House is Not for Sale es el mayor lanzamiento de Bon Jovi desde What About Now (2013). Bon Jovi a través de una carrera ilustre que abarca más de tres décadas desde su formación en 1983, ha ganado su lugar entre la realeza del rock global.</p>
					<div>
						<P>*INCLUYE TRASLADO, SERVICIO A BORDO, ENTRADA AL ESPECTÁCULO.</p>
						<p> *SALIDAS DESDE BUENOS AIRES</p>
					</div>
				</div>
				<div class="paquete-recital">
					<p>VALOR: $3950.</p> 
					<button id="botoncompra" type"submit" value="enviar" >Comprar</button>
					<?php 
				include("modalcompra.php");
				?>
				
				</div>

			</div>

		</div>

	
 
	<div class="modal" id="modalfecha" title="SELECCIONA FECHA DE VIAJE">
			
			<form action="comprapag.php" method="post">
				<select name="formfecha"> 
					  <option value="1">20/12/17 15hs</option>
					  <option value="2">21/12/17 15hs</option>
					  <option value="3">22/12/17 15hs</option>
				</select>
				<input type="hidden" name="variable" value="bonjovi" />
				<button type"submit" value="enviar" >Comprar</button>
			</form>
		
	</div>
	
	<?php include("pie.php"); ?>