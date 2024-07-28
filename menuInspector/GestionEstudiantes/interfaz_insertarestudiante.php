<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div class="container mx-auto p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Formulario de Registro</h2>
            <form method="POST" action="backend_insertarestudiante.php">
                <!-- Información Personal -->
                <div class="mb-6">
                    <h3 class="text-xl font-semibold text-gray-800">Información Personal</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="rut" class="block text-gray-700">RUT</label>
                            <input type="text" id="rut" name="rut" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="correo" class="block text-gray-700">Correo</label>
                            <input type="email" id="correo" name="correo" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="nombres" class="block text-gray-700">Nombres</label>
                            <input type="text" id="nombres" name="nombres" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="apellidos" class="block text-gray-700">Apellidos</label>
                            <input type="text" id="apellidos" name="apellidos" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="telefono" class="block text-gray-700">Teléfono</label>
                            <input type="text" id="telefono" name="telefono" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700">Contraseña</label>
                            <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="nacionalidad" class="block text-gray-700">Nacionalidad</label>
                            <input type="text" id="nacionalidad" name="nacionalidad" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="academico" class="block text-gray-700">Año Académico</label>
                            <input type="text" id="academico" name="academico" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="genero" class="block text-gray-700">Género</label>
                            <select id="genero" name="genero" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <option value="" disabled selected>Seleccione una opción</option>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                                <option value="otro">Otro</option>
                            </select>
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
                            <label for="fecha_nacimiento" class="block text-gray-700">Fecha de Nacimiento</label>
                            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="apoderado_rut" class="block text-gray-700">RUT del Apoderado</label>
                            <input type="text" id="apoderado_rut" name="apoderado_rut" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="estudiante_ingreso" class="block text-gray-700">Estudiante Ingreso</label>
                            <input type="text" id="estudiante_ingreso" name="estudiante_ingreso" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                    </div>
                </div>
                <!-- Sección Dirección -->
                <div class="mb-6">
                    <h3 class="text-xl font-semibold text-gray-800">Dirección</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="mb-4">
                            <label for="calle" class="block text-gray-700">Calle</label>
                            <input type="text" id="calle" name="calle" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="numero" class="block text-gray-700">Número</label>
                            <input type="text" id="numero" name="numero" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="comuna" class="block text-gray-700">Comuna</label>
                            <input type="text" id="comuna" name="comuna" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
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
