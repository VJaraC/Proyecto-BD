<?php
require 'conectar.php';
session_start();
$rut=$_POST['rut'];


$query="UPDATE estudiante SET persona_estado= 'deshabilitado' WHERE estudiante_rut= '$rut'";
$consulta=pg_query($conexion,$query);

if($consulta){
    echo "<script>
        alert('Estudiante deshabilitado con éxito!.');
        window.location.href = './../menuGestionDirector.php';
        </script>";
}else{
    echo "<script>
        alert('Estudiante deshabilitado con éxito!.');
        window.location.href = './../menuGestionDirector.php';
        </script>";
}
?>