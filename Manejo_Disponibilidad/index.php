<?php 
	require 'config/app.php';
	require 'config/database.php';
	include 'template/header.inc';
 ?>
 	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/material-kit.css">
	<link rel="stylesheet" href="iconfont/material-icons.css">
	<link rel="stylesheet" href="assets/css/index.css">
	
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">LOGIN</h1>
			<hr>
			<div class="panel panel-info">
			  <div class="panel-heading">
			    <h3 class="panel-title">Ingreso de Usuario</h3>
			  </div>
			  <div class="panel-body">
			  <div class="row">
			  	<div class="col-md-8 col-md-offset-2">
			  		<form action="" method="post">
			    	<div class="form-group label-floating	">
			    		<input type="text" 
			    			   class="form-control" 
			    			   name="user"
			    			   placeholder="Usuario">
			    	</div>
			    	<div class="form-group">
			    		<input type="password" 
			    			   class="form-control" 
			    			   name="password"
			    			   placeholder="Contraseña">
			    	</div>
			    	<div class="form-group">
			    		<input type="submit" 
			    			   class="btn btn-info" 
			    			   value="Ingresar">
			    	</div>
			    	</form>
			  	    </div>
			      </div>
			   </div>
			</div>
		</div>
	</div>
</div>

<?php 

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$usuario = $_POST['user'];
		$password = $_POST['password'];
			
		if (login($con,$usuario,$password)){

			echo "<script>window.location.replace('../index.php');</script>";
		}else{
			echo "<div class='alert alert-danger col-md-4 col-md-offset-5 text-center'>
								    <div >
									  <div class='alert-icon'>									
									  </div>
									  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
										<span aria-hidden='true'><i class='material-icons'>clear</i></span>
									  </button>
									  <b>Info alert:</b> Datos incorrectos
								    </div>
									</div>";
		}
		}	

		 ?>

<?php 
	include 'template/footer.inc';
 ?>
 </html>

	
