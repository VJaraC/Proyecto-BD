<?php
require 'conectar.php';
session_start();
$rut=$_POST['rut'];
$correo=$_POST['correo'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$numero=$_POST['numero'];
$comuna=$_POST['comuna'];
$calle=$_POST['calle'];
$telefono=$_POST['telefono'];
$password=$_POST['password'];
$nacionalidad=$_POST['nacionalidad'];
$genero=$_POST['genero'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$estado='habilitado'; 
$contacto_emergencia=$_POST['contacto_emergencia'];
$ocupacion=$_POST['ocupacion'];
$parentesco=$_POST['parentesco'];

$query="INSERT INTO apoderado values('$rut','$correo','$nombres','$apellidos',
'$numero','$comuna','$calle','$telefono','$password','$nacionalidad','$genero','$fecha_nacimiento','$estado','$contacto_emergencia',
'$ocupacion','$parentesco')";
$consulta=pg_query($conexion,$query);

if($consulta ){ 
    echo "<script>
                alert('Apoderado ingresado con éxito!.');
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