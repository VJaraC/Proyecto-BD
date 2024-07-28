<?php
session_start();
if (isset($_SESSION['consulta'])) {
    $consulta = $_SESSION['consulta'];
} else {
    die("No hay datos para mostrar.");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Estilizada</title>
 
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg border border-gray-200">
        <h1 class="text-3xl font-bold mb-5 text-blue-600">Asignaturas</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-blue-500">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Nombres Profesor</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Apellidos Profesor</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Titulo Asignatura</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Descripción Asignatura</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Horas semanales</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Codigo Asignatura</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php
                    foreach ($consulta as $row) {
                        echo "<tr class='hover:bg-gray-100'>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['profesor_nombres']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['profesor_apellidos']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['asignatura_titulo']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['asignatura_descripcion']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['horas_semanales']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['asignatura_codigo']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>";
                        echo "<a href='interfaz_actualizarAsignatura.php?asignatura_codigo=" . htmlspecialchars($row['asignatura_codigo']) . "' class='inline-block px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600'>Actualizar</a> ";
                        echo "<form action='backend_deshabilitarAsignatura.php' method='POST' style='display:inline;'>";
                        echo "<input type='hidden' name='asignatura_codigo' value='" . htmlspecialchars($row['asignatura_codigo']) . "'>";
                        echo "<button type='submit' class='inline-block px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600'>Deshabilitar</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <a href="./../menuGestionDirector.php" class="inline-block px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Regresar</a>
        </div>
    </div>
</body>
</html>
