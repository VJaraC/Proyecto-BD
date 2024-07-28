<?php
require 'conectar.php';
session_start();

if (!isset($_SESSION['RUT'])) {
    header('Location: loginEstudiante.php');
    exit();
}

$rut = $_SESSION['RUT'];

$query = "SELECT * from vista_anotacion where estudiante_rut = '$rut'";

$consulta = pg_query($conexion, $query);

if ($consulta) {
    $_SESSION['consulta'] = pg_fetch_all($consulta);
    header('Location: interfaz_consultaranotaciones.php');
    exit();
} else {
    echo "Los datos no fueron ingresados correctamente";
}
?>

