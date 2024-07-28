<?php
require 'conectar.php';
session_start();
$filtro=$_POST['filtro'];
$valor=$_POST['valor'];

$query="SELECT * from profesor WHERE $filtro ILIKE '%$valor%' and persona_estado='habilitado' ";
$consulta=pg_query($conexion,$query);

if($consulta){
    $_SESSION['consulta'] = pg_fetch_all($consulta);
    header('location: interfaz_resultadobusqueda.php');
    
}else{
    echo "Los datos no fueron ingresados correctamente";
}

?>