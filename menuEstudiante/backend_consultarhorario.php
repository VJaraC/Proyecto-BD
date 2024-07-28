<?php
require 'conectar.php';
session_start();

if (!isset($_SESSION['RUT'])) {
    header('Location: loginEstudiante.php');
    exit();
}

$rut = $_SESSION['RUT']; 

$query = "SELECT pertenece.ano_academico, curso.curso_nivel, curso.curso_paralelo, curso.curso_codigo
          FROM pertenece
          INNER JOIN curso ON pertenece.codigo_curso = curso.curso_codigo  
          WHERE estudiante_rut = '$rut'";

$consulta = pg_query($conexion, $query);

if ($consulta) {
    $_SESSION['consulta'] = pg_fetch_all($consulta);
    header('Location: interfaz_resultados_busqueda_horario.php');
    exit();
} else {
    echo "Los datos no fueron ingresados correctamente";
}
?>
