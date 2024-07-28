<?php
session_start();

if (!isset($_SESSION['RUT'])) {
    header('Location: loginApoderado.php');
    exit();
}

$estudiantes = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Estudiante</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Selecciona un Estudiante</h1>
    <?php if (!empty($estudiantes)): ?>
        <form action="backend_consultar_anotaciones.php" method="POST">
            <div class="mb-4">
                <label for="estudiante" class="block text-gray-700 font-bold mb-2">Selecciona un estudiante:</label>
                <select id="estudiante" name="estudiante" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <?php foreach ($estudiantes as $estudiante): ?>
                        <option value="<?php echo htmlspecialchars($estudiante['estudiante_rut']); ?>">
                            <?php echo htmlspecialchars($estudiante['persona_datos_nombres']) . ' ' . htmlspecialchars($estudiante['persona_datos_apellidos']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ver Anotaciones
                </button>
            </div>
        </form>
    <?php else: ?>
        <p>No se encontraron estudiantes asociados.</p>
    <?php endif; ?>
</div>
</body>
</html>
