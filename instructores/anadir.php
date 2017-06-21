<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Añadir Instructor</title>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="../instructores/imgs/logoSena.png">
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


<div class="col-md-6 col-md-offset-3 ">


  <h1 class="text2 text-center">Añadir instructor</h1>
   
  <div class="panel-body">
 

    <?php 

      $con = mysqli_connect("localhost","root","","programacion_trimestral");
      $query = mysqli_query($con ,"SELECT * FROM  instructores ");

    ?>
      <a href="gestionarIns.php" class="btn btn-danger"><i class="glyphicon glyphicon-arrow-left"></i>Volver</a>
    <form action="" method="post" id="registro"><br>
                    <div class="form-group">
                         <label for=""><strong>Nombres*</strong></label>
                        <input type="text"  class="form-control" name="nombres"  
                          placeholder="Nombres" data-validation="required" >
                        
                    </div>
                    <hr>

                    <div class="form-group">
                         <label for=""><strong>Apellidos*</strong></label>
                        <input type="text"  class="form-control" name="apellidos" data-validation="required" placeholder="Apellidos">
                    </div>
                    <hr>

                     
                     <div class="form-group">
                         <label for=""><strong>Especialidad*</strong></label>
                         <select data-validation="required" name="especialidad" class="form-control">
                             <option value="">Seleccionar...</option>
                             <option value="Tecnico">Tecnico</option>
                             <option value="Transversal">Transversal</option>
                             <option value="Ingles">Ingles</option>

                         </select>
                        
                    </div>
                    <hr>
                    <div class="form-group">
                         <label for=""><strong>Vinculacion*</strong></label>
                         <select data-validation="required" id="datos" name="vinculacion1" class="form-control" onchange="habilitarCombo(this.value);">
                             <option value="">Seleccionar...</option>
                             <option value="Planta">Planta</option>
                             <option value="Contratista">Contratista</option>
 
                         </select>
                        
                    </div>
                    <hr>

                       <div class="form-group">
                         <label  for=""><strong>Tipo Planta</strong></label>
                         <select data-validation="required" id="d1" name="tipoplanta" class="form-control" disabled="true">
                             <option value="">Seleccionar...</option>
                             <option value="Carrera">Carrera</option>
                             <option value="Provisional">Provisional</option>
 
                         </select>
                        
                    </div>
                    <hr>

                     
                       <div class="form-group">
                         <label for=""><strong>Tipo Contrato</strong></label>
                         <select data-validation="required" id="d2" name="tipocontrato" class="form-control" disabled="true">
                             <option value="">Seleccionar...</option>
                             <option value="Por Horas">Por Horas</option>
                             <option value="Término Fijo">Termino Fijo</option>
 
                         </select>
                        
                    </div>
                    <hr>

                     <div class="form-group">
                         <label for=""><strong>Cantidad Horas*</strong></label>
                         <select data-validation="required"  name="cantidadhoras" class="form-control">
                             <option value="">Seleccionar...</option>
                             <option value="32">32</option>
                             <option value="40">40</option>
                         </select>
                    </div>
                    <hr>

                    <div class="form-group">
                         <label for=""><strong>Actividades Administrativas</strong></label>
                         <select data-validation="required"  name="actadministrativas" class="form-control">
                             <option value="">Seleccionar...</option>
                             <option value="Sindesena">Sindesena</option>
                             <option value="Articulacion">Articulacion</option>
                             <option value="Virtual">Virtual</option>
                         </select>
                    </div>
                    <hr>

                     <div class="form-group">
                         <label for=""><strong>Area</strong></label>
                         <select data-validation="required"  name="area" class="form-control">
                             <option value="">Seleccionar...</option>
                             <option value="Ambiental">Ambiental</option>
                             <option value="Automotriz">Automotriz</option>
                             <option value="Etica y Comunicacion">Etica y Comunicacion</option>
                             <option value="Confeccion">Confeccion</option>
                             <option value="Construccion">Construccion</option>
                             <option value="Redes para Gas">Redes para Gas</option>
                             <option value="Salud Ocupacional">Salud Ocupacional</option>
                             <option value="Soldadura">Soldadura</option>
                             <option value="Ingles Presencial">Ingles Presencial</option>
                             <option value="Ingles Virtual">Ingles Virtual</option>
                             <option value="Ingles Voluntarios">Ingles Voluntarios</option>
                             <option value="Equipo Tecnico pedagogico">Equipo Tecnico pedagogico</option>
                             <option value="Cultura Fisica">Cultura Fisica</option>
                             <option value="Diseño Mecanico">Diseño Mecanico</option>
                             <option value="Electricidad">Electricidad</option>
                             <option value="Gestion Integrada de la Calidad">Gestion Integrada de la Calidad</option>
                             <option value="Informatica y Sistemas">Informatica y Sistemas</option>
                             <option value="Joyeria">Joyeria</option>
                             <option value="Mantenimiento">Mantenimiento</option>
                             <option value="Motos">Motos</option>
                             <option value="Mobiliario y Maderas">Mobiliario y Maderas</option>
                             <option value="Proyectos y Emprendimiento">Proyectos y Emprendimiento</option>
                         </select>
                    </div>
                    <hr>
                    <div class="form-group">
                         <label for=""><strong>Centro*</strong></label>
                         <select data-validation="required"  name="centro" class="form-control">
                             <option value="">Seleccionar...</option>
                             <option value="Industria">Industria</option>
                             <option value="Automatizacion">Automatizacion</option>
                         </select>
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
                        if ($_POST['vinculacion1'] == 'Contratista') {
                          $tipoplanta='No Aplica';
                          $tipocontrato=$_POST['tipocontrato'];
                        } else{
                          $tipoplanta=$_POST['tipoplanta'];
                          $tipocontrato='No Aplica';

                        }
                        $cantidadhoras=$_POST['cantidadhoras'];
                        $actadministrativas=$_POST['actadministrativas'];
                        $area=$_POST['area'];
                        $centro=$_POST['centro'];




                        

                            
                            $con = mysqli_connect("localhost","root","","programacion_trimestral");
                            $query = mysqli_query($con , "INSERT INTO instructores(nombres, apellidos, especialidad, vinculacion1, tipoplanta, tipocontrato, cantidadhoras, actadministrativas, area, centro) 
                                VALUES('$nombres','$apellidos','$especialidad','$vinculacion1','$tipoplanta','$tipocontrato','$cantidadhoras','$actadministrativas','$area','$centro')");

                            if($query){
                                echo "<script>window.location.replace('gestionarIns.php?val=a')</script>";
                            }else{
                                echo "<script>alert('No se registro Correctamente')</script>";
                                
                            }
                          

                    



                    }

                 ?>
  </div>
</div>
  

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"> </script>
    <script src="js/jquery.form-validator.min.js"></script>
    <script src="js/jquery.form-validator.es.js" ></script>

  
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

    <script>
        $(document).ready(function() {
                $.validate({ 
                    form: '#registro', 
                    language: es 
                });
            });
    </script>




  

</body>
</html>