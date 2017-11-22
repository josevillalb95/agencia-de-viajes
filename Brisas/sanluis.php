<?php include('top.php'); ?>
		<div class="contenido">
			<p class="tit_descubre">San Luis, Mendoza y San Rafael </p>
			<div class="info-viaje">
					<div class="cajaviaje">
						<img src="img/svg/watch.svg" alt="">
						<p>8 Días 5 Noches</p>
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
					<div class="imgpaisaje"><img src="img/sanluis.jpg" alt=""></div>
					<div class="imgpaisaje"><img src="img/mendoza.jpg" alt=""></div>
					<div class="imgpaisaje"><img src="img/sanrafael.jpg" alt=""></div>
					
				</div>
				<div class="info-viajedata">
					<strong><span class="icon-directions_bus"></span>Día 1 - Mar del Plata </strong>
						<P>Salida en horas de la tarde con destino a San Luis, pasando por Tandil, Azul, etc.</p>
					<strong><span class="icon-directions_bus"></span>Día 2 - San Luis</strong>
					<p>tardeCity Tour de San Luis, recorriendo Plaza Pringles, Museo Histórico de San Luis, Hito del Bicentenario, nueva Casa de Gobierno, Catedral Basílica, Iglesia de Santo Domingo, Potrero de los Funes.
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 3 - San Luis</strong>
 					<p>
 						 Circuito Serrano Grande ( El Volcán, Trapiche, Dique La Florida, Caverna Inti Huasi, etc ) con Mina de Oro La Carolina. 

 					</p>
 					<strong><span class="icon-directions_bus"></span>
 						Día 4 - San Luis / Mendoza</strong>
 					<p>
 						salida en excursión para conocer la ciudad capital y sus puntos de interés turístico: Plaza Independencia, Cerro de la Gloria ( ascenso opcional ), Parque Gral. San Martín, etc. Se visitará además alguna bodega tradicional, sus viñedos y degustación.
 					</p>
 					<strong><span class="icon-directions_bus"></span>
 						Día 5 - Mendoza</strong>
 					<p>
 						Desayuno. Día libre. Recomendamos tomar la excursión opcional más atractiva de la región: Alta Montaña. Visitaremos Uspallata, Penitentes, Puente del Inca, Mirador del Cerro Aconcagua y por último Las Cuevas
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 6 - Mendoza</strong>
 					<p>
 						Termas de Cacheuta, disfrutando de las aguas termales rodeado de un marco paisajístico imponente. Incluye ingreso al complejo y asado libre con bebida.
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 7 - Mendoza / San Rafael</strong>
 					<p>
 						
 						Desayuno. En horario convenido salida de regreso hacia nuestros hogares, conociendo durante el trayecto San Rafael, en la zona sur de la pcia. de Mendoza. Tiempo libre. Posibilidad de extender el paseo para conocer Valle Grande. Prosecución del viaje.
 					</p>
 					<strong><span class="icon-directions_bus"></span>Día 8 - Mar del Plata</strong>
 					<p>
						Arribo y fin de nuestros servicios
 					</p>
					
				</div>
				<div class="paquete-viaje">
					<p>VALOR: $ 6.699</p> 
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
					  <option value="1">2017-11-20 -cama</option>
					  <option value="2">2017-11-20 -semicama</option>
				</select>
				<input type="hidden" name="variable" value="salta" />
				<button type"submit" value="enviar" >Comprar</button>
			</form>
		
	</div>
	<?php include('pie.php'); ?>