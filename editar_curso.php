<?php
include("php/head.php");
$id_curso = $_GET["id_curso"];
$datos_curso = cargar_datos_curso($id_curso);
?>

<div class="contenido">
        <div class="texto">
            <img class="logo" src="img/euroformac.png"> 
            <div class="titulo_registro">
                <h4>Datos del Curso</h4>
            </div><br>

            <div class="row justify-content-md-center">
                <form id="form_curso" method="POST" action="php/actualizar_curso.php?id=<?php echo $id_curso;?>" class = "col-6 needs-validation" novalidate>
                    
                    <div class="form-group">
                        <label for="codigo_curso" class="form-label">Código del Curso:</label>
                        <input required value="<?php echo $datos_curso["codigo_curso"];?>" type="text" class="form-control" id="codigo_curso" name="codigo_curso" aria-describedby="codigo_curso_Help">
                            <div class="invalid-feedback">
                                Por favor, introduzca el código del curso.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="nombre_curso" class="form-label">Nombre del Curso:</label>
                        <input required value="<?php echo $datos_curso["nombre_curso"];?>" type="text" class="form-control" id="nombre_curso" name="nombre_curso" aria-describedby="nombre_curso_Help">
                            <div class="invalid-feedback">
                                Por favor, introduzca el nombre del curso.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="duracion_curso" class="form-label">Duración Curso (horas totales):</label>
                        <input required value="<?php echo $datos_curso["duracion_curso"];?>" type="number" class="form-control" id="duracion_curso" name="duracion_curso" aria-describedby="duracion_curso_Help">
                            <div class="invalid-feedback">
                                Por favor, introduzca la duración total del curso.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="fecha_inicio_curso" class="form-label">Fecha inicio Curso:</label>
                        <input required value="<?php echo $datos_curso["fecha_inicio_curso"];?>" type="date" class="form-control" id="fecha_inicio_curso" name="fecha_inicio_curso" aria-describedby="fecha_inicio_curso_Help">
                            <div class="invalid-feedback">
                                Por favor, introduzca la fecha de inicio del curso.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="fecha_fin_curso" class="form-label">Fecha final Curso:</label>
                        <input required value="<?php echo $datos_curso["fecha_fin_curso"];?>" type="date" class="form-control" id="fecha_fin_curso" name="fecha_fin_curso" aria-describedby="fecha_fin_curso_Help">
                            <div class="invalid-feedback">
                                Por favor, introduzca la fecha final del curso.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="horario_inicio_curso" class="form-label">Hora inicio Curso:</label>
                        <input required value="<?php echo $datos_curso["horario_inicio_curso"];?>" type="time" class="form-control" id="horario_inicio_curso" name="horario_inicio_curso" aria-describedby="horario_inicio_curso_Help">
                            <div class="invalid-feedback">
                                Por favor, introduzca la hora inicial del curso.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="horario_fin_curso" class="form-label">Hora fin Curso:</label>
                        <input required value="<?php echo $datos_curso["horario_fin_curso"];?>" type="time" class="form-control" id="horario_fin_curso" name="horario_fin_curso" aria-describedby="horario_fin_curso_Help">
                            <div class="invalid-feedback">
                                Por favor, introduzca la hora final del curso.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="modalidad_curso" class="form-label">Modalidad del Curso:</label>
                        <select required type="text" class="form-select" id="modalidad_curso" name="modalidad_curso" aria-describedby="modalidad_curso_Help">
                            <option value="Online" <?php if ($datos_curso["modalidad_curso"] == "Online"){echo "selected";}?>>Online</option>
                            <option value="Presencial" <?php if ($datos_curso["modalidad_curso"] == "Presencial"){echo "selected";}?>>Presencial</option>
                            <option value="Semipresencial" <?php if ($datos_curso["modalidad_curso"] == "Sempiresencial"){echo "selected";}?>>Semipresencial</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, seleccione la modalidad del curso.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tipo_curso" class="form-label">Tipo del Curso:</label>
                        <select required type="text" class="form-select" id="tipo_curso" name="tipo_curso" aria-describedby="tipo_curso_Help">
                            <option value="Módulo" <?php if ($datos_curso["tipo_curso"] == "Módulo"){echo "selected";}?>>Módulo</option>
                            <option value="Certificado Profesional" <?php if ($datos_curso["tipo_curso"] == "Certificado Profesional"){echo "selected";}?>>Certificado Profesional</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, seleccione el tipo del curso.
                        </div>
                    </div>
                    <br>
                    <button type="submit" onclick=validar_add() class="bi bi-box-arrow-in-up btn btn-warning"> Actualizar Curso</button>
                </form>
            </div>
            <br>
        </div>
    </div>

</body>
</html>