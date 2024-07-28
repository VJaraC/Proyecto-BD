<?php
session_start();

if (!isset($_SESSION['RUT'])) {
    header('Location: loginEstudiante.php');
    exit();
}

$consulta = isset($_SESSION['consulta']) ? $_SESSION['consulta'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Curso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Selecciona un Curso</h1>
    <?php if (!empty($consulta)): ?>
        <form action="backend_revisar_horario.php" method="POST">
            <div class="mb-4">
                <label for="curso" class="block text-gray-700 font-bold mb-2">Selecciona un curso:</label>
                <select id="curso" name="curso" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <?php foreach ($consulta as $fila): ?>
                        <option value="<?php echo htmlspecialchars($fila['curso_codigo']); ?>">
                            <?php echo htmlspecialchars($fila['curso_nivel']) . ' ' . htmlspecialchars($fila['curso_paralelo']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ver Horario
                </button>
            </div>
        </form>
    <?php else: ?>
        <p>No se encontraron cursos.</p>
    <?php endif; ?>
</div>
</body>
</html>
