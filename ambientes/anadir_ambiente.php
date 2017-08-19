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
	<link rel="icon" href="../instructores/imgs/logoSena.png">
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
		      <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
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
	            <form id="registro" action="" method="POST"><br>
	                <div class="form-group">
	                	 <label for=""><strong>Nombre de Ambiente*</strong></label>
	                    <input type="text"  class="form-control" name="nombre" data-validation="required" placeholder="Nombre">
	                    
	                </div>
	                <hr>
	               <!-- 	<div class="form-group">
	                 	<label for=""><strong>Disponibilidad*</strong></label>
	                    <input type="text" name="disponibilidad" class="form-control" placeholder="Dispobibilidad" >
	                    <hr>
	                </div> -->
	                <div class="form-group">
	                 	<label for=""><strong>Cupos*</strong></label>
	                    <input data-validation="required" type="number" name="cupo" class="form-control" placeholder="Cupo" >
	                </div>
	                <hr>
	       			<div class="form-group">
                         <label for=""><strong>Centro*</strong></label>
                         <select data-validation="required" name="centro" class="form-control">
                             <option value="">Seleccionar...</option>
                             <option value="industria">Industria</option>
                             <option value="automatizacion">Automatizacion</option>
                         </select>
                    </div>
	                <hr>
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

	           <script src="js/jquery-3.2.1.min.js"> </script>
   			   <script src="js/jquery.form-validator.min.js"></script>
    		   <script src="js/jquery.form-validator.es.js" ></script>
			   <script>
				        $(document).ready(function() {
				                $.validate({ 
				                    form: '#registro', 
				                    language: es 
				                });
				            });
				    </script>



		<?php 
			if ($_POST) {
			

			$con = mysqli_connect("localhost","root","","programacion_trimestral");

			if(mysqli_connect_errno()){

				echo "No se pudo conectar a la base de datos" . mysqli_connect_error();

			} 
			$nombre= mysqli_real_escape_string($con , $_POST["nombre"]);
			$cupo= mysqli_real_escape_string($con , $_POST["cupo"]);
			$centro= mysqli_real_escape_string($con , $_POST["centro"]);

		
			$sql= "INSERT INTO ambientes (nombre,cupo,centro)
				VALUES ('$nombre', '$cupo', '$centro')";

			$nombre= mysqli_real_escape_string($con , $_POST["nombre"]);
			$cupo= mysqli_real_escape_string($con , $_POST["cupo"]);
			$centro= mysqli_real_escape_string($con , $_POST["centro"]);

			if(!mysqli_query($con,$sql)){
				die('Error: ' . mysqli_error($con));
			}else{
				echo "
					
					<script>
					window.location.replace('ambientes.php?val=a');
					</script>";
			}
		}
		
		 ?>
	

	
	
	
</body>
</html>