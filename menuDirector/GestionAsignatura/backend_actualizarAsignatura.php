<?php
require 'conectar.php';
session_start();

if (isset($_POST['nuevo_valor']) && isset($_POST['atributo']) && isset($_SESSION['asignatura_codigo'])) {
    $nuevo_valor = $_POST['nuevo_valor'];
    $atributo = $_POST['atributo'];
    $asignatura_codigo = $_SESSION['asignatura_codigo'];

    $nuevo_valor = pg_escape_string($conexion, $nuevo_valor);
    $atributo = pg_escape_string($conexion, $atributo);
    $asignatura_codigo = pg_escape_string($conexion, $asignatura_codigo);

   
    $query = "UPDATE asignatura SET $atributo = '$nuevo_valor' WHERE asignatura_codigo = '$asignatura_codigo'";
    $consulta = pg_query($conexion, $query);


    if ($consulta) {
        echo "<script>
            alert('Asignatura modificada con éxito!');
            window.location.href = './../menuGestionDirector.php';
            </script>";
    } else {
        echo "<script>
            alert('Error al modificar la asignatura.');
            window.location.href = './../menuGestionCursos.php';
            </script>";
    }
} else {
    die("Datos incompletos o sesión no iniciada.");
}
?>
