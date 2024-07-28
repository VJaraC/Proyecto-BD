<?php
require 'conectar.php';
session_start();

if (isset($_POST['nuevo_valor']) && isset($_POST['atributo']) && isset($_SESSION['profesor_rut'])) {
    $nuevo_valor = $_POST['nuevo_valor'];
    $atributo = $_POST['atributo'];
    $profesor_rut = $_SESSION['profesor_rut'];

   
    $nuevo_valor = pg_escape_string($nuevo_valor);
    $atributo = pg_escape_string($atributo);
    $profesor_rut = pg_escape_string($profesor_rut);

 
    $query = "UPDATE profesor SET $atributo = '$nuevo_valor' WHERE profesor_rut = '$profesor_rut'";
    $consulta = pg_query($conexion, $query);

    if ($consulta) {
        echo "<script>
            alert('Profesor modificado con éxito!');
            window.location.href = './../menuGestionDirector.php';
            </script>";
    } else {
        echo "<script>
            alert('Error al modificar el Profesor.');
            window.location.href = './../menuGestionDirector.php';
            </script>";
    }
} else {
    die("Datos incompletos o sesión no iniciada.");
}
?>
