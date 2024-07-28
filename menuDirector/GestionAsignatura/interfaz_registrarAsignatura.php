<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Asignatura</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Formulario Asignatura</h2>
            <form method="POST" action="backend_insertarasignatura.php">
                <div class="mb-4">
                    <label for="asignatura_titulo" class="block text-gray-700">Titulo de Asignatura</label>
                    <input type="text" id="asignatura_titulo" name="asignatura_titulo" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="codigo" class="block text-gray-700">Código de Asignatura</label>
                    <input type="text" id="codigo" name="codigo" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="profesor_rut" class="block text-gray-700">Rut del profesor</label>
                    <input type="text" id="profesor_rut" name="profesor_rut" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="asignatura_descripcion" class="block text-gray-700">Descripción de la asignatura</label>
                    <input type="text" id="asignatura_descripcion" name="asignatura_descripcion" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="horas_semanales" class="block text-gray-700">Horas semanales</label>
                    <input type="text" id="horas_semanales" name="horas_semanales" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                            <label for="curso" class="block text-gray-700">Curso</label>
                            <select id="curso" name="curso" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <option value="" disabled selected>Seleccione un curso</option>
                                <?php 
                                include 'conectar.php';
                                $consulta2 = pg_query($conexion, "SELECT curso_codigo, curso_nivel, curso_paralelo FROM curso WHERE curso_estado='habilitado'");
                                while ($row = pg_fetch_assoc($consulta2)) {
                                    echo '<option value="' . htmlspecialchars($row['curso_codigo']) . '">' . htmlspecialchars($row['curso_nivel']) . '-' . htmlspecialchars($row['curso_paralelo']) .  ' - ' . htmlspecialchars($row['curso_codigo']) . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>
