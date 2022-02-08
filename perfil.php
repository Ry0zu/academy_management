<?php
include("php/head.php");
$datos_usuario = datos_usuario($_SESSION['id_usuario']);
?>
    

        <div class="contenido">
        <div class="texto">
            <img class="logo" src="img/euroformac.png"> 
            <div class="titulo_registro">
                <h4>Datos del Usuario</h4>
            </div><br>

            <div class="row justify-content-md-center">
                <form id="form_perfil" method="POST" action="php/actualizar_perfil.php" class = "col-6 needs-validation" novalidate>
                    <div class="form-group">
                        <label for="nombre_usuario" class="form-label">Nombre:</label>
                        <input disabled type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" aria-describedby="nombre_usuario_Help" value="<?php echo $datos_usuario["nombre_usuario"];?>">
                            <div class="invalid-feedback">
                                Por favor, introduzca su nombre.
                            </div>
                    </div>
                

                    <div class="form-group">
                        <label for="apellido1_usuario">Primer apellido:</label>
                        <input disabled type="text" class="form-control" id="apellido1_usuario" name="apellido1_usuario" aria-describedby="apellido1_usuario_Help" value="<?php echo $datos_usuario["apellido1_usuario"];?>">  
                            <div class="invalid-feedback">
                                Por favor, introduzca su primer apellido.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="apellido2_usuario">Segundo apellido:</label>
                        <input disabled type="text" class="form-control" id="apellido2_usuario" name="apellido2_usuario" aria-describedby="apellido2_usuario_Help" value="<?php echo $datos_usuario["apellido2_usuario"];?>">   
                    </div>

                    <div class="form-group">
                        <label for="email_usuario">Dirección Email:</label>
                        <input type="email" class="form-control" id="email_usuario" name="email_usuario" aria-describedby="email_usuario_Help" value="<?php echo $datos_usuario["email_usuario"];?>">               
                            <div class="invalid-feedback">
                                Por favor, introduzca su email.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono_usuario">Teléfono:</label>
                        <input required type="tel" class="form-control" id="telefono_usuario" name="telefono_usuario" aria-describedby="telefono_usuario_Help" value="<?php echo $datos_usuario["telefono_usuario"];?>">
                            <div class="invalid-feedback">
                                Por favor, introduzca su teléfono.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="dni_usuario">DNI:</label>
                        <input disabled type="text" class="form-control" id="dni_usuario" name="dni_usuario" aria-describedby="dni_usuario_Help" value="<?php echo $datos_usuario["dni_usuario"];?>">  
                            <div class="invalid-feedback">
                                Por favor, introduzca un dni válido.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="pass_usuario">Contraseña:</label>
                        <input required type="password" class="form-control" id="pass_usuario" name="pass_usuario" aria-describedby="pass_usuario_Help" value="<?php echo $datos_usuario["pass_usuario"];?>">
                        <small id="pass_usuario_Help" class="form-text text-muted">Nunca comparta su contraseña.</small>
                            <div class="invalid-feedback">
                                Por favor, introduzca una contraseña.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="pass2_usuario">Repita la contraseña:</label>
                        <input required type="password" class="form-control" id="pass2_usuario" name="pass2_usuario" aria-describedby="pass2_usuario_Help" value="<?php echo $datos_usuario["pass_usuario"];?>">
                            <div class="invalid-feedback" id="pass2_usuario_error">
                                Las contraseñas no coinciden.
                            </div>
                    </div>

                    <br>
                    <button type="submit" onclick=validar_registro() class="bi bi-box-arrow-in-up btn btn-warning"> Actualizar datos</button>
                </form>
            </div>
            <br>
        </div>
    </div>

</body>
</html>



