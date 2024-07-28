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
            <div class="text-white text-2xl font-semibold">Gestión Director</div>
            <a href="./../loginDireccion.php" class="text-white hover:text-gray-200">Cerrar Sesión</a>
        </div>
    </nav>

    <div class="container mx-auto mt-8 px-4">

        
        <section class="mb-8">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Gestión de Estudiantes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Registrar un alumno</h3>
                    <p class="text-gray-700 mb-4">Añade un nuevo estudiante completando la información personal y académica requerida.</p>
                    <p class="text-red-600 mb-4">**REQUIERE UN APODERADO CREADO ANTERIORMENTE.**</p>
                    <a href="GestionEstudiantes/interfaz_insertarEstudiante.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Registrar Alumno</a>
                </div>
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Gestionar Alumno</h3>
                    <p class="text-gray-700 mb-4">Busca información detallada sobre los alumnos registrados.</p>
                    <a href="GestionEstudiantes/interfaz_buscar.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Gestionar Alumno</a>
                </div>
            </div>
        </section>

        
        <section class="mb-8">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Gestión de Apoderados</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Registrar datos de un apoderado</h3>
                    <p class="text-gray-700 mb-4">Añade un nuevo apoderado.</p>
                    <a href="GestionApoderado/interfaz_registrarapoderado.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Registrar Apoderado</a>
                </div>
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Gestionar un Apoderado</h3>
                    <p class="text-gray-700 mb-4">Busca información detallada sobre los apoderados registrados.</p>
                    <a href="GestionApoderado/interfaz_buscar.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Gestionar Apoderado</a>
                </div>
            </div>
        </section>

        
        <section class="mb-8">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Gestión de Cursos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Registrar un Curso</h3>
                    <p class="text-gray-700 mb-4">Añade un nuevo curso.</p>
                    <a href="GestionCursos/interfaz_registrarcurso.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Registrar Curso</a>
                </div>
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Gestionar Curso</h3>
                    <p class="text-gray-700 mb-4">Busca información detallada sobre los cursos registrados.</p>
                    <a href="GestionCursos/interfaz_buscar.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Gestionar Curso</a>
                </div>
            </div>
        </section>

        
        <section class="mb-8">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Gestión de Profesores</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Registrar a un profesor</h3>
                    <p class="text-gray-700 mb-4">Añade un nuevo profesor.</p>
                    <a href="GestionProfesor/interfaz_registrarProfesor.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Registrar Profesor</a>
                </div>
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Gestionar Profesor</h3>
                    <p class="text-gray-700 mb-4">Busca información detallada sobre los profesores registrados.</p>
                    <a href="GestionProfesor/interfaz_buscar.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Gestionar Profesor</a>
                </div>
            </div>
        </section>

        
        <section class="mb-8">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Gestión de Evaluaciones</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Registrar Evaluación</h3>
                    <p class="text-gray-700 mb-4">Añade una nueva evaluación a un estudiante.</p>
                    <a href="GestionEvaluacion/interfaz_insertarEvaluacion.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Agregar Evaluación</a>
                </div>
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Gestionar Evaluación</h3>
                    <p class="text-gray-700 mb-4">Busca información detallada sobre las evaluaciones registradas.</p>
                    <a href="GestionEvaluacion/interfaz_buscar.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Gestionar Evaluación</a>
                </div>
            </div>
        </section>

        
        <section class="mb-8">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Gestión de Anotaciones</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Registrar Anotación</h3>
                    <p class="text-gray-700 mb-4">Añade una nueva anotación a un estudiante.</p>
                    <a href="GestionAnotacion/interfaz_registrarAnotacion.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Registrar Anotación</a>
                </div>
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Buscar Anotación</h3>
                    <p class="text-gray-700 mb-4">Busca información detallada sobre las anotaciones registradas.</p>
                    <a href="GestionAnotacion/interfaz_buscar.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Buscar Anotación</a>
                </div>
            </div>
        </section>

        
        <section class="mb-8">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Gestión de Asignaturas</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Registrar una asignatura</h3>
                    <p class="text-gray-700 mb-4">Añade una nueva asignatura.</p>
                    <a href="GestionAsignatura/interfaz_registrarAsignatura.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Registrar Asignatura</a>
                </div>
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Gestionar Asignatura</h3>
                    <p class="text-gray-700 mb-4">Busca información detallada sobre las asignaturas registradas.</p>
                    <a href="GestionAsignatura/interfaz_buscar.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Gestionar Asignatura</a>
                </div>
            </div>
        </section>
        
        <section class="mb-8">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Gestión de Horario</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Registrar un bloque horario</h3>
                    <p class="text-gray-700 mb-4">Registra un bloque horario.</p>
                    <a href="GestionBloqueHorario/interfaz_insertarHorario.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Registrar Bloque Horario</a>
                </div>
            </div>
        </section>
        
    </div>
</body>
</html>
