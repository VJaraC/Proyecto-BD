<?php
require 'conectar.php';
session_start();


$rut = $_POST['rut'];
$correo = $_POST['correo'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$numero = $_POST['numero'];
$comuna = $_POST['comuna'];
$calle = $_POST['calle'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];
$nacionalidad = $_POST['nacionalidad'];
$genero = $_POST['genero'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$estado = 'habilitado'; 
$apoderado_rut = $_POST['apoderado_rut'];
$estudiante_ingreso = $_POST['estudiante_ingreso'];
$curso = $_POST['curso'];
$academico = $_POST['academico'];


$query1 = "INSERT INTO pertenece (estudiante_rut, codigo_curso, ano_academico) VALUES ('$rut', '$curso', '$academico')";
$query2 = "INSERT INTO estudiante (estudiante_rut, persona_correo, persona_datos_nombres, persona_datos_apellidos, 
persona_direccion_numero, persona_direccion_comuna, persona__direccion_calle, 
persona_telefono, persona_contrasena, persona_nacionalidad, persona_genero, persona_fecha_nacimiento, 
persona_estado, apoderado_rut, estudiante_ano_ingreso) 
VALUES ('$rut', '$correo', '$nombres', '$apellidos', '$numero', '$comuna', '$calle', '$telefono', '$password', '$nacionalidad', '$genero', '$fecha_nacimiento', '$estado', '$apoderado_rut', '$estudiante_ingreso')";


$consulta2 = pg_query($conexion, $query2);
$consulta1 = pg_query($conexion, $query1);



if ($consulta1 && $consulta2) { 
    echo "<script>
                alert('Estudiante ingresado con éxito!.');
                window.location.href = './../menuGestionInspector.php';
             </script>";
} else {

    $error = pg_last_error($conexion);
    echo "<script>
                alert('El estudiante no pudo ser ingresado!. Error: $error');
                window.location.href = './../menuGestionInspector.php';
             </script>";
}
?>
