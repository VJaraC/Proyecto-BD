<?php
session_start();
if (!isset($_SESSION['RUT'])) {
    header('Location: loginApoderado.php');
    exit();
}

$rut = $_SESSION['RUT'];
require 'conectar.php';

$query = "SELECT estudiante_rut, persona_datos_nombres, persona_datos_apellidos 
          FROM estudiante 
          WHERE apoderado_rut = '$rut'";

$result = pg_query($conexion, $query);

$estudiantes = [];
if ($result) {
    while ($row = pg_fetch_assoc($result)) {
        $estudiantes[] = $row;
    }
} else {
    echo "Error al obtener los estudiantes.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg border border-gray-200">
        <h1 class="text-3xl font-bold mb-5 text-blue-600">Seleccionar Estudiante</h1>
        <form method="post" action="backend_seleccion_estudiante_notas.php">
            <div class="mb-4">
                <label for="estudiante" class="block text-sm font-medium text-gray-700">Seleccionar Estudiante:</label>
                <select id="estudiante" name="estudiante_rut" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    <?php foreach ($estudiantes as $estudiante): ?>
                        <option value="<?= $estudiante['estudiante_rut'] ?>">
                            <?= htmlspecialchars($estudiante['persona_datos_nombres']) . ' ' . htmlspecialchars($estudiante['persona_datos_apellidos']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="inline-block px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Ver Informe de Notas</button>
        </form>
        <div class="mt-5">
            <a href="./menu_apoderado.php" class="inline-block px-6 py-2 text-white bg-gray-500 rounded hover:bg-gray-600">Regresar</a>
        </div>
    </div>
</body>
</html>
