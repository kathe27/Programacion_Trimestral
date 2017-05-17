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


<div class="panel panel-primary col-md-8 col-md-offset-2 ">

  <div class="panel-heading panel-primary panel22">Gestionar Instructores</div>
  <h1 class="text2 text-center">Modificar instructor</h1>
    <a class="text2 text22"href="gestionarIns.php">Volver</a>
  <div class="panel-body">

    <?php 
        if($_GET){
            $id=$_GET['id'];
            $con = mysqli_connect("localhost","root","","programacion_trimestral");
            $query = mysqli_query($con ,"SELECT * FROM  instructores where id=$id ");
            $row = mysqli_fetch_array($query);
        }
    	

    ?>

   <form id="add" method="post">
                    <div class="form-group">
                        <input type="text" value="<?= $row['nombre']  ?>" name="nombre" class="form-control" data-validation="required">
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?= $row['apellidos']?>" name="apellidos" class="form-control" data-validation="required">
                        
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?= $row['especialidad']?>" name="especialidad" class="form-control" data-validation="required">
                        
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?=$row['apoyo_grupos']?>" name="apoyo_grupos" class="form-control" data-validation="required">
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?=$row['tipo_contrato']?>" name="tipo_contrato" class="form-control" data-validation="required">
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?=$row['cantidad_horas']?>" name="cantidad_horas" class="form-control" data-validation="required">
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?=$row['restricciones']?>" name="restricciones" class="form-control" data-validation="required">
                    </div>
                    <div class="form-group">
                        <input type="text"  value="<?=$row['horario']?>" name="horario" class="form-control" data-validation="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-success"> 
                            <i class="glyphicon glyphicon-plus"></i>Enviar
                        </button>
                        <button type="reset" class="btn btn-default "> 
                            <i class="glyphicon glyphicon-trash"></i>Limpiar
                        </button>
                    </div>
                </form>
                        
                <?php 

                    if($_POST){
                        $nombre=$_POST['nombre'];
                        $apellidos=$_POST['apellidos'];
                        $especialidad=$_POST['especialidad'];
                        $apoyo_grupos=$_POST['apoyo_grupos'];
                        $tipo_contrato=$_POST['tipo_contrato'];
                        $cantidad_horas=$_POST['cantidad_horas'];
                        $restricciones=$_POST['restricciones'];
                        $horario=$_POST['horario'];

                        

                        if($nombre != "" && $apellidos != "" && $especialidad != "" && $apoyo_grupos != "" && $tipo_contrato!="" && $cantidad_horas!= "" && $restricciones!="" && $horario!= ""){

                            $con = mysqli_connect("localhost","root","","programacion_trimestral");
                            $query = mysqli_query($con , "UPDATE instructores SET nombre='$nombre' , apellidos='$apellidos'
                            , especialidad='$especialidad' , apoyo_grupos='$apoyo_grupos' , tipo_contrato='$tipo_contrato' , cantidad_horas='$cantidad_horas', restricciones='restricciones',horario='$horario' where id=$id");

                            if($query){
                                echo "<script>alert('Modifico correctamente');document.location.replace('gestionarIns.php')</script>";
                            }else{
                                echo "<script> alert('No modifico')</script>";
                            }

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


	

</body>
</html>