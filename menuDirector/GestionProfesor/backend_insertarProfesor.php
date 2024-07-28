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
$pedagogia=$_POST['pedagogia'];
$tipo_de_contrato=$_POST['tipo_de_contrato'];
$fecha_contratacion=$_POST['fecha_contratacion'];

$query="INSERT INTO profesor values('$rut','$correo','$nombres','$apellidos',
'$numero','$comuna','$calle','$telefono','$password','$nacionalidad','$genero','$fecha_nacimiento','$estado','$pedagogia',
'$tipo_de_contrato','$fecha_contratacion')";
$consulta=pg_query($conexion,$query);

if($consulta){ 
    echo "<script>
            alert('Profesor ingresado con éxito!.');
            window.location.href = './../menuGestionDirector.php';
            </script>";

}else{
    echo "<script>
            alert('Error al ingresar Profesor.');
            window.location.href = './../menuGestionDirector.php';
            </script>";
}

?>