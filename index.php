<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio República de Croacia</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/heroicons@1.0.6"></script>
    <style>
        body {
            font-family: 'sans-serif';
            background-color: #8B0000;
        }
        .button-icon {
            height: 3rem;
            width: 3rem;
        }
        .button-text {
            font-size: 1.5rem;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="text-center w-full px-4">
        <h1 class="text-6xl font-bold text-white mb-16">Colegio República de Croacia</h1>
        <div class="flex justify-center space-x-8 flex-wrap">
            <a href="loginDireccion.php" class="bg-blue-800 text-white py-8 px-16 rounded-xl shadow-lg transform transition hover:scale-105 flex items-center justify-center space-x-4 text-3xl w-60 min-w-min mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="button-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span class="button-text">Dirección</span>
            </a>
            <a href="loginApoderado.php" class="bg-blue-700 text-white py-8 px-16 rounded-xl shadow-lg transform transition hover:scale-105 flex items-center justify-center space-x-4 text-3xl w-60 min-w-min mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="button-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c.28 0 .5-.22.5-.5v-.5a2.5 2.5 0 10-5 0v.5c0 .28.22.5.5.5h4zM7 14v7h10v-7M7 14a3 3 0 00-3-3h12a3 3 0 00-3 3v7h4v-7a3 3 0 00-3-3H7zm-4 7v-7a5 5 0 0110 0v7H3z" />
                </svg>
                <span class="button-text">Apoderado</span>
            </a>
            <a href="loginEstudiante.php" class="bg-blue-600 text-white py-8 px-16 rounded-xl shadow-lg transform transition hover:scale-105 flex items-center justify-center space-x-4 text-3xl w-60 min-w-min mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="button-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span class="button-text">Estudiante</span>
            </a>
            <a href="loginProfesor.php" class="bg-blue-500 text-white py-8 px-16 rounded-xl shadow-lg transform transition hover:scale-105 flex items-center justify-center space-x-4 text-3xl w-60 min-w-min mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="button-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16v-7M7 8l10 2v10l-10-2V8zM4 7a4 4 0 014-4h4a4 4 0 014 4M4 7a4 4 0 014 4v2M4 7a4 4 0 014-4h4a4 4 0 014 4m0 2v6a4 4 0 01-4 4H8a4 4 0 01-4-4V9a4 4 0 014-4h4a4 4 0 014 4m0 2V9a4 4 0 00-4-4H8a4 4 0 00-4 4v6a4 4 0 004 4h4a4 4 0 004-4V9" />
                </svg>
                <span class="button-text">Profesor</span>
            </a>
        </div>
    </div>
</body>
</html>
