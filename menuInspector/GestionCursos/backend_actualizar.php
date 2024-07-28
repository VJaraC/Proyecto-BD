<?php
require 'conectar.php';
session_start();

if (isset($_POST['nuevo_valor']) && isset($_POST['atributo']) && isset($_POST['curso_codigo_modificar'])) {
    $nuevo_valor = $_POST['nuevo_valor'];
    $atributo = $_POST['atributo'];
    $curso_codigo = $_POST['curso_codigo_modificar'];

    $nuevo_valor = pg_escape_string($nuevo_valor);
    $atributo = pg_escape_string($atributo);
    $curso_codigo = pg_escape_string($curso_codigo);

    $query = "UPDATE curso SET $atributo = '$nuevo_valor' WHERE curso_codigo = '$curso_codigo'";
    $consulta = pg_query($conexion, $query);

    if ($consulta) {
        echo "<script>
            alert('Curso modificado con éxito!');
            window.location.href = './../menuGestionInspector.php';
            </script>";
    } else {
        $error = pg_last_error($conexion);
        echo "<script>
                alert('El estudiante no pudo ser ingresado!. Error: $error');
                window.location.href = 'menuGestionInspector.php';
             </script>";
    }
} else {
    die("Datos incompletos o sesión no iniciada.");
}
?>
