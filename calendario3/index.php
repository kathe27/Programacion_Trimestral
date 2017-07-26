<?php

/**
**
**  BY iCODEART
**
**********************************************************************
**                      REDES SOCIALES                            ****
**********************************************************************
**                                                                ****
** FACEBOOK: https://www.facebook.com/icodeart                    ****
** TWIITER: https://twitter.com/icodeart                          ****
** YOUTUBE: https://www.youtube.com/c/icodeartdeveloper           ****
** GITHUB: https://github.com/icodeart                            ****
** TELEGRAM: https://telegram.me/icodeart                         ****
** EMAIL: info@icodeart.com                                       ****
**                                                                ****
**********************************************************************
**********************************************************************
**/

// Definimos nuestra zona horaria
date_default_timezone_set("America/Santiago");

// incluimos el archivo de funciones
include 'funciones.php';

// incluimos el archivo de configuracion
include 'config.php';

// Verificamos si se ha enviado el campo con name from
if (isset($_POST['from'])) 
{

    // Si se ha enviado verificamos que no vengan vacios
    if ($_POST['from']!="" AND $_POST['to']!="") 
    {

        // Recibimos el fecha de inicio y la fecha final desde el form

        $inicio = _formatear($_POST['from']);
        // y la formateamos con la funcion _formatear

        $final  = _formatear($_POST['to']);

        // Recibimos el fecha de inicio y la fecha final desde el form

        // $inicio_normal = $_POST['from'];

        // y la formateamos con la funcion _formatear
        $final_normal  = $_POST['to'];

        $titulo  = evaluar($_POST['title']);
        // reemplazamos los caracteres no permitidos
        $clase  = evaluar($_POST['class']);

        $centro = evaluar($_POST['centro']);
        $ambientei = evaluar($_POST['ambientei']);
        $instructori = $_POST['instructori'];
        // $ambientea = $_POST['ambientea'];
        // $instructora = $_POST['instructora'];
        $area = $_POST['area'];
        $ficha = $_POST['ficha'];
        $especialidad = $_POST['especialidad'];
      



        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
        }  

      
         $conexion = mysqli_connect("localhost","root","","programacion_trimestral");  
                     $fecha_inicio=mysqli_query($conexion,"SELECT inicio_normal FROM eventos");
                     $inicio_normal = $_POST['from'];
                     while($row =mysqli_fetch_array($fecha_inicio)){
                        echo "hora ".$row['inicio_normal']."<br>";


                        if ($inicio_normal==$row['inicio_normal']) {
                            $fecha_igual=$inicio_normal;
                        }




                     }

                    if (empty($fecha_igual)) {
                    // insertamos el evento
                     $query="INSERT INTO eventos VALUES(null,'$centro','$ambientei','$instructori','$ambientea','$instructora','$area','$ficha','$especialidad','$titulo','','','$clase','$inicio','$final','$inicio_normal','$final_normal')";
       
                     // Ejecutamos nuestra sentencia sql
                     $conexion->query($query); 
                     $im=$conexion->query("SELECT MAX(id) AS id FROM eventos");
                     $row = $im->fetch_row();  
                     $id = trim($row[0]);

                     // para generar el link del evento
                     $link = "http://localhost/yaneth/programacion_trimestral/calendario3/"."descripcion_evento.php?id=$id";

                     // y actualizamos su link
                     $query="UPDATE eventos SET url = '$link' WHERE id = $id";

                     // Ejecutamos nuestra sentencia sql
                     $conexion->query($query); 

                     // redireccionamos a nuestro calendario
                     header("Location:http://localhost/yaneth/programacion_trimestral/calendario3?men=ver&&id=$id"); 
                    }else{
                     $conexion->query($query); 
                     $im=$conexion->query("SELECT MAX(id) AS id FROM eventos");
                     $row = $im->fetch_row();  
                     $id = trim($row[0]);
                     header("Location:http://localhost/yaneth/programacion_trimestral/calendario3?men=fal&&id=$id");
                    }

                    
    }
}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <title>Calendario</title>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base_url?>css/calendar.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?=$base_url?>js/es-ES.js"></script>
        <script src="<?=$base_url?>js/jquery.min.js"></script>
        <script src="<?=$base_url?>js/moment.js"></script>
        <script src="<?=$base_url?>js/bootstrap.min.js"></script>
        <script src="<?=$base_url?>js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" href="<?=$base_url?>css/bootstrap-datetimepicker.min.css" />
       <script src="<?=$base_url?>js/bootstrap-datetimepicker.es.js"></script>
        <link rel="icon" href="../instructores/imgs/logoSena.png">
    </head>

</head>
<body style="background: white;">
        <?php  if ($_GET) {

                    
             if (!empty($_GET['men'])) {
                 $valor = $_GET['men'];
             }




                    if ($valor == 'fal') {
                         echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                      <strong>IMPORTANTE!</strong> La hora que usted intenta agregar ya se encuentra ocupada en este ambiente
                    </div>";
                    }

                    if ($valor == 'ver') {
                         echo "<div class='alert alert-success alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                      <strong>Exito!</strong> La hora se ha agregado correctamente
                    </div>";
                    }
                    if($valor == 'bien'){
                         echo "<div class='alert alert-success alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                      <strong>Exito!</strong> Bienvenido
                    </div>";
                    }

                    
                    
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
        }         
      
                    
                      
        }

        
            


        ?>

        <div class="container">
                <div class="row">
                        <div class="page-header"><h2></h2></div>
                        <?php $ambientes = mysqli_query($conexion,"SELECT * from ambientes where id=$id"); 
                              $row = mysqli_fetch_array($ambientes);
                        ?>
                        <h1><?= $row['nombre']?></h1>


                                <div class="pull-left form-inline"><br>
                                        <div class="btn-group">
                                            <button class="btn btn-primary" data-calendar-nav="prev"><< Anterior</button>
                                            <button class="btn" data-calendar-nav="today">Hoy</button>
                                            <button class="btn btn-primary" data-calendar-nav="next">Siguiente >></button>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-warning" data-calendar-view="year">Año</button>
                                            <button class="btn btn-warning active" data-calendar-view="month">Mes</button>
                                            <button class="btn btn-warning" data-calendar-view="week">Semana</button>
                                            <button class="btn btn-warning" data-calendar-view="day">Dia</button>
                                        </div>

                                </div>
                                    <div class="pull-right form-inline"><br>
                                        <a class="btn btn-primary" href="../ambientes/ambientes.php">Volver</a>
                                        <button class="btn btn-info" data-toggle='modal' data-target='#add_evento'>Añadir Formación</button>
                                    </div>

                </div><hr>

                <div class="row">
                        <div id="calendar"></div> <!-- Aqui se mostrara nuestro calendario -->
                        <br><br>
                </div>

                <!--ventana modal para el calendario-->
                <div class="modal fade" id="events-modal">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                    <div class="modal-body" style="height: 400px">
                                        <p>One fine body&hellip;</p>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
        </div>

    <script src="<?=$base_url?>js/underscore-min.js"></script>
    <script src="<?=$base_url?>js/calendar.js"></script>
    <script type="text/javascript">
        (function($){
                //creamos la fecha actual
                var date = new Date();
                var yyyy = date.getFullYear().toString();
                var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
                var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();

                //establecemos los valores del calendario
                var options = {

                    // definimos que los eventos se mostraran en ventana modal
                        modal: '#events-modal', 

                        // dentro de un iframe
                        modal_type:'iframe',    

                        //obtenemos los eventos de la base de datos
                        events_source: '<?=$base_url?>obtener_eventos.php', 

                        // mostramos el calendario en el mes
                        view: 'month',             

                        // y dia actual
                        day: yyyy+"-"+mm+"-"+dd,   


                        // definimos el idioma por defecto
                        language: 'es-ES', 

                        //Template de nuestro calendario
                        tmpl_path: '<?=$base_url?>tmpls/', 
                        tmpl_cache: false,


                        // Hora de inicio
                        time_start: '07:00', 

                        // y Hora final de cada dia
                        time_end: '22:00',   

                        // intervalo de tiempo entre las hora, en este caso son 30 minutos
                        time_split: '30',    

                        // Definimos un ancho del 100% a nuestro calendario
                        width: '100%', 

                        onAfterEventsLoad: function(events)
                        {
                                if(!events)
                                {
                                        return;
                                }
                                var list = $('#eventlist');
                                list.html('');

                                $.each(events, function(key, val)
                                {
                                        $(document.createElement('li'))
                                                .html('<a href="' + val.url + '">' + val.ficha + '</a>')
                                                .appendTo(list);
                                });
                        },
                        onAfterViewLoad: function(view)
                        {
                                $('.page-header h2').text(this.getTitle());
                                $('.btn-group button').removeClass('active');
                                $('button[data-calendar-view="' + view + '"]').addClass('active');
                        },
                        classes: {
                                months: {
                                        general: 'label'
                                }
                        }
                };


                // id del div donde se mostrara el calendario
                var calendar = $('#calendar').calendar(options); 

                $('.btn-group button[data-calendar-nav]').each(function()
                {
                        var $this = $(this);
                        $this.click(function()
                        {
                                calendar.navigate($this.data('calendar-nav'));
                        });
                });

                $('.btn-group button[data-calendar-view]').each(function()
                {
                        var $this = $(this);
                        $this.click(function()
                        {
                                calendar.view($this.data('calendar-view'));
                        });
                });

                $('#first_day').change(function()
                {
                        var value = $(this).val();
                        value = value.length ? parseInt(value) : null;
                        calendar.setOptions({first_day: value});
                        calendar.view();
                });
        }(jQuery));
    </script>

<div class="modal fade" id="add_evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Agregar Formaciòn</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
                    <label for="from">Inicio</label>
                    <div class='input-group date' id='from'>
                        <input type='text' id="from" name="from" class="form-control" readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>

                    <br>

                    <label for="to">Final</label>
                    <div class='input-group date' id='to'>
                        <input type='text' name="to" id="to" class="form-control" readonly />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>

                    <br>

                    <label for="tipo">Centro</label>
                    <select class="form-control" name="centro" id="tipo" onchange="habilitar(this.value);">
                        <option value="">Seleccione...</option>
                        <option value="Industria">Industria</option>
                        <option value="Automatizacion">Automatizacion</option>
                    </select>

                    <br>
                    <?php 

                    $con= mysqli_connect("localhost","root","","programacion_trimestral");
                    $qry5=mysqli_query($con, "SELECT * FROM fichas");
                    $qry4=mysqli_query($con, "SELECT * FROM instructores WHERE centro='Automatizacion' ");
                    $qry3=mysqli_query($con, "SELECT * FROM ambientes WHERE centro='automatizacion' ");
                    $qry2=mysqli_query($con, "SELECT * FROM instructores WHERE centro='Industria' ");
                    $qry= mysqli_query($con,"SELECT * FROM ambientes WHERE centro='industria'");
                    $contador=0;
                 

                     ?>

                    <label for="title">Ambiente</label>
                    <select class="form-control" name="ambientei" id="d1" disabled="true">
                    <option value="">Seleccione...</option>


                    <?php while($row = mysqli_fetch_array($qry)) { ?>
                       
                    <option value="<?= $row['nombre'] ?>"><?= $row['nombre'] ?></option>         
                    <?php } ?>
                    <option value=""></option>



                    </select>

                    <label for="">Instructor</label>
                    <select class="form-control" name="instructori" id="d2" disabled="true">
                    <option value="">Seleccione...</option>

                        <?php while($row = mysqli_fetch_array($qry2)) { ?>  

                    <option value="<?= $row['nombres'] ?>"><?= $row['nombres'] ?></option>            
                    <?php }?>
                    <option value=""></option>
                    </select>

                    <br>


                     <label for="title">Ambiente</label>
                    <select class="form-control" name="ambientea" id="d3" disabled="true">
                    <option value="">Seleccione...</option>


                    <?php while($row3 = mysqli_fetch_array($qry3)) { ?>
                       
                    <option value="<?= $row3['nombre'] ?>"><?= $row3['nombre'] ?></option>          
                    <?php } ?>
                    <option value=""></option>



                    </select>

                    <label for="">Instructor</label>
                    <select class="form-control" name="instructora" id="d4" disabled="true">
                    <option value="">Seleccione...</option>
                    

                        <?php while($row4 = mysqli_fetch_array($qry4)) { ?>  

                    <option value="<?= $row4['nombres'] ?>"><?= $row4['nombres'] ?></option>          
                    <?php } ?>
                    <option value=""></option>
                    </select>

                    <br>

                     <label for="">Area</label>
                     <select  name="area" class="form-control">
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
                    <br>

                    <label for="title">Ficha</label>
                    <select class="form-control" name="ficha" id="">

                    <?php while($row5 = mysqli_fetch_array($qry5)) { ?>
                       
                    <option value="<?= $row5['ficha'] ?>"><?= $row5['ficha'] ?></option>         
                    <?php } ?>
                    <option value=""></option>
                    </select>

                    <br>

                    <label>Especialidad</label>
                    <select name="especialidad" class="form-control" id="espe">
                        <option>Seleccione una opcion...</option>
                        <option value="Eectricidad">Electricidad</option>
                        <option value="Informatica">Informatica</option>
                        <option value="Salud Ocupacional">Salud Ocupacional</option>
                        <option value="Mecanica">Mecanica</option>
                        <option value="Automotriz">Automotriz</option>
                        <option value="Construccion">Construccion</option>
                        <option value="Confeccion">Confeccion</option>
                        <option value="Ambiental">Ambiental</option>
                    </select>
                    
                    <br>

                    <label for="">Tipo de formacion</label>
                    <select name="class" class="form-control" id="tipo">
                        <option value="event-info">Diurna</option>
                        <option value="event-success">Mixta</option>
                        <option value="event-important">Nocturna</option>
                        <option value="event-warning">Nocturna-Dual</option>
                        <option value="event-special">Dual</option>
                    </select>
                    
                    <br>

                    <label for="title">Titulo</label>
                     <input type="text" class="form-control" name="title" id="title">

    <script type="text/javascript">
        $(function () {
            $('#from').datetimepicker({
                language: 'es',
                minDate: new Date()
            });
            $('#to').datetimepicker({
                language: 'es',
                minDate: new Date()
            });

        });
    </script>
    <script>
    function habilitar(valor){
        if (valor == 'Industria') {
            document.getElementById('d1').disabled = false;
            document.getElementById('d2').disabled = false;
            document.getElementById('d3').disabled = true;
            document.getElementById('d4').disabled = true;

        }else{
            document.getElementById('d1').disabled = true;
            document.getElementById('d2').disabled = true;
            document.getElementById('d3').disabled = false;
            document.getElementById('d4').disabled = false;
        }
    }
    </script>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Agregar</button>
        </form>
    </div>
  </div>
</div>
</div>
</body>
</html>