<?php
require 'conectar.php';
session_start();
$filtro=$_POST['filtro'];
$valor=$_POST['valor'];

$query="SELECT * from vista_evaluacion WHERE $filtro = '$valor'";
$consulta=pg_query($conexion,$query);

if($consulta){
    $_SESSION['consulta'] = pg_fetch_all($consulta);
    header('location: interfaz_resultadobusqueda.php');
    
}else{
    echo "Los datos no fueron ingresados correctamente";
}

?>