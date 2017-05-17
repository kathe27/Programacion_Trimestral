<?php

$con = mysqli_connect("localhost","root","","programacion_trimestral");
if(mysqli_connect_errno()){
echo "no se pudo conectar" . mysqli_connect_error();
}

$id = $_GET['id'];
$sql = mysqli_query ($con, "DELETE FROM fichas WHERE id = $id");

echo " 
	<script>
	alert('Desea eliminar?');
	window.location.replace('index_ficha.php');
	</script>
"; 
?> 
