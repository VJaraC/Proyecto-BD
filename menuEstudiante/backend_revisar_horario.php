<?php
require 'conectar.php';
session_start(); 

if (!isset($_SESSION['RUT'])) {
    header('Location: loginEstudiante.php');
    exit();
}

$rut = $_SESSION['RUT']; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['curso']) && !empty($_POST['curso'])) {
        $curso = $_POST['curso'];

        $query = "SELECT bloque_horario_dia, bloque_horario_hora_inicio, bloque_horario_hora_termino, asignatura_titulo
                  FROM vista_horario 
                  WHERE curso_codigo = '$curso'
                  ";
                  

        $consulta = pg_query($conexion, $query);

        if ($consulta) {
            $resultados = pg_fetch_all($consulta);
            $_SESSION['resultados_horario'] = $resultados; 
            header('Location: interfaz_horario.php');
            exit();
        } else {
            echo "Error al realizar la consulta.";
        }
    } else {
        echo "No se seleccionó ningún curso.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
