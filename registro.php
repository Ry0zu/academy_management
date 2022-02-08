<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Propios -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/script.js"></script>
   
    <title>Registro - Gestion Academia Euroformac</title>
</head>
<body>
    <div class="contenido">
        <div class="texto">
            <img class="logo" src="img/euroformac.png"> 
            <div class="titulo_registro">
                <h4>Registro de nuevo usuario</h4>
            </div><br>

            <div class="row justify-content-md-center">
                <form id="form_registro" method="POST" action="php/validar_registro.php" class = "col-6 needs-validation" novalidate>
                    <div class="form-group">
                        <label for="nombre_usuario" class="form-label">Nombre*:</label>
                        <input required type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" aria-describedby="nombre_usuario_Help" placeholder="Name">
                            <div class="invalid-feedback">
                                Por favor, introduzca su nombre.
                            </div>
                    </div>
                

                    <div class="form-group">
                        <label for="apellido1_usuario">Primer apellido*:</label>
                        <input required type="text" class="form-control" id="apellido1_usuario" name="apellido1_usuario" aria-describedby="apellido1_usuario_Help" placeholder="Last name">  
                            <div class="invalid-feedback">
                                Por favor, introduzca su primer apellido.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="apellido2_usuario">Segundo apellido:</label>
                        <input type="text" class="form-control" id="apellido2_usuario" name="apellido2_usuario" aria-describedby="apellido2_usuario_Help" placeholder="Segundo apellido">   
                    </div>

                    <div class="form-group">
                        <label for="email_usuario">Dirección Email*:</label>
                        <input required type="email" class="form-control" id="email_usuario" name="email_usuario" aria-describedby="email_usuario_Help" placeholder="example@mail.com">               
                            <div class="invalid-feedback">
                                Por favor, introduzca su email.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono_usuario">Teléfono*:</label>
                        <input required type="tel" class="form-control" id="telefono_usuario" name="telefono_usuario" aria-describedby="telefono_usuario_Help" placeholder="666222333">
                            <div class="invalid-feedback">
                                Por favor, introduzca su teléfono.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="dni_usuario">DNI*:</label>
                        <input required type="text" class="form-control" id="dni_usuario" name="dni_usuario" aria-describedby="dni_usuario_Help" placeholder="123456789A">  
                            <div class="invalid-feedback">
                                Por favor, introduzca un dni válido.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="pass_usuario">Contraseña*:</label>
                        <input required type="password" class="form-control" id="pass_usuario" name="pass_usuario" aria-describedby="pass_usuario_Help" placeholder="Password">
                        <small id="pass_usuario_Help" class="form-text text-muted">Nunca comparta su contraseña.</small>
                            <div class="invalid-feedback">
                                Por favor, introduzca una contraseña.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="pass2_usuario">Repita la contraseña*:</label>
                        <input required type="password" class="form-control" id="pass2_usuario" name="pass2_usuario" aria-describedby="pass2_usuario_Help" placeholder="Confirm Password">
                            <div class="invalid-feedback" id="pass2_usuario_error">
                                Las contraseñas no coinciden.
                            </div>
                    </div>

                    <br>
                    <button type="submit" onclick=validar_registro() class="btn btn-warning">Registrarse</button>
                    <span class="campos">* Campos obligatorios</span>
                    <br><br>
                    <a href="login.php"><p>¿Ya está registrado?  Iniciar Sesión</p></a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>






