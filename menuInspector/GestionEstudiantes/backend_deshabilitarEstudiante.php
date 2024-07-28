<?php
require 'conectar.php';
session_start();
$rut=$_POST['rut'];


$query="UPDATE estudiante SET persona_estado= 'deshabilitado' WHERE estudiante_rut= '$rut'";
$consulta=pg_query($conexion,$query);

if($consulta){
    echo "<script>
        alert('Estudiante deshabilitado con éxito!.');
        window.location.href = './../menuGestionInspector.php';
        </script>";
}else{
    $error = pg_last_error($conexion);
        echo "<script>
                alert('El estudiante no pudo ser ingresado!. Error: $error');
                window.location.href = 'menuGestionInspector.php';
             </script>";
}
?>