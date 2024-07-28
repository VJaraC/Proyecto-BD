<?php
session_start();
$rut = $_SESSION['RUT']; 
if (!isset($_SESSION['RUT'])) {
    header('Location: loginEstudiante.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú del Estudiante</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/1.0.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="logo_croacia.jpg" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(to bottom, #ffffff, #d6d6d6);
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background-color: #3273dc;
            padding: 1rem;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }
        .navbar .navbar-item {
            font-weight: 500;
            font-size: 1.2rem;
            color: #fff; 
        }
        .navbar .logout-button {
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 0.5rem 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .navbar .logout-button:hover {
            background-color: #d40000;
        }
        .menu-container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1.5rem;
        }
        .menu-box {
            background-color: #3273dc; 
            padding: 3rem; 
            border-radius: 12px;
            width: 90%;
            max-width: 1200px; 
            height: 70vh; 
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2), 0 6px 6px rgba(0, 0, 0, 0.23);
            border: 1px solid #c9c9c9;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .menu-box .title {
            color: white; 
            text-align: center;
            margin-bottom: 4rem; 
            font-size: 2rem; 
        }
        .menu-grid {
            display: flex; 
            justify-content: center; 
            gap: 2rem; 
            flex-wrap: nowrap; 
        }
        .menu-item {
            display: flex;
            align-items: center;
            padding: 1.5rem; 
            background-color: #ffffff;
            color: #000; 
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, background-color 0.3s, color 0.3s;
            cursor: pointer;
            text-decoration: none; 
            font-size: 1.2rem; 
            min-width: 200px; 
            text-align: center; 
        }
        .menu-item:hover {
            transform: translateY(-5px);
            background-color: #ff0000;
            color: #fff;
        }
        .menu-item i {
            font-size: 2rem; 
            margin-right: 1.5rem; 
        }
        .menu-item span {
            font-weight: 500;
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="navbar-item">Colegio Republica de Croacia</div>
    <div class="navbar-end">
        <form action="./../loginEstudiante.php" method="post">
            <button class="logout-button" type="submit">Cerrar sesión</button>
        </form>
    </div>
</nav>
<div class="menu-container">
    <div class="menu-box">
        <h1 class="title">Menú Principal</h1>
        <div class="menu-grid">
            <a href="backend_consultarhorario.php" class="menu-item">
                <i class="fas fa-calendar-alt"></i>
                <span>Consultar Horario</span>
            </a>
            <a href="backend_consultaranotaciones.php" class="menu-item">
                <i class="fas fa-sticky-note"></i>
                <span>Consultar Anotaciones</span>
            </a>
            <a href="backend_reporte_notas.php" class="menu-item">
                <i class="fas fa-clipboard-list"></i>
                <span>Ver Informe de Notas</span>
            </a>
        </div>
    </div>
</div>
</body>
</html>
