

<?php

	$con = mysqli_connect("localhost","root","","programacion_trimestral");
	if(mysqli_connect_errno()){
		echo "no se pudo conectar" . mysqli_connect_error();
	}

		$id = $_GET['id'];
		$sql = mysqli_query ($con, "DELETE FROM ambientes WHERE id = $id");

		echo "<script>


				alert('Se eliminó correctamente');
				window.location.replace('ambientes.php');

			</script>";
			
?> 