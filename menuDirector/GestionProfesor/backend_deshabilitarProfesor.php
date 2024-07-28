<?php
require 'conectar.php';
session_start();
$rut=$_POST['rut'];


$query="UPDATE profesor SET persona_estado= 'deshabilitado' WHERE profesor_rut= '$rut'";
$consulta=pg_query($conexion,$query);

if($consulta){
    echo "<script>
        alert('Profesor deshabilitado con éxito!.');
        window.location.href = './../menuGestionDirector.php';
        </script>";
}else{
    echo "<script>
        alert('Profesor deshabilitado con éxito!.');
        window.location.href = './../menuGestionDirector.php';
        </script>";
}
?>