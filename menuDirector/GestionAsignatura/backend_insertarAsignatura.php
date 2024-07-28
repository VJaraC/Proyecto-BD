<?php
require 'conectar.php';
session_start();
$horas_semanales=$_POST['horas_semanales'];
$asignatura_codigo=$_POST['codigo'];
$profesor_rut=$_POST['profesor_rut'];
$asignatura_descripcion=$_POST['asignatura_descripcion'];
$asignatura_titulo=$_POST['asignatura_titulo'];
$curso_codigo=$_POST['curso'];
$estado='habilitado'; 

$query="INSERT INTO asignatura values('$horas_semanales','$asignatura_codigo','$profesor_rut','$curso_codigo','$asignatura_descripcion','$asignatura_titulo','$estado')";
$consulta=pg_query($conexion,$query);

if($consulta){ 
    echo "<script>
            alert('Se ha ingresado una asignatura correctamente!');
            window.location.href = './../menuGestionDirector.php';
            </script>";

}else{
    echo "Los datos no fueron ingresados correctamente";
}

?>