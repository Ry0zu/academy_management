<?php
include("php/head.php");
?>
    
    <div class="contenido">
        <div class="texto">
            <img class="logo" src="img/euroformac.png">
            <p style="text-align:center; text-decoration:underline;">Listado de Cursos</p>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Duración</th>
                        <th scope="col">Modalidad</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>

                <tbody>
                <?php foreach (cargar_cursos() as $row){ ?>
                    <tr>
                        <td><?php echo $row["codigo_curso"];?></td>
                        <td><?php echo $row["nombre_curso"];?></td>
                        <td><?php echo $row["duracion_curso"];?>h</td>
                        <td><?php echo $row["modalidad_curso"];?></td>
                        <td><a href="editar_curso.php?id_curso=<?php echo $row["id_curso"];?>" role="button" class="bi bi-pencil btn btn-warning"></a> | <a href="#" data-bs-toggle="modal" data-bs-target="#modelId<?php echo $row['id_curso'];?>"  role="button" class="bi bi-trash btn btn-danger"></a></td>
                    </tr>

                                <!-- Modal -->
                        <div class=" modal fade" id="modelId<?php echo $row['id_curso'];?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content delete_modal">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><img class="modal_image" src="img/warning.png">  Advertencia </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       ¿Está seguro de que desea eliminar el curso <span><?php echo $row["nombre_curso"];?></span>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                        <button onclick= "borrar_curso(<?php echo $row['id_curso'];?>)" type="button" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </tbody>
            </table>     

        </div>
    </div>

</body>
</html>