<?php
session_start();
if (!isset($_SESSION['RUT'])) {
    header('Location: loginProfesor.php');
    exit();
}
$rut = $_SESSION['RUT']; 
?>

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
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Formulario</h2>
            <form method="POST" action="backend_insertarAnotacion.php">
                <div class="mb-4">
                    <label for="estudiante_rut" class="block text-gray-700">RUT del estudiante</label>
                    <input type="text" id="estudiante_rut" name="estudiante_rut" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="ID_anotacion" class="block text-gray-700">Identificador de la anotación</label>
                    <input type="text" id="ID_anotacion" name="ID_anotacion" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="caracter" class="block text-gray-700">Carácter de la anotación</label>
                    <select id="caracter" name="caracter" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="positivo">Positivo</option>
                        <option value="negativo">Negativo</option>
                        <option value="observacion">Observación</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="motivo" class="block text-gray-700">Motivo de la anotación</label>
                    <input type="text" id="motivo" name="motivo" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="fecha" class="block text-gray-700">Fecha</label>
                    <input type="date" id="fecha" name="fecha" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                    <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
