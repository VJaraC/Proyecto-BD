<?php
require 'conectar.php';
session_start();

if (isset($_POST['nuevo_valor']) && isset($_POST['atributo']) && isset($_POST['rut_apoderado_modificar'])) {
    $nuevo_valor = $_POST['nuevo_valor'];
    $atributo = $_POST['atributo'];
    $rut = $_POST['rut_apoderado_modificar'];

 
    $nuevo_valor = pg_escape_string($nuevo_valor);
    $atributo = pg_escape_string($atributo);
    $rut = pg_escape_string($rut);

 
    $query = "UPDATE apoderado SET $atributo = '$nuevo_valor' WHERE apoderado_rut = '$rut'";
    $consulta = pg_query($conexion, $query);

    if ($consulta) {
        echo "<script>
            alert('Datos modificados con éxito!');
            window.location.href = './../menuGestionDirector.php';
            </script>";
    } else {
        echo "<script>
            alert('Error al modificar los datos.');
            window.location.href = './../menuGestionDirector.php';
            </script>";
    }
} else {
    die("Datos incompletos o sesión no iniciada.");
}
?>
