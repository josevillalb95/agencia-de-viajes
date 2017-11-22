<?php include('top.php'); ?>
		<div class="contenido">
			<p class="tit_descubre">Parque Nacional Los Glaciares </p>
			<div class="info-viaje">
					<div class="cajaviaje">
						<img src="img/svg/watch.svg" alt="">
						<p>6 Días 5 Noches</p>
					</div>
					<div class="cajaviaje">
						<img src="img/svg/bus.svg" alt="">
						<p>Bus Cama</p>
					</div>
					<div class="cajaviaje">
						<img src="img/svg/hotel.svg" alt="">
						<p>Hotel 4*</p>
					</div>
					<div class="cajaviaje">
						<img src="img/svg/dinner.svg" alt="">
						<p>Media Pensión</p>
					</div>
			</div>
			
			<div class="descubre descubre-viaje">
				<div class="img-viaje">
					<div class="imgpaisaje"><img src="img/santacruz.jpg" alt=""></div>
					<div class="imgpaisaje"><img src="img/santa2.jpg" alt=""></div>
					<div class="imgpaisaje"><img src="img/santa3.jpg" alt=""></div>
					
				</div>
				<div class="info-viajedata">
					<strong><span class="icon-directions_bus"></span>Día 1 - Mar del Plata </strong>
						<P>Salida en horas de la tarde con destino a Calafate.</p>
					<strong><span class="icon-directions_bus"></span>Día 2 - Santa Cruz</strong>
					<p>Arribo en horas de la mañana. Alojamiento en el hotel previsto. Por la tarde realizaremos la visita de la ciudad, Glaciares Perito Moreno, Upsala y Spegazzin y recorrido por el Lago Roca.
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 3 - Santa Cruz</strong>
 					<p>Desayuno. Mañana libre. Por la tarde realizaremos la excursión opcional a Zona del Cerro Chaltén o Fitz Roy.
 					</p>
 					<strong><span class="icon-directions_bus"></span>
 						Día 4 -Santa Cruz</strong>
 					<p>
 						Desayuno. Es el momento ideal para conocer el Glaciar Viedma y realizar un camino maravilloso que atraviesa el Chorrillo del Salto y nos reúnimos en Campo de Hielo Patagónico.
 					</p>
 					<strong><span class="icon-directions_bus"></span>
 						Día 5 - Santa Cruz</strong>
 					<p>
 						Vicitaremos el lago del Desierto -a 37 km de El Chaltén y recorreremos los bosques centenarios, glaciares y chorrillos. Se puede acampar y practicar pesca deportiva.
 					</p>

 					<strong><span class="icon-directions_bus"></span>Día 6 - Santa Cruz</strong>
 					<p>
 						Salida de regreso hacia nuestros hogares.
 					</p>
					
				</div>
				<div class="paquete-viaje">
					<p>VALOR: $5.899</p> 
						<button id="botoncompra" >Comprar</button>
				<?php 
				include("modalcompra.php");
				?>
					
				</div>


			</div>

		</div>
<div class="modal" id="modalfecha" title="UNICO OMNIBUS">
			
			<form action="comprapag.php" method="post">
				<select name="formfecha"> 
					  <option value="1">2018-03-01 -cama</option>
				</select>
				<input type="hidden" name="variable" value="santacruz" />
				<button type"submit" value="enviar" >Comprar</button>
			</form>
		
	</div>
	<?php include('pie.php'); ?>