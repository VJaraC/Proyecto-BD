<?php
require 'conectar.php';
session_start();
$caracter=$_POST['caracter'];
$motivo=$_POST['motivo'];
$fecha=$_POST['fecha'];
$ID_anotacion=$_POST['ID_anotacion'];
$profesor_rut=$_POST['profesor_rut'];
$estudiante_rut=$_POST['estudiante_rut'];

$query="INSERT INTO anotacion values('$caracter','$motivo','$fecha','$ID_anotacion','$profesor_rut','$estudiante_rut')";
$consulta=pg_query($conexion,$query);

if($consulta){ 
    echo "<script>
            alert('Anotación ingresada con éxito!.');
            window.location.href = './../menuGestionDirector.php';
        </script>";

}else{
    echo "<script>
            alert('Anotación ingresada con éxito!.');
            window.location.href = './../menuGestionDirector.php';
        </script>";
}

?>