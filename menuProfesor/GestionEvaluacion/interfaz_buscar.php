<?php
session_start();
$rut = $_SESSION['RUT']; 
if (!isset($_SESSION['RUT'])) {
    header('Location: loginProfesor.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros de Búsqueda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title has-text-centered">Filtros de búsqueda</h1>
            <div class="box">
                <form id="search-form" action="backend_buscarEvaluacion.php" method="post">
                    <div class="field">
                        <label class="label">Selecciona un filtro</label>
                        <div class="control">
                            <div class="select">
                                <select id="filtro" name="filtro">
                                    <option value="">Elige una opción</option>
                                    <option value="evaluacion_codigo">Codigo Evaluación</option>
                                    <option value="estudiante_rut">Rut Estudiante</option>
                                    <option value="estudiante_nombres">Nombre Estudiante</option>
                                    <option value="estudiante_apellidos">Apellidos Estudiante</option>
                                    <option value="profesor_nombres">Nombres Profesor</option>
                                    <option value="profesor_apellidos">Apellidos Profesor</option>
                                    <option value="asignatura_titulo">Titulo Asignatura</option>
                                    <option value="evaluacion_puntaje_total">Puntaje Total</option>
                                    <option value="evaluacion_puntaje_obtenido">Puntaje Obtenido</option>
                                    <option value="evaluacion_escala">Escala</option>
                                    <option value="evaluacion_nota">Nota</option>
                                    <option value="evaluacion_fecha">Fecha Evaluación</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field" id="value-field" style="display: none;">
                        <label class="label">Valor del filtro</label>
                        <div class="control">
                            <input class="input" type="text" id="valor" name="valor" placeholder="Escribe el valor">
                        </div>
                    </div>
                    <div class="field is-grouped is-grouped-centered">
                        <div class="control">
                            <button class="button is-primary" type="submit">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('filtro').addEventListener('change', function() {
            var valueField = document.getElementById('value-field');
            if (this.value) {
                valueField.style.display = 'block';
            } else {
                valueField.style.display = 'none';
            }
        });
    </script>
</body>
</html>
