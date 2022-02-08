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
   
    <title>Login - Gestión Academia Euroformac</title>

</head>
<body>
    <div class="contenido_login">
        <div class="texto">
            <img class="logo" src="img/euroformac.png">
            <div class="titulo_login">
                <h4>Acceso Usuarios</h4>
            </div><br>

            <div class="row justify-content-md-center">
                <form id="form_login" method="POST" action = "php/validar_login.php" class = "col-5 needs-validation" novalidate>

                    <div class="form-group">
                        <label for="email_usuario">Dirección Email*:</label>
                        <input required type="email" class="form-control" id="email_usuario" name="email_usuario" aria-describedby="email_usuario_Help" placeholder="example@mail.com">               
                            <div class="invalid-feedback">
                                Por favor, introduzca su email.
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="pass_usuario">Contraseña*:</label>
                        <input required type="password" class="form-control" id="pass_usuario" name="pass_usuario" aria-describedby="pass_usuario_Help" placeholder="Password">
                        <small id="pass_usuario_Help" class="form-text text-muted">Nunca comparta su contraseña.</small>
                            <div class="invalid-feedback">
                                Por favor, introduzca su contraseña.
                            </div>
                    </div>

                    <br>
                    <button type="submit" onclick="validar_login()" class="btn btn-warning">Acceder</button>
                    <span class="campos">* Campos obligatorios</span>
                    <br><br>
                    <a href="registro.php"><p>¿Aún no esta registrado? Registrarse</p></a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>






