<?php include('top.php'); ?>
		<div class="contenido">
	
			<div class="video greenday" style="
    			background-image: url(img/greenday/logo-banda.png);">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/HwpF_9a_2_M?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
			<p class="tit_descubre">GREEN DAY 29 y 30 DE NOVIEMBRE </p>
			<div class="descubre-recital">
				<div class="img-recital">
					<img src="img/greenday/green-2017.jpg" alt="">
				</div>
				<div class="info-recital">
					<p>Green Day en Argentina con su gira Revolution Radio presentando su nuevo disco que lleva el mismo nombre, el 29,30 de noviembre en el estadio de Vélez Sarsfield y estarán acompañados con The Interrupters. Revolution Radio fue lanzado el 7 de octubre, debutó en el puesto número 1 en el Top Chart 200 de Billboard. El álbum cuenta con su décima canción N°1 “Bang Bang” y el himno sentido “Still Breathing” en el Top 10. Green Day nacida hace más de 30 años en California. En este tiempo lanzaron 12 discos de estudio, de los cuales vendieron más de 85 millones de copias a nivel mundial. Lanzaron varios hits internacionales y fueron nombrados por la Rolling Stone como “La mejor banda punk de la historia”.</p>
					<div>
						<P>*INCLUYE TRASLADO, SERVICIO A BORDO, ENTRADA AL ESPECTÁCULO.</p>
						<p> *SALIDAS DESDE MAR DEL PLATA</p>
					</div>
				</div>
				<div class="paquete-recital">
					<p>VALOR: $7200.</p> 
					<button id="botoncompra" type"submit" value="enviar" > Comprar</button>
				
					<?php 
				include("modalcompra.php");
				?>
				
					
				</div>


			</div>

		</div>
	<div class="modal" id="modalfecha" title="FECHA DE VIAJE">
			
			<form action="comprapag.php" method="post">
			<select name="formfecha"> 
					  <option value="1">29/11/17 15hs</option>
					  <option value="2">30/11/17 15hs</option>
				</select>
				<input type="hidden" name="variable" value="greenday" />
				<button type"submit" value="enviar" >Comprar</button>
			</form>
		
	</div>
	<?php include('pie.php'); ?>