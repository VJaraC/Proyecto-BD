<?php

session_start();
require 'conectar.php';

if (!isset($_SESSION['RUT'])) {
    header('Location: loginProfesor.php');
    exit();
}

$profesor_rut = $_SESSION['RUT']; 
$caracter=$_POST['caracter'];
$motivo=$_POST['motivo'];
$fecha=$_POST['fecha'];
$ID_anotacion=$_POST['ID_anotacion'];
$estudiante_rut=$_POST['estudiante_rut'];

$query="INSERT INTO anotacion values('$caracter','$motivo','$fecha','$ID_anotacion','$profesor_rut','$estudiante_rut')";
$consulta=pg_query($conexion,$query);

if($consulta){ 
    echo "<script>
            alert('Anotación ingresada con éxito!.');
            window.location.href = './../menu_profesor.php';
        </script>";

}else{
    echo "<script>
            alert('Error al ingresar la anotación.');
            window.location.href = './../menu_profesor.php';
        </script>";
}

?>