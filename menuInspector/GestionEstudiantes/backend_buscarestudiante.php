<?php
require 'conectar.php';
session_start();
$filtro=$_POST['filtro'];
$valor=$_POST['valor'];

$query="SELECT * from estudiante WHERE $filtro ILIKE '%$valor%' and persona_estado='habilitado' ";
$consulta=pg_query($conexion,$query);

if($consulta){
    $_SESSION['consulta'] = pg_fetch_all($consulta);
    header('location: interfaz_resultadobusqueda.php');
    
}else{
    $error = pg_last_error($conexion);
        echo "<script>
                alert('El estudiante no pudo ser ingresado!. Error: $error');
                window.location.href = 'menuGestionInspector.php';
             </script>";
}

?>