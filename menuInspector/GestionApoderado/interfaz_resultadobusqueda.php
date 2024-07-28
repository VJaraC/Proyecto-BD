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
        <h1 class="text-3xl font-bold mb-5 text-blue-600">Datos de Estudiantes</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nombre estudiante</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nombres</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Apellidos</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Correo</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Comuna</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Calle</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Número</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nacionalidad</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Género</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Fecha de nacimiento</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Contacto emergencia</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Ocupación</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Parentesco</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php
                    foreach ($consulta as $row) {
                        echo "<tr class='hover:bg-gray-100'>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['estudiante_nombres']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['apoderado_nombres']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['apoderado_apellidos']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['persona_correo']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['persona_direccion_comuna']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['persona__direccion_calle']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['persona_direccion_numero']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['persona_nacionalidad']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['persona_genero']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['persona_fecha_nacimiento']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['contacto_emergencia']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['apoderado_ocupacion']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row['apoderado_parentesco']) . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>";
                        echo "<a href='interfaz_actualizar.php?rut=" . htmlspecialchars($row['apoderado_rut']) . "' class='inline-block px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600'>Actualizar</a> ";
                        echo "<form action='backend_deshabilitar.php' method='POST' style='display:inline;'>";
                        echo "<input type='hidden' name='apoderado_rut' value='" . htmlspecialchars($row['apoderado_rut']) . "'>";
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
            <a href="./../menuGestionInspector.php" class="inline-block px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Regresar</a>
        </div>
    </div>
</body>
</html>
