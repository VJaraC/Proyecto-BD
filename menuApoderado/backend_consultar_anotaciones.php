<?php
require 'conectar.php';
session_start();

if (!isset($_SESSION['RUT'])) {
    header('Location: loginApoderado.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['estudiante']) && !empty($_POST['estudiante'])) {
        $estudiante_rut = $_POST['estudiante'];

        $query = "SELECT * FROM vista_anotacion WHERE estudiante_rut = '$estudiante_rut'";
        $consulta = pg_query($conexion, $query);

        if ($consulta) {
            $_SESSION['consulta'] = pg_fetch_all($consulta);
            header('Location: interfaz_consultaranotaciones.php');
            exit();
        } else {
            echo "Error al realizar la consulta.";
        }
    } else {
        echo "No se seleccionó ningún estudiante.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
