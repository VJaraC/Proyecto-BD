<?php
session_start();

if (!isset($_SESSION['RUT'])) {
    header('Location: loginEstudiante.php');
    exit();
}

$resultados = isset($_SESSION['resultados_horario']) ? $_SESSION['resultados_horario'] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario del Curso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        .header {
            background-color: #007bff;
            color: white;
        }
        .table-header {
            background-color: #dc3545; 
            color: white;
        }
        .table-row:nth-child(even) {
            background-color: #f8f9fa; 
        }
        .table-row:nth-child(odd) {
            background-color: #ffffff; 
        }
        .table-row:hover {
            background-color: #007bff; 
            color: white;
        }
    </style>
</head>
<body>
<div class="container mx-auto p-6">
    <header class="header text-center p-4 mb-6">
        <h1 class="text-3xl font-bold">Horario del Curso</h1>
    </header>
    <?php if (!empty($resultados)): ?>
        <table class="table-auto w-full border border-gray-300 rounded-lg overflow-hidden mb-6">
            <thead class="table-header">
                <tr>
                    <th class="px-6 py-3">Día</th>
                    <th class="px-6 py-3">Hora de Inicio</th>
                    <th class="px-6 py-3">Hora de Término</th>
                    <th class="px-6 py-3">Asignatura</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultados as $fila): ?>
                    <tr class="table-row">
                        <td class="border px-6 py-3"><?php echo htmlspecialchars($fila['bloque_horario_dia']); ?></td>
                        <td class="border px-6 py-3"><?php echo htmlspecialchars($fila['bloque_horario_hora_inicio']); ?></td>
                        <td class="border px-6 py-3"><?php echo htmlspecialchars($fila['bloque_horario_hora_termino']); ?></td>
                        <td class="border px-6 py-3"><?php echo htmlspecialchars($fila['asignatura_titulo']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="text-center">
            <a href="menu_estudiante.php" class="inline-block px-6 py-3 bg-gray-800 text-white rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Regresar</a>
        </div>
    <?php else: ?>
        <p class="text-center text-gray-600 mt-4">No se encontraron horarios para el curso seleccionado.</p>
    <?php endif; ?>
</div>
</body>
</html>
