<?php
session_start();
require 'conectar.php';

if (!isset($_SESSION['RUT'])) {
    header('Location: loginApoderado.php');
    exit();
}

if (isset($_POST['estudiante_rut'])) {
    $rut_estudiante = $_POST['estudiante_rut'];

    
    $_SESSION['RUT_ESTUDIANTE'] = $rut_estudiante;

    
    header('Location: backend_reporte_notas.php');
    exit();
} else {
    echo "No se seleccionó ningún estudiante.";
}
?>
