<?php
require 'conectar.php';
session_start();
$asignatura_codigo=$_POST['asignatura_codigo'];


$query="UPDATE asignatura SET asignatura_estado= 'deshabilitado' WHERE asignatura_codigo = '$asignatura_codigo'";
$consulta=pg_query($conexion,$query);

if($consulta){
    echo "<script>
        alert('Asignatura deshabilitada con éxito!.');
        window.location.href = './../menuGestionDirector.php';
        </script>";
}else{
    echo "<script>
        alert('Asignatura deshabilitada con éxito!.');
        window.location.href = './../menuGestionDirector.php';
        </script>";
}
?>