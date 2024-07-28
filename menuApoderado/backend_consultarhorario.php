<?php
require 'conectar.php';
session_start();

if (!isset($_SESSION['RUT'])) {
    header('Location: loginApoderado.php');
    exit();
}

$rut_apoderado = $_SESSION['RUT'];

$query = "SELECT estudiante.estudiante_rut, estudiante.persona_datos_nombres, estudiante.persona_datos_apellidos, curso.curso_nivel, curso.curso_paralelo, curso.curso_codigo
          FROM estudiante
          INNER JOIN pertenece ON estudiante.estudiante_rut = pertenece.estudiante_rut
          INNER JOIN curso ON pertenece.codigo_curso = curso.curso_codigo
          WHERE estudiante.apoderado_rut = '$rut_apoderado'";

$consulta = pg_query($conexion, $query);

if ($consulta) {
    $_SESSION['consulta'] = pg_fetch_all($consulta);
    header('Location: interfaz_resultados_busqueda_horario.php');
    exit();
} else {
    echo "Error al obtener los datos.";
}
?>
