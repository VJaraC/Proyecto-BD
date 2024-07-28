<?php
session_start(); 


if (!isset($_SESSION['resultados_notas'])) {
    echo "No se encontraron resultados.";
    exit();
}

$resultados = $_SESSION['resultados_notas'];


$promedio_general = !empty($resultados) ? $resultados[0]['promedio_general'] : null;

$rut_estudiante = isset($_SESSION['RUT']) ? htmlspecialchars($_SESSION['RUT']) : 'No disponible';


unset($_SESSION['resultados_notas']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Notas</title>
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
        .promedio-general {
            margin-bottom: 1rem;
            padding: 1rem;
            background-color: #3273dc;
            color: white;
            text-align: center;
            font-weight: bold;
        }
        .student-rut {
            margin-bottom: 1rem;
            padding: 1rem;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Reporte de Notas</h1>

    <div class="student-rut">
        RUT del Estudiante: <?php echo $rut_estudiante; ?>
    </div>

    <?php if (!empty($promedio_general)): ?>
        <div class="promedio-general">
            Promedio General: <?php echo number_format((float)$promedio_general, 2, '.', ''); ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($resultados)): ?>
        <table>
            <thead>
                <tr>
                    <th>Asignatura</th>
                    <th>Promedio por Asignatura</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultados as $fila): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($fila['asignatura_titulo']); ?></td>
                        <td><?php echo number_format((float)$fila['promedio_asignatura'], 2, '.', ''); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No se encontraron notas para el estudiante.</p>
    <?php endif; ?>
</div>
</body>
</html>
