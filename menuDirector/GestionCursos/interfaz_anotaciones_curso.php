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

function obtener_anotaciones($rut_estudiante, $conexion) {
    $query_anotaciones = '
        SELECT a.id_anotacion, a.anotacion_caracter, a.anotacion_motivo, a.anotacion_fecha, 
               p.persona_datos_nombres AS nombres_profesor, p.persona_datos_apellidos AS apellidos
        FROM anotacion a
        JOIN profesor p ON a.profesor_rut = p.profesor_rut
        WHERE a.estudiante_rut = $1
    ';
    $result_anotaciones = pg_query_params($conexion, $query_anotaciones, array($rut_estudiante));
    return pg_fetch_all($result_anotaciones);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anotaciones del Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg border border-gray-200">
        <h1 class="text-3xl font-bold mb-5 text-blue-600">Anotaciones de Estudiantes del Curso</h1>
        <h2 class="text-xl font-semibold mb-4">Código del Curso: <?php echo htmlspecialchars($codigo_curso); ?></h2>
        <?php foreach ($estudiantes as $estudiante): ?>
            <div class="mb-6">
                <h3 class="text-lg font-bold">Estudiante RUT: <?php echo htmlspecialchars($estudiante['estudiante_rut']); ?></h3>
                <h3 class="text-lg font-bold">Nombre del estudiante: <?php echo htmlspecialchars($estudiante['persona_datos_nombres']); ?></h3>
                <table class="min-w-full divide-y divide-gray-200 mt-4">
                    <thead class="bg-blue-500">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">ID de la anotación</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Caracter de la anotación</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Nombre del profesor</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Apellido del profesor</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Fecha de la anotación</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Motivo de la anotación</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php
                        $anotaciones = obtener_anotaciones($estudiante['estudiante_rut'], $conexion);
                        if ($anotaciones):
                            foreach ($anotaciones as $anotacion):
                        ?>
                            <tr class='hover:bg-gray-100'>
                                <td class='px-6 py-4 whitespace-nowrap'><?php echo htmlspecialchars($anotacion['id_anotacion']); ?></td>
                                <td class='px-6 py-4 whitespace-nowrap'><?php echo htmlspecialchars($anotacion['anotacion_caracter']); ?></td>
                                <td class='px-6 py-4 whitespace-nowrap'><?php echo htmlspecialchars($anotacion['nombres_profesor']); ?></td>
                                <td class='px-6 py-4 whitespace-nowrap'><?php echo htmlspecialchars($anotacion['apellidos']); ?></td>
                                <td class='px-6 py-4 whitespace-nowrap'><?php echo htmlspecialchars($anotacion['anotacion_fecha']); ?></td>
                                <td class='px-6 py-4 whitespace-nowrap'><?php echo htmlspecialchars($anotacion['anotacion_motivo']); ?></td>
                            </tr>
                        <?php
                            endforeach;
                        else:
                        ?>
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center">No se encontraron anotaciones para este estudiante.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        <?php endforeach; ?>

        <div class="mt-5">
            <a href='./../menuGestionDirector.php';" class="inline-block px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Regresar</a>
        </div>
    </div>
</body>
</html>
