<?php 

if($_GET){
	$id=$_GET['id'];

	$con=mysqli_connect("localhost","root","","programacion_trimestral");

	$query= mysqli_query($con , "DELETE FROM instructores WHERE id=$id ");

	if($query){
		echo "<script>alert('Usuario eliminado');document.location.replace('gestionarIns.php')</script>";
	}else{
		echo "<script>alert('No se elimino usuario');document.location.replace('gestionarIns.php')</script>";		
	}
}