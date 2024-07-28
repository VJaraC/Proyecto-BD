<?php
session_start();

if (isset($_GET['rut'])) {
    $codigo = $_GET['rut'];
    $_SESSION['rut'] = $codigo;
} else {
    die("No se ha recibido el RUT del apoderado.");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Apoderado</title>
   
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg border border-gray-200">
        <h1 class="text-3xl font-bold mb-5 text-blue-600">Actualizar Datos del Apoderado</h1>
        <div class="overflow-x-auto">
            <form action="backend_actualizar.php" method="post">
                <input type="hidden" name="rut_apoderado_modificar" value="<?php echo htmlspecialchars($codigo); ?>">
                <div class="mb-4">
                    <label for="campo" class="block text-gray-700">Campo a Modificar</label>
                    <select id="campo" name="atributo" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">Seleccionar</option>
                        <option value="apoderado_rut">RUT</option>
                        <option value="persona_datos_nombres">Nombres</option>
                        <option value="persona_datos_apellidos">Apellidos</option>
                        <option value="persona_correo">Correo</option>
                        <option value="persona_direccion_comuna">Comuna</option>
                        <option value="persona_direccion_calle">Calle</option>
                        <option value="persona_direccion_numero">Número</option>
                        <option value="persona_nacionalidad">Nacionalidad</option>
                        <option value="persona_genero">Género</option>
                        <option value="persona_fecha_nacimiento">Fecha de nacimiento</option>
                        <option value="contacto_emergencia">Contacto de emergencia</option>
                        <option value="apoderado_ocupacion">Ocupación</option>
                        <option value="apoderado_parentesco">Parentesco</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="nuevo_valor" class="block text-gray-700">Nuevo Valor</label>
                    <input type="text" id="nuevo_valor" name="nuevo_valor" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
