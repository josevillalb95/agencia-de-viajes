<?php 
$user= filter_var($_POST['user'], FILTER_VALIDATE_EMAIL);
$password= filter_var($_POST['contra'], FILTER_SANITIZE_STRING);

$conexion=mysqli_connect("localhost","root","","c9");
session_start();
$consulta= mysqli_query($conexion,"select * from personas where email='$user'");
$reg=mysqli_fetch_array($consulta);

if($reg){
    if($reg["contra"]==md5($password)){
   //echo "logueado con exito";
    	$_SESSION['id'] = $reg["id_p"];
    
        
    }
}
else {
	//echo "error";
}
	header("location:index.php");

?>