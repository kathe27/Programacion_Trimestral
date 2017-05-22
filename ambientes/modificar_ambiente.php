<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Ambientes</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>

	<?php 
		if ($_GET) {
			$id = $_GET['id'];
			$con = mysqli_connect('localhost', 'root', '', 'programacion_trimestral');
			$sql = mysqli_query($con, "SELECT * FROM ambientes WHERE id=$id");
			$row = mysqli_fetch_array($sql);
		}
	 ?>

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
		<br>
	 <div class="container-fluid">
	
		<h1 class="text-center" >Modificar Ambientes</h1><br>
	</div>
	<hr>

	
        <div class="col-md-6 col-md-offset-3 box ">
           <a href="ambientes.php" class="btn btn-danger"><i class="glyphicon glyphicon-arrow-left"></i>Volver</a>

	            <form id="add" action="" method="POST"><br>
	                <div class="form-group">
	                	 <label for=""><strong>Nombre de Ambiente</strong></label>
	                    <input type="text" value="<?php echo $row['nombre'] ?>"  class="form-control"name="nombre" data-validation="required" placeholder="Nombre">
	                    <hr>
	                </div>
	                <div class="form-group">
	                <label for=""><strong>Especialidad</strong></label>
	                   <input type="text" value="<?php echo $row['especialidad'] ?>" class="form-control" name="especialidad" placeholder="Especialidad" required>
	                   <hr>
	                </div>
	                 <div class="form-group">
	                 	<label for=""><strong>Disponibilidad</strong></label>
	                    <input type="text" value="<?php echo $row['disponibilidad'] ?>" name="disponibilidad" class="form-control" placeholder="Horario" >
	                    <hr>
	                </div>
	                 <div class="form-group">
<<<<<<< HEAD
	                <label for=""><strong>Descripcion</strong></label>
	                	<textarea class="form-control" name="descripcion" cols="20" rows="8" placeholder="Descripcion"><?php echo $row['descripcion'] ?></textarea>
	                 
						<hr>
=======
	                 	<label for=""><strong>Descripcion</strong></label>
	                    <input type="time" value="<?php echo $row['descripcion'] ?>" name="descripcion" class="form-control" placeholder="Descripcion" >
	                    <hr>
>>>>>>> df904acc644e57d8bdf3f1d3567d811317c35bfe
	                </div>
	                <div class="form-group">
	                    <button type="submit" class="btn btn-success">
	                        <i class="glyphicon glyphicon-pencil"></i>
	                        Modificar
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
			$descripcion= mysqli_real_escape_string($con , $_POST["descripcion"]);
			$disponibilidad= mysqli_real_escape_string($con , $_POST["disponibilidad"]);


			

			$sql= "UPDATE ambientes SET nombre='$nombre', especialidad='$especialidad',descripcion='$descripcion', disponibilidad = '$disponibilidad' WHERE id = $id";

			if(!mysqli_query($con,$sql)){
				die('Error: ' . mysqli_error($con));
			}else{
				echo "<script>alert('Se modifico con Exito');
					window.location.replace('../index.php');
					</script>";
			}
		}
		
		 ?>
	

	
	
	
</body>
</html>