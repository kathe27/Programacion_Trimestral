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

// Incluimos nuestro archivo config
include 'config.php'; 

// Sentencia sql para traer los eventos desde la base de datos

$sql="SELECT * FROM eventos where ambientei='SISTEMAS 1' ";
$sql="SELECT * FROM eventos where ambientei='SISTEMAS 2' "; 
$sql="SELECT * FROM eventos where ambientei='SISTEMAS 3' "; 
$sql="SELECT * FROM eventos where ambientei='CAD' "; 
$sql="SELECT * FROM eventos where ambientei='AUDITORIO' "; 
$sql="SELECT * FROM eventos where ambientei='   
AUTOMOTRIZ' "; 
$sql="SELECT * FROM eventos where ambientei='CONFECCION' "; 
$sql="SELECT * FROM eventos where ambientei='DIBUJO' "; 
$sql="SELECT * FROM eventos where ambientei='   
DIESEL' "; 
$sql="SELECT * FROM eventos where ambientei='ELECTRICIDAD 1' "; 
$sql="SELECT * FROM eventos where ambientei='ELECTRICIDAD 2' "; 
$sql="SELECT * FROM eventos where ambientei='ELECTRICIDAD 3' "; 
$sql="SELECT * FROM eventos where ambientei='ELECTRICIDAD 4' "; 
$sql="SELECT * FROM eventos where ambientei='MANUFACTURA MADERAS' "; 
$sql="SELECT * FROM eventos where ambientei='MANTENIMIENTO' "; 
$sql="SELECT * FROM eventos where ambientei='MECANIZADO' "; 
$sql="SELECT * FROM eventos where ambientei='METALOGRAFIA' "; 
$sql="SELECT * FROM eventos where ambientei='SALUD OCUPACIONAL' "; 
$sql="SELECT * FROM eventos where ambientei='SOLDADURA' "; 
$sql="SELECT * FROM eventos where ambientei='REDES PARA GAS' "; 
$sql="SELECT * FROM eventos where ambientei='REFRIGERACION (AJUSTE)' "; 
$sql="SELECT * FROM eventos where ambientei='MOTOS' "; 
$sql="SELECT * FROM eventos where ambientea='INSTRUMENTACION Y CONTROL
' "; 
$sql="SELECT * FROM eventos where ambientea='NEUMATICA' "; 
$sql="SELECT * FROM eventos where ambientea='SERVOSISTEMAS' "; 




// Verificamos si existe un dato
if ($conexion->query($sql)->num_rows)
{ 

    // creamos un array
    $datos = array(); 

    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0; 

    // Ejecutamos nuestra sentencia sql
    $e = $conexion->query($sql); 

    while($row=$e->fetch_array()) // realizamos un ciclo while para traer los eventos encontrados en la base de dato
    {
        // Alimentamos el array con los datos de los eventos
        $datos[$i] = $row; 
        $i++;
    }

    // Transformamos los datos encontrado en la BD al formato JSON
        echo json_encode(
                array(
                    "success" => 1,
                    "result" => $datos
                )
            );

    }
    else
    {
        // Si no existen eventos mostramos este mensaje.
        echo "No hay datos"; 
    }


?>
