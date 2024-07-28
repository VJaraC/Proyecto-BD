<?php
require 'conectar.php';
session_start();
$nivel=$_POST['nivel'];
$paralelo=$_POST['paralelo'];
$codigo=$_POST['codigo'];
$rut_profe_jefe=$_POST['rut_profe_jefe'];
$cantidad_alumnos='0';
$estado='habilitado'; 

$query="INSERT INTO curso values('$nivel','$paralelo','$codigo','$rut_profe_jefe','$cantidad_alumnos','$estado')";
$consulta=pg_query($conexion,$query);

if($consulta){ 
    echo "<script>
            alert('Curso registrado con éxito!');
            window.location.href = './../menuGestionDirector.php';
            </script>";

}else{
    $error = pg_last_error($conexion);
        echo "<script>
                alert('El Curso no pudo ser ingresado!. Error: $error');
                window.location.href = './../menuGestionDirector.php';
             </script>";
}

?>