<?php
session_start();
require 'conectar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rut = $_POST['RUT'];
    $password = $_POST['password'];

    $query = "SELECT * FROM estudiante WHERE estudiante_rut = '$rut' AND persona_contrasena = '$password' and persona_estado = 'habilitado'";
    $result = pg_query($conexion, $query);

    if (pg_num_rows($result) == 1) {
        $_SESSION['RUT'] = $rut;
        header('Location: menuEstudiante/menu_estudiante.php');
        exit();
    } else {
        echo "Credenciales inválidas. Por favor, intente nuevamente.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
