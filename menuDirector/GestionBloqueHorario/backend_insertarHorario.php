<?php
require 'conectar.php';
session_start();


$horario_codigo = $_POST['bloque_horario_codigo'];
$horario_dia = $_POST['bloque_horario_dia'];
$horario_hora_inicio = $_POST['bloque_horario_hora_inicio'];
$horario_hora_termino = $_POST['bloque_horario_hora_termino'];
$curso_codigo = $_POST['curso'];
$asignatura_codigo=$_POST['asignatura_codigo'];

$query="INSERT INTO bloque_horario values ('$horario_dia','$horario_hora_inicio','$horario_hora_termino','$horario_codigo','$curso_codigo','$asignatura_codigo')";
$consulta=pg_query($conexion,$query);

if ($consulta) { 
    echo "<script>
                alert('Bloque Horario ingresado con éxito!.');
                window.location.href = './../menuGestionDirector.php';
             </script>";
} else {
    $error = pg_last_error($conexion);
    echo "<script>
                alert('El Bloque Horario no pudo ser ingresado!. Error: $error');
                window.location.href = 'menuGestionDirector.php';
             </script>";
}
?>
