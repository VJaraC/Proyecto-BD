<?php
session_start();
require 'conectar.php';

if (isset($_SESSION['RUT'])) {
    header('Location: menuProfesor/menu_profesor.php');
    exit();
}
if (!isset($_SESSION['RUT'])) {
        $rut = $_POST['RUT'];
        $password = $_POST['password'];
  
$query = "SELECT * FROM profesor WHERE profesor_rut = '$rut' AND persona_contrasena = '$password' AND persona_estado = 'habilitado'";
$result = pg_query($conexion, $query);

if ($result){
    if (pg_num_rows($result) == 1) {   
        $_SESSION['RUT'] = $rut;
        header('Location: menuProfesor/menu_profesor.php');
        exit();
    }else{
            echo "Credenciales inválidas. Por favor, intente nuevamente.";
            }
    }else{
            echo "Error en la consulta: " . pg_last_error($conexion);
        }
    }else {
    echo "Método de solicitud no válido.";
}
?>
