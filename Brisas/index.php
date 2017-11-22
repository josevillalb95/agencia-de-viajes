<?php include"top.php"; ?>

		<div class="contenido">
	
			<div class="slide">
				<ul id="slide">
						
					<li>
						<h2>Cataratas del Iguazu-  Oferta Relampago <span class="icon-power"></span>
						</h2>
						<div class="sale-i">
							<div class="im">	<img src=" img/iguazu.jpg" alt=""> </div>
							<div class="im">	<img src=" img/iguazu2.jpg" alt=""> </div>
							<div class="im">	<img src=" img/iguazu3.jpg" alt=""> </div>
								
						</div>
						<div class="sale">
							
							<div class="sale-desc">
								<h3>OCHO DIAS DE DESCANSO, PASEO Y COMPRAS.</h3>
								<p><span class="icon-directions_bus"></span>Traslado en Bus Mix: - Planta baja coche  cama (Adicional $300 por persona) - Planta alta  semi- cama </p>
								<p><span class="icon-directions_bus"></span>Coordinador permanente y guías locales en destino.</p>
								<p><span class="icon-directions_bus"></span>4 noches de alojamiento en Cataratas lado brasilero con desayuno incluido!!.</p>
								<p><span class="icon-directions_bus"></span>Excursion Minas de Wanda, Ruinas de San Ignacio.
								</p>
								<p><span class="icon-directions_bus"></span>Tour de compras Shopping Duty Free.
								</p>
							</div>
							<div class="sale-p">
								<img src=" img/precio.png" alt="">
								<strong>4500$</strong>
								<button id="slide1" type"submit" value="enviar">Comprar </button>
								<script>
									if ($("#userid").val()!=""){
						$(".sale-p button").off("click").on("click",function(){
						 $("#modalfecha").dialog();	
						});
					} else {
				
				$(".sale-p button").off("click").on("click",function(){
						 alert("debes iniciar sesion");
						 	});
					}
					
					
					
								
								</script>
							</div>
							
						</div>
						
					</li>
					<li>
						<h2>Vuelta al norte Argentino - Oferta Relampago <span class="icon-power"></span></h2>
						<div class="sale-i">
							<div class="im">	<img src=" img/norte.jpg" alt=""> </div>
							<div class="im">	<img src=" img/salta2.jpg" alt=""> </div>
							<div class="im">	<img src=" img/salta3.jpg" alt=""> </div>
								
						</div>
						
						<div class="sale">
							
							<div class="sale-desc">
								<h3>TRECE DIAS DE HERMOSOS PAISAJES Y DIVERSION!!!</h3>
								<p><span class="icon-directions_bus"></span>Traslado en Bus Mix: - Planta baja coche  cama (Adicional $300 por persona) - Planta alta  semi- cama</p>
								<p><span class="icon-directions_bus"></span>coodinador permanente y guias locales en destino</p>
								<p><span class="icon-directions_bus"></span>2 noches   en Tucumán,5 noches  en Salta y 3 noches en Termas de Rio Hondo</p>
								<p><span class="icon-directions_bus"></span>City tour por Tucumán, Salta, Termas de Río Hondo y  Santiago del Estero.</p>

							</div>
							<div class="sale-p">
								<img src=" img/precio.png" alt="">
								<strong>$7199</strong>
								<button id="slide2" type"submit" value="enviar">Comprar </button>
							</div>
						</div>
					</li> 
					<li>
						<h2>Mendoza y chile - Oferta Relampago
							<span class="icon-power"></span>
						</h2>
						
						<div class="sale-i">
							<div class="im">	<img src=" img/mendoza.jpg" alt=""> </div>
							<div class="im">	<img src=" img/mendoza2.jpg" alt=""> </div>
							<div class="im">	<img src=" img/mendoza3.jpg" alt=""> </div>
								
						</div>
						<div class="sale">
							
							<div class="sale-desc">
								<h3>OCHO DIAS DE DESCANSO, PASEO Y COMPRAS.</h3>
								<p><span class="icon-directions_bus"></span>Traslado en Bus Mix: - Planta baja coche  cama (Adicional $300 por persona) - Planta alta  semi- cama</p>
								<p><span class="icon-directions_bus"></span>Coordinador permanente y guías locales en destino.</p>
								<p><span class="icon-directions_bus"></span>3 noches de alojamiento en Santiago de Chile y 2 noches de alojamiento en Ciudad de Mendoza con desayuno incluido.</p>
								<p><span class="icon-directions_bus"></span>Paseo de Alta Montaña, conociendo Puente del Inca y vista del Aconcagua.</p>
								<p><span class="icon-directions_bus"></span>Visita a Potrero de los Funes.</p>
							</div>
							<div class="sale-p">
								<img src=" img/precio.png" alt="">
								<strong>6499$</strong>
								<button id="slide3" type"submit" value="enviar">Comprar </button>
							</div>
						</div>
					</li> 
				</ul>
			</div>
			
			<p class="tit_descubre">Descubre nuestra Argentina</p>
			<div class="descubre">
				
				<div class="sector">
					<div class="lugar">
						<div class="lugar-paisaje">
							<img src=" img/img-1quebrada.png" alt="">
						</div>
						<div class="lugar-nombre">
							
							<h3 class="hovernom">La Quebrada</h3>
							<h4 class="hovernom2">Difruta unas mini vacaciones en jujuy</h4>
							<a  class="hoverlink" href="salta.php">Ver mas</a>
						</div>
					</div>
					<div class="lugar">
						<div class="lugar-paisaje">
							<img src=" img/img-2-tren.jpg" alt="">
						</div>
						<div class="lugar-nombre">
							<h3 class="hovernom">El Tren de las nueves</h3>
							<h4 class="hovernom2">Difruta unas vacaciones en salta</h4>
							<a class="hoverlink" href=" salta.php">Ver mas</a>
						</div>
					</div>
				</div>
				<div class="sector">
					<div class="lugar">
						<div class="lugar-paisaje">
							<img src=" img/img0-cord.jpg" alt="">
						</div>
						<div class="lugar-nombre">
							<h3 class="hovernom">El Cucu</h3>
							<h4 class="hovernom2">Difruta unas vacaciones en Cordoba</h4>
							<a class="hoverlink" href="cordoba.php">Ver mas</a>
						</div>
					</div>
					<div class="lugar">
						<div class="lugar-paisaje">
							<img src=" img/img-3-sanl.jpg" alt="">
						</div>
						<div class="lugar-nombre">
							<h3 class="hovernom">Parque Nacional Quijadas</h3>
							<h4 class="hovernom2">Difruta unas vacaciones en San Luis</h4>
							<a class="hoverlink" href=" sanluis.php">Ver mas</a>
						</div>
					</div>
				</div>
				<div class="sector">
					<div class="lugar">
						<div class="lugar-paisaje">
							<img src=" img/paisaje5.jpg" alt="">
						</div>
						<div class="lugar-nombre">
							<h3 class="hovernom">Glaciar Perito Moreno</h3>
							<h4 class="hovernom2">Difruta unas vacaciones en SantaCruz</h4>
							<a class="hoverlink" href="santacruz.php">Ver mas</a>
						</div>
					</div>
					<div class="lugar">
						<div class="lugar-paisaje">
							<img src=" img/paisaje6.png" alt="">
						</div>
						<div class="lugar-nombre">
							<h3 class="hovernom">Bariloche</h3>
							<h4 class="hovernom2">Difruta unas vacaciones en Rio Negro</h4>
							<a class="hoverlink" href="bariloche.php">Ver mas</a>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		
	

		
		 <?php
			include("relampago.php");
		 ?>

		
		
		
	<div class="modal" id="modalfecha" title="SELECCIONA TIPO DE ASIENTO">
			
			<form action="comprapag.php" method="post">
				<p>Oferta Relampago! <span class="icon-power"></span></p>
				<select name="formfecha"> 
					  <option value="1">CAMA</option>
					  <option value="2">SEMI-CAMA</option>
				</select>
				<input type="hidden" name="variable" id="variable" value=""/>
				<button type"submit" value="enviar" >Comprar</button>
			</form>
		
	</div>
	
	<?php
		 include"pie.php";
	?>