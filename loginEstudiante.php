

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="logo_croacia.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

</head>
<body>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="logo_croacia.jpg" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Iniciar sesión</h2>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="backend_login_estudiante.php" method="POST">
        <div>
          <label for="text" class="block text-sm font-medium leading-6 text-gray-900">Rut</label>
          <div class="mt-2">
            <input id="RUT" name="RUT" type="text"   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <button name="btningresar" type="submit" class="flex w-full justify-center rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Entrar</button>
          <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"></a>
        <a href="index.php" class="block mt-4 text-center font-semibold leading-6 text-blue-600 hover:text-blue-500 bg-blue-100 px-3 py-1.5 rounded-md shadow-sm">Regresar</a>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-gray-500">
      </p>


    </div>
  </div>
  
      
            
</body>
</html>