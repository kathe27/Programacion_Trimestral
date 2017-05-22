<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Añadir</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#"><img id="img1" src="imgs/sena.png" class="img-rounded" width="100" height="100"></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="../index.php">Inicio</a></li>
		      <li><a href="#">Ambientes</a></li>
		      <li><a href="../fichas/index_ficha.php">Fichas</a></li>
		      <li><a href="../instructores/gestionarIns.php">Instructores</a></li>
		    </ul>
		    <form class="navbar-form navbar-right">
		      <div class="form-group">
		        <input type="text" class="form-control" placeholder="Buscar">
		      </div>
		      <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-zoom-in"></i></button>
		    </form>
		  </div>
		</nav>
	<div class="container-fluid">
		<h1 class="display-1 text-center">Añadir Ambiente</h1>

	</div>
	<br>
	<hr>



        <div class="col-md-6 col-md-offset-3 box ">
			   <a href="ambientes.php" class="btn btn-danger"><i class="glyphicon glyphicon-arrow-left"></i>Volver</a>
	            <form id="add" action="" method="POST"><br>
	                <div class="form-group">
	                	 <label for=""><strong>Nombre de Ambiente*</strong></label>
	                    <input type="text"  class="form-control"name="nombre" data-validation="required" placeholder="Nombre">
	                    <hr>
	                </div>
	                <div class="form-group">
	                <label for=""><strong>Especialidad*</strong></label>
	                   <input type="text" class="form-control" name="especialidad" placeholder="Especialidad" required>
	                   <hr>
	                </div>
	                <div class="form-group">
	                <label for=""><strong>Instructor*</strong></label>
	                    <input type="text" name="instructor" class="form-control" placeholder="Instructor" required>
						<hr>
	                </div>

	                 <div class="form-group">
	                 	<label for=""><strong>Hora de Inicio*</strong></label>
	                    <input type="time" name="hora_inicio" class="form-control" placeholder="Hora de Inicio" >
	                    <hr>
	                </div>

	                 <div class="form-group">
	                 	<label for=""><strong>Hora de Entrega*</strong></label>
	                    <input type="time" name="hora_entrega" class="form-control" placeholder="Hora de Entrega" >
	                    <hr>
	                </div>

	                  <div class="form-group">
	                 	<label for=""><strong>Descripcion*</strong></label>
	                   <textarea name="descripcion" placeholder="descripcion" id="" cols="20" rows="8" class="form-control"></textarea>
	                    <hr>
	                </div>
	                <div class="form-group">
	                    <button type="submit" class="btn btn-success">
	                        <i class="glyphicon glyphicon-plus"></i>
	                        Añadir
	                    </button>
	                    <button type="reset" class="btn btn-default">
	                        <i class="glyphicon glyphicon-trash"></i>
	                        Limpiar
	                    </button>
	                </div>
	            </form>
	           </div>



		<?php 
			if ($_POST) {
			

			$con = mysqli_connect("localhost","root","","programacion_trimestral");

			if(mysqli_connect_errno()){

				echo "No se pudo conectar a la base de datos" . mysqli_connect_error();

			} 
			$nombre= mysqli_real_escape_string($con , $_POST["nombre"]);
			$especialidad= mysqli_real_escape_string($con , $_POST["especialidad"]);
			$instructor= mysqli_real_escape_string($con , $_POST["instructor"]);
			$hora_inicio= mysqli_real_escape_string($con , $_POST["hora_inicio"]);
			$hora_entrega= mysqli_real_escape_string($con , $_POST["hora_entrega"]);
			$descripcion= mysqli_real_escape_string($con , $_POST["descripcion"]);


			

			$sql= "INSERT INTO ambientes (nombre,especialidad,instructor,hora_inicio, hora_entrega, descripcion)
				VALUES ('$nombre', '$especialidad', '$instructor', '$hora_inicio', '$hora_entrega', '$descripcion')";

			if(!mysqli_query($con,$sql)){
				die('Error: ' . mysqli_error($con));
			}else{
				echo "
					
					<script>alert('Exito');
					window.location.replace('../index.php');
					</script>";
			}
		}
		
		 ?>
	

	
	
	
</body>
</html>