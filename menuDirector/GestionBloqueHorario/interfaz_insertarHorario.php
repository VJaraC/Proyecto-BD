<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Horario</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div class="container mx-auto p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Formulario de Registro</h2>
            <form method="POST" action="backend_insertarHorario.php">
                
                <div class="mb-6">
                    <h3 class="text-xl font-semibold text-gray-800">Información Personal</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="bloque_horario_codigo" class="block text-gray-700">Código del Bloque Horario</label>
                            <input type="text" id="bloque_horario_codigo" name="bloque_horario_codigo" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="bloque_horario_dia" class="block text-gray-700">Día del Bloque Horario</label>
                            <select id="bloque_horario_dia" name="bloque_horario_dia" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <option value="" disabled selected>Seleccione un día</option>
                                <option value="Lunes">Lunes</option>
                                <option value="Martes">Martes</option>
                                <option value="Miércoles">Miércoles</option>
                                <option value="Jueves">Jueves</option>
                                <option value="Viernes">Viernes</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="bloque_horario_hora_inicio" class="block text-gray-700">Hora de Inicio</label>
                            <input type="time" id="bloque_horario_hora_inicio" name="bloque_horario_hora_inicio" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="bloque_horario_hora_termino" class="block text-gray-700">Hora de Término</label>
                            <input type="time" id="bloque_horario_hora_termino" name="bloque_horario_hora_termino" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="curso" class="block text-gray-700">Curso</label>
                            <select id="curso" name="curso" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <option value="" disabled selected>Seleccione un curso</option>
                                <?php 
                                include 'conectar.php';
                                $consulta2 = pg_query($conexion, "SELECT curso_codigo, curso_nivel FROM curso WHERE curso_estado='habilitado'");
                                while ($row = pg_fetch_assoc($consulta2)) {
                                    echo '<option value="' . htmlspecialchars($row['curso_codigo']) . '">' . htmlspecialchars($row['curso_nivel']) . ' - ' . htmlspecialchars($row['curso_codigo']) . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="asignatura_codigo" class="block text-gray-700">Asignatura</label>
                            <select id="asignatura_codigo" name="asignatura_codigo" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <option value="" disabled selected>Seleccione una asignatura</option>
                                <?php 
                                $consulta3 = pg_query($conexion, "SELECT asignatura_codigo, asignatura_titulo FROM asignatura WHERE asignatura_estado='habilitado'");
                                while ($row = pg_fetch_assoc($consulta3)) {
                                    echo '<option value="' . htmlspecialchars($row['asignatura_codigo']) . '">' . htmlspecialchars($row['asignatura_titulo']) . ' - ' . htmlspecialchars($row['asignatura_codigo']) . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
