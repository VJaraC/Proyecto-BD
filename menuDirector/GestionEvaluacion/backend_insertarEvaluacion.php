<?php
require 'conectar.php';
session_start();


$evaluacion_codigo = $_POST['evaluacion_codigo'];
$puntaje_total = $_POST['puntaje_total'];
$puntaje_obtenido = $_POST['puntaje_obtenido'];
$escala = $_POST['escala'];
$asignatura_codigo = $_POST['asignatura_codigo'];
$estudiante_rut = $_POST['estudiante_rut'];
$fecha = $_POST['fecha'];

// esto es para que se busque el rut de un profesor por el código de la asignatura.
$query1 = "SELECT profesor_rut FROM asignatura WHERE asignatura_codigo = '$asignatura_codigo' AND asignatura_estado = 'habilitado'";
$consulta1 = pg_query($conexion, $query1);
$row = pg_fetch_assoc($consulta1);
$profesor_rut = $row['profesor_rut'];

// aquí se introduce los valores obtenidos por el formulario, y el profesor_rut obtenido por la consulta anterior.
$query = "INSERT INTO evaluacion VALUES ('0', '$escala', '$fecha', '$puntaje_obtenido', '$puntaje_total', 
'$evaluacion_codigo', '$asignatura_codigo', '$profesor_rut', '$estudiante_rut')";
$consulta2 = pg_query($conexion, $query);

if ($consulta2) {
    session_destroy();
    echo "<script>
    alert('Evaluación registrada con éxito.');
    window.location.href = './../menuGestionDirector.php';
    </script>";
}else{
    echo "<script>
    alert('Error al registrar la evaluación: " . pg_last_error($conexion) . "');
    window.location.href = './../menuGestionDirector.php';
    </script>";
}
?>