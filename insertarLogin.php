<?php
require 'conectar.php';
session_start();
$rut=$_POST['RUT'];
$password=$_POST['password'];

$query="SELECT * FROM estudiante WHERE per_persona_rut='$rut' AND persona_contrasena='$password'";
$consulta=pg_query($conexion,$query);

$filas=pg_num_rows($consulta);
if($cantidad['nombre_usuario']>0){
    $_SESSION['nombre_usuario']=$rut;
    header("location: menu.php");
}else{
    echo "Datos incorrectos!";
}

?>