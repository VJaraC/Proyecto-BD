<?php
session_start(); 

require 'conectar.php'; 

if (!isset($_SESSION['RUT'])) {
    header('Location: loginEstudiante.php');
    exit();
}

$rut = $_SESSION['RUT'];


$result = pg_query_params($conexion, 'SELECT * FROM obtener_notas_estudiante($1)', array($rut));

if ($result) {
    
    $_SESSION['resultados_notas'] = pg_fetch_all($result);
    pg_close($conexion);
    header('Location: interfaz_reporte_notas.php'); 
    exit();
} else {
    echo "Error al obtener las notas: " . pg_last_error($conexion);
}
?>
