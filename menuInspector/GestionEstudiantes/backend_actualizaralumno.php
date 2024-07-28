<?php
require 'conectar.php';
session_start();

if (isset($_POST['nuevo_valor']) && isset($_POST['atributo']) && isset($_SESSION['estudiante_rut'])) {
    $nuevo_valor = $_POST['nuevo_valor'];
    $atributo = $_POST['atributo'];
    $estudiante_rut = $_SESSION['estudiante_rut'];

   
    $nuevo_valor = pg_escape_string($nuevo_valor);
    $atributo = pg_escape_string($atributo);
    $estudiante_rut = pg_escape_string($estudiante_rut);

 
    $query = "UPDATE estudiante SET $atributo = '$nuevo_valor' WHERE estudiante_rut = '$estudiante_rut'";
    $consulta = pg_query($conexion, $query);

    if ($consulta) {
        echo "<script>
            alert('Estudiante modificado con éxito!');
            window.location.href = './../menuGestionInspector.php';
            </script>";
    } else {
        $error = pg_last_error($conexion);
        echo "<script>
                alert('El estudiante no pudo ser modificado!. Error: $error');
                window.location.href = 'menuGestionInspector.php';
             </script>";
    }
} else {
    die("Datos incompletos o sesión no iniciada.");
}
?>
