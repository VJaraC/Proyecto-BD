<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú del Director</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="logo_croacia.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="bg-gray-100">

    
    <nav class="bg-red-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white text-2xl font-bold">Inspectoría general</div>
            <div>
                <a href="./../loginDireccion.php" class="text-white hover:text-gray-200 mx-2">Cerrar Sesión</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-10">

        
        <div class="mb-10">
            <h2 class="text-2xl font-bold mb-4 text-gray-700">Gestión de Estudiantes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4 text-blue-600">Registrar un alumno</h3>
                    <p class="text-gray-600 mb-6">Añade un nuevo estudiante a la base de datos del colegio, completando la información personal y académica requerida.</p>
                    <p class="text-red-600 mb-6">**REQUIERE UN APODERADO CREADO ANTERIORMENTE.**</p>
                    <a href="GestionEstudiantes/interfaz_insertarestudiante.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Registrar Alumno</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                  <h3 class="text-xl font-bold mb-4 text-blue-600">Gestionar Alumnos</h3>
                  <p class="text-gray-600 mb-6">Busca información detallada sobre los alumnos registrados en la base de datos.</p>
                  <a href="GestionEstudiantes/interfaz_buscar.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Gestionar Alumno</a>
                </div>
            </div>
        </div>

    
        <div class="mb-10">
            <h2 class="text-2xl font-bold mb-4 text-gray-700">Gestión de Apoderado</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

              <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4 text-blue-600">Registrar datos de un apoderado</h3>
                <p class="text-gray-600 mb-6">Añade un nuevo apoderado a la base de datos del colegio</p>
                <a href="GestionApoderado/interfaz_registrarapoderado.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Registrar Apoderado</a>
              </div>
              
              <div class="bg-white p-6 rounded-lg shadow-lg">
                  <h3 class="text-xl font-bold mb-4 text-blue-600">Gestionar Apoderado</h3>
                  <p class="text-gray-600 mb-6">Busca información detallada sobre los apoderados registrados en la base de datos.</p>
                  <a href="GestionApoderado/interfaz_buscar.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Gestionar Apoderado</a>
              </div>
            </div>
        </div>
          
        <div class="mb-10">
            <h2 class="text-2xl font-bold mb-4 text-gray-700">Gestión de Cursos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4 text-blue-600">Registrar un Curso</h3>
                    <p class="text-gray-600 mb-6">Añade un curso a la base de datos del colegio </p>
                    <a href="GestionCursos/interfaz_registrarcurso.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Registrar Curso</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                  <h3 class="text-xl font-bold mb-4 text-blue-600">Gestionar un curso</h3>
                  <p class="text-gray-600 mb-6">Busca información detallada sobre los cursos registrados en la base de datos</p>
                  <a href="GestionCursos/interfaz_buscar.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Gestionar Curso</a>
                </div>
            </div>
        </div>

</body>
</html>
