<?php
require 'conectar.php';
session_start();
$rut=$_POST['RUT'];
$password=$_POST['password'];

$query="SELECT * FROM direccion WHERE persona_rut='$rut' AND persona_contrasena='$password' AND persona_estado = 'habilitado'";
$consulta=pg_query($conexion,$query);

$filas=pg_fetch_array($consulta);

if($filas['direccion_tipo_usuario']=='director'){ //Gestion Director
    header("location: menuDirector/menuGestionDirector.php");
}else if($filas['direccion_tipo_usuario']=='inspector'){ // Gestion Inspector
    header("location: menuInspector/menuGestionInspector.php");
}else{
    echo "<script>
            alert('Credenciales de ingreso incorrecta!');
            window.location.href = 'loginDireccion.php';
            </script>";
}

?>