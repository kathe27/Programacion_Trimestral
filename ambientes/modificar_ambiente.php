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
	<link rel="icon" href="../instructores/imgs/logoSena.png">
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
		      <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
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
	                <label for=""><strong>Cupo</strong></label>
	                	<input data-validation="required" value="<?php echo $row['cupo'] ?>" type="number" name="cupo" class="form-control" placeholder="Cupo" >
	                 <hr>
	                 <!-- <div class="form-group">
	                 	<label for=""><strong>Disponibilidad</strong></label>
	                    <input type="text" value="<?php echo $row['disponibilidad'] ?>" name="disponibilidad" class="form-control" placeholder="Horario" >
	                </div> -->
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
			$cupo= mysqli_real_escape_string($con , $_POST["cupo"]);


			$sql= "UPDATE ambientes SET nombre='$nombre',cupo='$cupo' WHERE id = $id";

			if(!mysqli_query($con,$sql)){
				die('Error: ' . mysqli_error($con));
			}else{
				echo "<script>
					window.location.replace('ambientes.php?val=ed');
					</script>";
			}
		}
		
		 ?>
	

	
	
	
</body>
</html>