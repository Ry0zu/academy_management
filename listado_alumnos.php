<?php
include("php/head.php");
?>
    
    <div class="contenido">
        <div class="texto">
            <img class="logo" src="img/euroformac.png">
            <p style="text-align:center; text-decoration:underline;">Listado de Alumnos</p>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido 1</th>
                        <th scope="col">Apellido 2</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    while($row = $resultado_alumnos[0]) {
                    ?>
                    <tr>
                        <td><?php echo $row["nombre_alumno"]?></td>
                        <td><?php echo $row["apellido1_alumno"]?></td>
                        <td><?php echo $row["apellido2_alumno"]?></td>
                        <td><?php echo $row["estado_alumno"]?></td>
                        <td>//</td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

</body>
</html>