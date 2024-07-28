<?php
session_start();


if (!isset($_SESSION['RUT'])) {
    header('Location: loginProfesor.php');
    exit();
}
$rut = $_SESSION['RUT']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú del Profesor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="logo_croacia.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="bg-gray-100">

    
    <nav class="bg-red-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white text-2xl font-bold">Menú del profesor</div>
            <div>
                <a href="./../loginProfesor.php" class="text-white hover:text-gray-200 mx-2">Cerrar Sesión</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-10">

        
        <div class="mb-10">
            <h2 class="text-2xl font-bold mb-4 text-gray-700">Gestión de Anotaciones</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4 text-blue-600">Registrar una anotación</h3>
                    <p class="text-gray-600 mb-6">Añade una anotación a un estudiante</p>
                    <a href="GestionAnotacion/interfaz_registrarAnotacion.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Registrar Anotación</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                  <h3 class="text-xl font-bold mb-4 text-blue-600">Gestionar Anotación</h3>
                  <p class="text-gray-600 mb-6">Busca una anotación de un estudiante</p>
                  <a href="GestionAnotacion/interfaz_buscar.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Gestionar Anotación</a>
                </div>
            </div>
        </div>

        <div class="mb-10">
            <h2 class="text-2xl font-bold mb-4 text-gray-700">Gestión de Evaluación</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

              <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4 text-blue-600">Registrar datos de una evaluación</h3>
                <p class="text-gray-600 mb-6">Registrar una evaluación de un estudiante</p>
                <a href="GestionEvaluacion/interfaz_insertarEvaluacion.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Registrar Apoderado</a>
              </div>
              
              <div class="bg-white p-6 rounded-lg shadow-lg">
                  <h3 class="text-xl font-bold mb-4 text-blue-600">Gestionar Evaluación</h3>
                  <p class="text-gray-600 mb-6">Busca una evaluación de un estudiante</p>
                  <a href="GestionEvaluacion/interfaz_buscar.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Gestionar Evaluación</a>
              </div>
            </div>
        </div>

</body>
</html>
