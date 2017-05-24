<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>


<nav class="navbar navbar-inverse ">
          <div class="container-fluid">
            <div class="navbar-header">
               <a class="navbar-brand" href="#"><img id="img1" src="imgs/sena.png" class="img-rounded" width="100" height="100"></a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="../index.php">Inicio</a></li>
              <li><a href="../ambientes/ambientes.php">Ambientes</a></li>
              <li><a href="../fichas/index_ficha.php">Fichas</a></li>
              <li><a href="#">Instructores</a></li>
            </ul>
            <form class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Buscar">
              </div>
              <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-zoom-in"></i></button>
            </form>
          </div>
        </nav>


<div class=" col-md-8 col-md-offset-2 ">


  <h1 class="text2 text-center">Modificar instructor</h1>
  <div class="panel-body">

    <?php 
        if($_GET){
            $id=$_GET['id'];
            $con = mysqli_connect("localhost","root","","programacion_trimestral");
            $query = mysqli_query($con ,"SELECT * FROM  instructores where id=$id ");
            $row = mysqli_fetch_array($query);
        }
    	

    ?>

  <a href="gestionarIns.php" class="btn btn-danger"><i class="glyphicon glyphicon-arrow-left"></i>Volver</a>
    <form action="" method="post"><br>
                    <div class="form-group">
                         <label for=""><strong>Nombres</strong></label>
                        <input value="<?php echo $row['nombres'] ?>" type="text"  class="form-control"name="nombres" data-validation="required" placeholder="Nombres">
                        <hr>
                    </div>

                    <div class="form-group">
                         <label for=""><strong>Apellidos</strong></label>
                        <input value="<?php echo $row['apellidos'] ?>" type="text"  class="form-control"name="apellidos" data-validation="required" placeholder="Nombres">
                        <hr>
                    </div>

                     
                     <div class="form-group">
                         <label for=""><strong>Especialidad</strong></label>
                         <select value="<?php echo $row['especialidad'] ?>" name="especialidad" class="form-control">
                             <option value="">Seleccionar...</option>
                             <option value="Tecnico">Tecnico</option>
                             <option value="Transversal">Transversal</option>
                             <option value="Ingles">Ingles</option>

                         </select>
                        <hr>
                    </div>
                    <div class="form-group">
                         <label for=""><strong>Vinculacion</strong></label>
                         <select value="<?php echo $row['vinculacion'] ?>" id="datos" name="vinculacion1" class="form-control" onchange="habilitarCombo(this.value);">
                             <option value="">Seleccionar...</option>
                             <option value="Planta">Planta</option>
                             <option value="Contratista">Contratista</option>
 
                         </select>
                        <hr>
                    </div>

                       <div class="form-group">
                         <label for=""><strong>Tipo Planta</strong></label>
                         <select id="d1" name="tipoplanta" class="form-control" disabled="true">
                             <option value="">Seleccionar...</option>
                             <option value="Carrera">Carrera</option>
                             <option value="Provisional">Provisional</option>
 
                         </select>
                        <hr>
                    </div>

                     
                       <div class="form-group">
                         <label for=""><strong>Tipo Contrato</strong></label>
                         <select id="d2" name="tipocontrato" class="form-control" disabled="true">
                             <option value="">Seleccionar...</option>
                             <option value="Por Horas">Por Horas</option>
                             <option value="Término Fijo">Termino Fijo</option>
 
                         </select>
                        <hr>
                    </div>

                     <div class="form-group">
                         <label for=""><strong>Catntidad Horas*</strong></label>
                         <select id="d2" name="cantidadhoras" class="form-control">
                             <option value="">Seleccionar...</option>
                             <option value="32">32</option>
                             <option value="48">40</option>
 
                         </select>
                        <hr>
                    </div>

                    <button type="submit" class="btn btn-success">Añadir</button>
                    <button type="reset" class="btn btn-default">Reiniciar</button>


                </div>

         </form>
                        
                <?php 

                    if($_POST){
                        $nombres=$_POST['nombres'];
                        $apellidos=$_POST['apellidos'];
                        $especialidad=$_POST['especialidad'];
                        $vinculacion1=$_POST['vinculacion1'];
                        $tipocontrato=$_POST['tipocontrato'];
                        $tipoplanta=$_POST['tipoplanta'];
                        $cantidadhoras=$_POST['cantidadhoras'];

                        

                     
                            $con = mysqli_connect("localhost","root","","programacion_trimestral");
                            $query = mysqli_query($con , "UPDATE instructores SET nombres='$nombres' , apellidos='$apellidos'
                            , especialidad='$especialidad' , vinculacion1='$vinculacion1' , tipocontrato='$tipocontrato' , tipoplanta='$tipoplanta', cantidadhoras='$cantidadhoras' where id=$id");

                            if($query){
                                echo "<script>alert('Modifico correctamente');document.location.replace('gestionarIns.php')</script>";
                            }else{
                                echo "<script> alert('No modifico')</script>";
                            }

                        



                    }

                 ?>
  </div>
</div>
	

	<script src="js/jquery-3.2.1.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.form-validator.es.js"></script>
    <script src="js/jquery.form-validator.min.js"></script>

    <script>    

            $(function() {
                $.validate({ form: '#add', 
                    languaje : es

            });
            });

    </script>
     <script>
      function habilitarCombo(valor){
    if(valor=='Planta'){
      document.getElementById("d1").disabled = false;
      document.getElementById("d2").disabled = true;

    }
    else {
      document.getElementById("d2").disabled = false;
      document.getElementById("d1").disabled = true;

    }
  }
    </script>



	

</body>
</html>