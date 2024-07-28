<?php

session_start();
if (!isset($_SESSION['RUT'])) {
    header('Location: loginProfesor.php');
    exit();
}
require 'conectar.php';

$filtro=$_POST['filtro'];
$valor=$_POST['valor'];
$rut=$_SESSION['RUT'];

$query="SELECT * from vista_evaluacion WHERE $filtro = '$valor' AND profesor_rut='$rut'";
$consulta=pg_query($conexion,$query);

if($consulta){
    $_SESSION['consulta'] = pg_fetch_all($consulta);
    header('location: interfaz_resultadobusqueda.php');
    
}else{
    echo "Los datos no fueron ingresados correctamente";
}

?>