<?php
require 'conectar.php';
session_start();

if (!isset($_SESSION['RUT'])) {
    header('Location: loginApoderado.php');
    exit();
}

$rut = $_SESSION['RUT'];

$query = "SELECT estudiante_rut, persona_datos_nombres, persona_datos_apellidos 
          FROM estudiante 
          WHERE apoderado_rut = '$rut'";

$consulta = pg_query($conexion, $query);

if ($consulta) {
    $_SESSION['estudiantes'] = pg_fetch_all($consulta);
    header('Location: interfaz_seleccion_estudiante.php');
    exit();
} else {
    echo "Error al obtener la lista de estudiantes.";
}
?>

