<?php
require 'conectar.php';
session_start();
$codigo=$_POST['apoderado_rut'];


$query="UPDATE apoderado SET persona_estado= 'deshabilitado' WHERE apoderado_rut= '$codigo'";
$consulta=pg_query($conexion,$query);

if($consulta){
    echo "<script>
        alert('Apoderado deshabilitado con éxito!.');
        window.location.href = './../menuGestionInspector.php';
        </script>";
}else{
    $error = pg_last_error($conexion);
        echo "<script>
                alert('El Apoderado no pudo ser ingresado!. Error: $error');
                window.location.href = 'menuGestionInspector.php';
             </script>";
}
?>