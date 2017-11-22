<!--https://developers.google.com/speed/libraries/#jquery-ui-->

<?php
$conexion=mysqli_connect("localhost","root","","c9");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Brisas Azules SRL</title>
	<link rel="stylesheet" href=" css/normalize.css">
	<link rel="stylesheet" href=" css/Global.css">
	<link rel="stylesheet" href=" css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	

</head>
<body>
	<input type="hidden" id="userid" value="<?php echo $_SESSION['id']; ?>"/>
	<div class="main">
		<header>
		<div class="banner">
			<input type="checkbox" id="btn-menu">
			<label for="btn-menu"><span class="icon-menu3"></span></label>
			<nav class="menu">
				<ul>
					
					<li class="L-Soc">
						<div><a href="#"><span class="icon-facebook2"></span></a></div>
						<div><a href="#"><span class="icon-instagram"></span></a></div>
						<div><a href="#"><span class="icon-twitter"></span></a></div>
					</li>
					<li class="liBusq"><a href="index.php">Inicio</a></li>
					<li class="liBusq"><a href="#">Usuario</a>
						<ul class="subUl">
							<?php
							if ($_SESSION['id']!=''){?>
								<li id="ses" class="sub" estado-sesion='0'><a href="logout.php">cerrar sesion</a></li>
								<li id="muestrainformacion" class="sub"><a href="#">Muestra</a></li>
								<script>
									$("#muestrainformacion").on("click",function(){
										$("#modalinformacion").dialog();
									});
									
								</script>
								<li id="edit" class="sub"><a href="#">Editar</a></li>
								<script>
									$("#edit").on("click",function(){
										$( "#modalactualiza" ).dialog();
									});
								</script>
								
								<?php } 
							else {	?>
								<li id="ses" class="sub" estado-sesion='0'><a href="#">Iniciar Sesion</a></li>
								<script>
									$("#ses").on("click",function(){
										if($(this).attr('estado-sesion')==0){
											 $( "#dialog" ).dialog();
											 $(this).attr('estado-sesion',1);
										 }
									});
								</script>
										
								<li id="regi" class="sub" ><a href="#">Registrase</a></li>
									<?php
									if ($_SESSION['id']==''){ ?>
									<script>
										$("#regi").on("click",function(){
											 $("#modalregistro").dialog(); }
										);
									</script>
									<?php
									} 
									?> 
							<?php } ?>
						</ul>
					</li>
					<li class="liBusq"><a href="">Contacto</a></li>
					<li class="liBusq"><a href="sanluis.php">Best Seller</a></li>
					<li class="liBusq"><a href="javascript:void(0);">Recitales</a>
						<ul class="subUl">
							<li class="sub"><a href="bon.php">Bon Jovi</a></li>
							<li class="sub"><a href=" greenday.php">Green Day</a></li>
							<li class="sub"><a href="cold.php">ColdPlay</a></li>
						</ul>
					</li>
					
			
					<li id="busq" >
					
						<form action="busqueda.php" method="post">
							<input type="text" name="bus"/>
								<input type="image" class="icon-search" value=" " style="display: inline; padding: 5px;">

						</form>
					
					
						
						
					</li>
				</ul>
			</nav>
			<div class="redes">
				<div><a href="#"><span class="icon-facebook2"></span></a></div>
				<div><a href="#"><span class="icon-instagram"></span></a></div>
				<div><a href="#"><span class="icon-twitter"></span></a></div>
				<div><a href="#"><span class="icon-location2"></span></a></div>
			</div>
			<div class="posNomb">
				<div class="imgLogo"><img src=" img/logobus.png" alt=""></div>
			</div>
		
		</div>
		</header>
		<div class="modal" id="dialog" title="iniciar sesion">
			<?php include("login.php");?> 
		</div>
 
		<div class="modal" id="modalregistro" title="registrarse">
			<?php 	include("registrar.php");	?>
		 	 
		</div>
		
		<div class="modal" id="modalactualiza" title="Modificar">
			<?php 	include("actualiza.php");	?>
		</div>
			<div class="modal" id="modalinformacion" title="Tus viajes son...">
			<?php include("muestra.php"); ?>
		
		</div>