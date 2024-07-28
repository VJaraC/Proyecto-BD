<?php
require 'conectar.php';
session_start();

if (isset($_POST['nuevo_valor']) && isset($_POST['atributo']) && isset($_SESSION['evaluacion_codigo'])) {
    $nuevo_valor = $_POST['nuevo_valor'];
    $atributo = $_POST['atributo'];
    $evaluacion_codigo = $_SESSION['evaluacion_codigo'];

    $nuevo_valor = pg_escape_string($conexion, $nuevo_valor);
    $atributo = pg_escape_string($conexion, $atributo);
    $evaluacion_codigo = pg_escape_string($conexion, $evaluacion_codigo);

   
    $query = "UPDATE evaluacion SET $atributo = '$nuevo_valor' WHERE evaluacion_codigo = '$evaluacion_codigo'";
    $consulta = pg_query($conexion, $query);


    if ($consulta) {
        echo "<script>
            alert('Evaluación modificada con éxito!');
            window.location.href = './../menuGestionDirector.php';
            </script>";
    } else {
        echo "<script>
            alert('Error al modificar la evaluación.');
            window.location.href = './../menuGestionCursos.php';
            </script>";
    }
} else {
    die("Datos incompletos o sesión no iniciada.");
}
?>
