<?php include('top.php'); ?>
		<div class="contenido">
			<p class="tit_descubre">Salta y Jujuy </p>
			<div class="info-viaje">
					<div class="cajaviaje">
						<img src="img/svg/watch.svg" alt="">
						<p>8 Días 4 Noches</p>
					</div>
					<div class="cajaviaje">
						<img src="img/svg/bus.svg" alt="">
						<p>Bus Cama</p>
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
			
			<div class="descubre descubre-viaje">
				<div class="img-viaje">
					<div class="imgpaisaje"><img src="img/salta.jpg" alt=""></div>
					<div class="imgpaisaje"><img src="img/salta2.jpg" alt=""></div>
					<div class="imgpaisaje"><img src="img/salta3.jpg" alt=""></div>
					
				</div>
				<div class="info-viajedata">
					<strong><span class="icon-directions_bus"></span>Día 1 - Mar del Plata </strong>
						<P>Salida en horas de la tarde con destino a jujuy.</p>
					<strong><span class="icon-directions_bus"></span>Día 2 - jujuy</strong>
					<p>Arribo en horas de la mañana. Alojamiento en el hotel previsto. Por la tarde realizaremos la visita de la ciudad, Quebrada de Humahuaca y Catedral de San Salvador de Jujuy
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 3 - jujuy</strong>
 					<p>Desayuno. Mañana libre. Por la tarde realizaremos la excursión opcional a Cuevas de Waira (Tilcara)
 					</p>
 					<strong><span class="icon-directions_bus"></span>
 						Día 4 - salta</strong>
 					<p>
 						Desayuno. Día libre. Es momento ideal para conocer opcionalmente un camino maravilloso que atraviesa el cordón de las Altas Cumbres Cordobesas y nos reúne en un asentamiento pintoresco en el corazón del valle de traslasierras;
						Mina Clavero, donde se disfrutará de un asado a las brasas y de tiempo libre frente al río. Cena incluida
 					</p>
 					<strong><span class="icon-directions_bus"></span>
 						Día 5 - salta</strong>
 					<p>
 						Desayuno. Mañana libre para caminar y disfrutar del hermoso paisaje. Por la tarde excursión opcional a catedral basilica
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 6 - salta</strong>
 					<p>
 						Desayuno. Día libre para caminar y realizar actividades personales. Sugerimos realizar un paseo ecerro san bernardo. Cena incluida
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 7 - salta</strong>
 					<p>
 						Salida de regreso hacia nuestros hogares. En el camino realizaremos una detención para conocer el cafayate y pasear por el tren de las nuves. Tiempo libre. Almuerzo opcional
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 8 - Mar del Plata</strong>
 					<p>
						Arribo y fin de nuestros servicios
 					</p>
					
				</div>
				<div class="paquete-viaje">
					<p>VALOR: $6.399</p> 
					<button id="botoncompra" >Comprar</button>
				<?php 
				include("modalcompra.php");
				?>	
				</div>


			</div>

		</div>
<div class="modal" id="modalfecha" title="FECHA DE VIAJE">
			
			<form action="comprapag.php" method="post">
				<select name="formfecha"> 
					  <option value="1">2018-02-02 -cama</option>
					  <option value="2">2018-03-02 -semicama</option>
				</select>
				<input type="hidden" name="variable" value="salta" />
				<button type"submit" value="enviar" >Comprar</button>
			</form>
		
	</div>
	<?php include('pie.php'); ?>