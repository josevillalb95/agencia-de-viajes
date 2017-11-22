<?php include('top.php'); ?>
		<div class="contenido">
			<p class="tit_descubre">Bariloche</p>
			<div class="info-viaje">
					<div class="cajaviaje">
						<img src="img/svg/watch.svg" alt="">
						<p>5 Días 3 Noches</p>
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
					<div class="imgpaisaje"><img src="img/Bariloche1.jpg" alt=""></div>
					<div class="imgpaisaje"><img src="img/Bariloche2.jpg" alt=""></div>
					<div class="imgpaisaje"><img src="img/bariloche.jpg" alt=""></div>
					
				</div>
				<div class="info-viajedata">
					<strong><span class="icon-directions_bus"></span>Día 1 - Mar del Plata </strong>
						<P>Salida en horas de la tarde con destino a Bariloche.</p>
					<strong><span class="icon-directions_bus"></span>Día 2 - Bariloche</strong>
					<p>xcursión a Circuito Chico ,comienza en San Carlos de 	Bariloche, visitando  diferentes e interesantes 	puntos  de la costa del Lago Nahuel Huapi a lo largo de 60 km (37mi).
						Playa bonita se sitúa a 8km (5 millas), desde donde se puede ver  la Isla Huemul. A 10 Km. (6.2 millas) se encuentra Cerro Campanario, que cuenta con el servicio de aerosillas que alcanzan los 1,050 metros de altura (3,440 pies). Donde es posible contemplar la inmensidad de los lagos Nahuel Huapi, Perito Moreno y El trébol, la península de San Pedro y Llao Llao, Isla Victoria, Cerro Otto, Lopez Goye, Cerro Catedral y Bariloche.
						El tour continúa hacia el magnifico Hotel Llao Llao y la hermosa capilla San Eduardo, tesoro arquitectónico de la región.
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 3 - Bariloche</strong>
 					<p>Puerto Pañuelo esta también ubicado en la misma zona, de cuyo puerto parten barcos hacia la Isla Victoria y el Bosque de Arrayanes.
					Más adelante, los visitantes podrán contemplar los campos de Golf, el Puente Angostura, sobre el río que lleva su nombre, uniendo los lagos Moreno y Nahuel Huapi, y la Bahía López.
					Al pie  del Monte López, dejando la bahía atrás, aparece a la vista un mirador panorámico natural desde donde se pueden observar el Lago Moreno y la Península Llao Llao.
					Volviendo al circuito, los visitantes cruzaran el Puente del Lago Moreno y luego retomaran el camino durante 2km rodeando el Lago El Trébol.  
					En el Km. 18 converge la Avenida Bustillo, desde donde los pasajeros regresan a Bariloche, donde concluye el tour.

 					</p>
 					<strong><span class="icon-directions_bus"></span>
 						Día 4 - Bariloche</strong>
 					<p>
 						-Desayuno
						-Día Libre
 					</p>
 					<strong><span class="icon-directions_bus"></span>
 						Día 5 - Bariloche</strong>
 					<p>
 						Salida de regreso hacia nuestros hogares. 
 					Mar del Plata y fin de nuestros servicios
 					</p>
					
				</div>
				<div class="paquete-viaje">
					<p>VALOR: $4.699</p> 
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
					  <option value="1">2018-01-30 -cama</option>
				</select>
				<input type="hidden" name="variable" value="bariloche" />
				<button type"submit" value="enviar" >Comprar</button>
			</form>
		
	</div>
	<?php include('pie.php'); ?>