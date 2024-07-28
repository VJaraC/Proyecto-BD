<?php
session_start();
require 'conectar.php';

if (!isset($_SESSION['RUT']) || !isset($_SESSION['RUT_ESTUDIANTE'])) {
    header('Location: loginApoderado.php');
    exit();
}

$rut_estudiante = $_SESSION['RUT_ESTUDIANTE'];


$result = pg_query_params($conexion, 'SELECT * FROM obtener_notas_estudiante($1)', array($rut_estudiante));

if ($result) {
    $_SESSION['resultados_notas'] = pg_fetch_all($result);
    pg_close($conexion);

    unset($_SESSION['RUT_ESTUDIANTE']);
    header('Location: interfaz_reporte_notas.php');
    exit();
} else {
    echo "Error al obtener las notas: " . pg_last_error($conexion);
}
?>
