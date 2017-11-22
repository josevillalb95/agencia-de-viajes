<?php include('top.php'); ?>
		<div class="contenido">
			<p class="tit_descubre">Villa Carlos Páz </p>
			<div class="info-viaje">
					<div class="cajaviaje">
						<img src="img/svg/watch.svg" alt="">
						<p>8 Días 5 Noches</p>
					</div>
					<div class="cajaviaje">
						<img src="img/svg/bus.svg" alt="">
						<p>Bus semi-Cama</p>
					</div>
					<div class="cajaviaje">
						<img src="img/svg/hotel.svg" alt="">
						<p>Hotel 2*</p>
					</div>
					<div class="cajaviaje">
						<img src="img/svg/dinner.svg" alt="">
						<p>Media Pensión</p>
					</div>
			</div>
			
			<div class="descubre descubre-viaje">
				<div class="img-viaje">
					<div class="imgpaisaje"><img src="img/cordoba.jpg" alt="">
					</div>
					<div class="imgpaisaje"><img src="img/carlospaz2.jpg" alt="">
					</div>
					<div class="imgpaisaje"><img src="img/carlospaz3.jpg" alt=""></div>
					
				</div>
				<div class="info-viajedata">
					<strong><span class="icon-directions_bus"></span>Día 1 - Mar del Plata </strong>
						<P>Salida en horas de la tarde con destino a Villa Carlos Páz.</p>
					<strong><span class="icon-directions_bus"></span>Día 2 - Villa Carlos Páz</strong>
					<p>Arribo en horas de la mañana. Alojamiento en el hotel previsto. Por la tarde realizaremos la visita de la ciudad, complejo aerosillas, fábricas regionales, reloj cu-cú
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 3 - Villa Carlos Páz</strong>
 					<p>Desayuno. Mañana libre. Por la tarde realizaremos la excursión opcional a Capilla del Monte (La Falda, Cosquín, Los Cocos, Dique el Cajón).
 					</p>
 					<strong><span class="icon-directions_bus"></span>
 						Día 4 - Villa Carlos Páz</strong>
 					<p>
 						Desayuno. Día libre. Es momento ideal para conocer opcionalmente un camino maravilloso que atraviesa el cordón de las Altas Cumbres Cordobesas y nos reúne en un asentamiento pintoresco en el corazón del valle de traslasierras;
						Mina Clavero, donde se disfrutará de un asado a las brasas y de tiempo libre frente al río. Cena incluida
 					</p>
 					<strong><span class="icon-directions_bus"></span>
 						Día 5 - Villa Carlos Páz</strong>
 					<p>
 						Desayuno. Mañana libre para caminar y disfrutar del hermoso paisaje. Por la tarde excursión opcional a Villa General Belgrano
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 6 - Villa Carlos Páz</strong>
 					<p>
 						Desayuno. Día libre para caminar y realizar actividades personales. Sugerimos realizar un paseo embarcado por el Lago San Roque. Cena incluida
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 7 - Villa Carlos Páz</strong>
 					<p>
 						Salida de regreso hacia nuestros hogares. En el camino realizaremos una detención para conocer la Ciudad de Córdoba Capital (peatonales, iglesia capuchinos, rosedal, etc). Tiempo libre. Almuerzo opcional
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 8 - Mar del Plata</strong>
 					<p>
						Arribo y fin de nuestros servicios
 					</p>
					
				</div>
				<div class="paquete-viaje">
					<p>VALOR: $4.099</p> 
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
					  <option value="1">2018-02-01 -cama</option>
				</select>
				<input type="hidden" name="variable" value="cordoba" />
				<button type"submit" value="enviar" >Comprar</button>
			</form>
		
	</div>
	<?php include('pie.php'); ?>