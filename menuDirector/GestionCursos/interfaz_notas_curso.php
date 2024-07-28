<?php
session_start(); 
require 'conectar.php';

if (!isset($_SESSION['estudiantes_curso']) || !isset($_SESSION['codigo_curso'])) {
    echo "No se encontraron resultados.";
    exit();
}

$estudiantes = $_SESSION['estudiantes_curso'];
$codigo_curso = $_SESSION['codigo_curso'];


unset($_SESSION['estudiantes_curso']);
unset($_SESSION['codigo_curso']);


function obtener_notas($rut_estudiante, $conexion) {
    $query_notas = '
        SELECT a.asignatura_titulo, AVG(e.evaluacion_nota) AS promedio_asignatura
        FROM evaluacion e
        JOIN asignatura a ON e.asignatura_codigo = a.asignatura_codigo
        WHERE e.estudiante_rut = $1 AND a.asignatura_estado = \'habilitado\'
        GROUP BY a.asignatura_titulo
    ';
    $result_notas = pg_query_params($conexion, $query_notas, array($rut_estudiante));
    return pg_fetch_all($result_notas);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas por Curso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #3273dc;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Notas de Estudiantes del Curso</h1>
    <h2 class="text-xl font-semibold mb-4">Código del Curso: <?php echo htmlspecialchars($codigo_curso); ?></h2>

    <?php foreach ($estudiantes as $estudiante): ?>
        <div class="mb-6">
            <h3 class="text-lg font-bold"><?php echo htmlspecialchars($estudiante['persona_datos_nombres'] . ' ' . $estudiante['persona_datos_apellidos']); ?></h3>
            <table>
                <thead>
                    <tr>
                        <th>Asignatura</th>
                        <th>Promedio por Asignatura</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    $notas = obtener_notas($estudiante['estudiante_rut'], $conexion);
                    if ($notas):
                        foreach ($notas as $nota):
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($nota['asignatura_titulo']); ?></td>
                            <td><?php echo number_format((float)$nota['promedio_asignatura'], 2, '.', ''); ?></td>
                        </tr>
                    <?php
                        endforeach;
                    else:
                    ?>
                        <tr>
                            <td colspan="2">No se encontraron notas para este estudiante.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    <?php endforeach; ?>

    <a href='./../menuGestionDirector.php' class="inline-block px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Regresar</a>
</div>
</body>
</html>
