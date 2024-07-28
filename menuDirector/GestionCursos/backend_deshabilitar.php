<?php
require 'conectar.php';
session_start();
$codigo=$_POST['codigo_curso'];


$query="UPDATE curso SET curso_estado= 'deshabilitado' WHERE curso_codigo= '$codigo'";
$consulta=pg_query($conexion,$query);

if($consulta){
    echo "<script>
        alert('Curso deshabilitado con éxito!.');
        window.location.href = './../menuGestionDirector.php';
        </script>";
}else{
    $error = pg_last_error($conexion);
        echo "<script>
                alert('El Curso no pudo ser deshabilitado!. Error: $error');
                window.location.href = './../menuGestionDirector.php';
             </script>";
}
?>