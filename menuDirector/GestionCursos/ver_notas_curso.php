<?php
session_start();
require 'conectar.php'; 

if (!isset($_POST['codigo_curso'])) {
    echo "Código de curso no proporcionado.";
    exit();
}

$codigo_curso = pg_escape_string($conexion, $_POST['codigo_curso']);

$query_estudiantes = "SELECT e.estudiante_rut, e.persona_datos_nombres, e.persona_datos_apellidos
    FROM pertenece p
    JOIN estudiante e ON p.estudiante_rut = e.estudiante_rut
    WHERE p.codigo_curso = '$codigo_curso'";

$result_estudiantes = pg_query($conexion, $query_estudiantes);

if ($result_estudiantes) {
    $estudiantes = pg_fetch_all($result_estudiantes);
    $_SESSION['estudiantes_curso'] = $estudiantes;
    $_SESSION['codigo_curso'] = $codigo_curso;

    pg_close($conexion);
    header('Location: interfaz_notas_curso.php');
    exit();
} else {
    echo "Error al obtener los estudiantes: " . pg_last_error($conexion);
}
?>
