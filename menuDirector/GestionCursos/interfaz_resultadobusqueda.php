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
    <!-- Incluye Tailwind CSS desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg border border-gray-200">
        <h1 class="text-3xl font-bold mb-5 text-blue-600">Datos de Curso</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-blue-500">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Codigo curso</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Profesor Jefe</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Nivel</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Paralelo</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">Cantidad de Alumnos</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Acciones</th> <!-- Nueva columna para acciones -->
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php
                    foreach ($consulta as $row) {
                        echo "<tr class='hover:bg-gray-100'>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['curso_codigo']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['persona_datos_nombres']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['curso_nivel']) . "</td>";
                        echo "<td class='px-6 py-4 text-center whitespace-nowrap'>" . htmlspecialchars($row['curso_paralelo']) . "</td>";
                        echo "<td class='px-6 py-4 text-center whitespace-nowrap'>" . htmlspecialchars($row['curso_cantidad_de_alumnos']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap flex space-x-2'>"; // Añadido espacio entre botones
                        echo "<a href='interfaz_actualizar.php?codigo_curso=" . htmlspecialchars($row['curso_codigo']) . "' class='px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600'>Actualizar</a>";
                        echo "<form action='backend_deshabilitar.php' method='POST' style='display:inline;'>";
                        echo "<input type='hidden' name='codigo_curso' value='" . htmlspecialchars($row['curso_codigo']) . "'>";
                        echo "<button type='submit' class='inline-block px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600'>Deshabilitar</button>";
                        echo "</form>";
                        echo "<form action='ver_anotaciones.php' method='POST' style='display:inline;'>";
                        echo "<input type='hidden' name='codigo_curso' value='" . htmlspecialchars($row['curso_codigo']) . "'>";
                        echo "<button type='submit' class='inline-block px-4 py-2 text-white bg-yellow-500 rounded hover:bg-yellow-600'>Ver Anotaciones</button>";
                        echo "</form>";
                        echo "<form action='ver_notas_curso.php' method='POST' style='display:inline;'>";
                        echo "<input type='hidden' name='codigo_curso' value='" . htmlspecialchars($row['curso_codigo']) . "'>";
                        echo "<button type='submit' class='inline-block px-4 py-2 text-white bg-purple-500 rounded hover:bg-purple-600'>Ver Notas</button>";
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
