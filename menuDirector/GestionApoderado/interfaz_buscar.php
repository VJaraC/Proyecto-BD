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
                <form id="search-form" action="backend_buscarapoderado.php" method="post">
                    <div class="field">
                        <label class="label">Selecciona un filtro</label>
                        <div class="control">
                            <div class="select">
                                <select id="filtro" name="filtro">
                                    <option value="">Elige una opción</option>
                                    <option value="apoderado_rut">RUT</option>
                                    <option value="estudiante_nombres">Nombre Estudiante</option>
                                    <option value="apoderado_nombres">Nombres</option>
                                    <option value="profesor_rut">Apellidos</option>
                                    <option value="persona_correo">Correo</option>
                                    <option value="persona_direccion_comuna">Comuna</option>
                                    <option value="persona__direccion_calle">Calle</option>
                                    <option value="persona_direccion_numero">Número de casa</option>
                                    <option value="persona_nacionalidad">Nacionalidad</option>
                                    <option value="persona_genero">Género</option>
                                    <option value="persona_fecha_nacimiento">Fecha de nacimiento</option>
                                    <option value="contacto_emergencia">Contacto de Emergencia</option>
                                    <option value="apoderado_ocupacion">Ocupación</option>
                                    <option value="apoderado_parentesco">Parentesco</option>
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