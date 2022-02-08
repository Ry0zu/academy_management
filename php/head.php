<?php
session_start();
include("php/funciones.php");
comprobar_sesion();
?>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Propios -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/script.js"></script>
   
    <title>Gestión Academia - Euroformac</title>

</head>
<body>
        <header class="header"></header>
        <nav class="navbar navbar-expand-lg bs-warning navi">
            <a class="navbar-brand logo_nav" href="#"><img src="img/logonav.jpg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                        <a class="bi bi-easel nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cursos
                        </a>
                        <div class="dropdown-menu cuenta_despegable" aria-labelledby="navbarDropdown">
                            <a class="bi bi-folder2-open dropdown-item" href="listado_cursos.php"> Listado de Cursos</a>
                        <div class="dropdown-divider"></div>
                        <a class="bi bi-folder-plus dropdown-item" href="nuevo_curso.php"> Añadir Curso</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="bi bi-people nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Alumnos
                        </a>
                        <div class="dropdown-menu cuenta_despegable" aria-labelledby="navbarDropdown">
                            <a class="bi bi-person-lines-fill dropdown-item" href="listado_alumnos.php"> Listado de Alumnos</a>
                        <div class="dropdown-divider"></div>
                        <a class="bi bi-person-plus dropdown-item" href="#"> Añadir Alumno</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="bi bi-journal-bookmark-fill nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profesores
                        </a>
                        <div class="dropdown-menu cuenta_despegable" aria-labelledby="navbarDropdown">
                            <a class="bi bi-journal-text dropdown-item" href="#"> Listado de Profesores</a>
                        <div class="dropdown-divider"></div>
                        <a class="bi bi-journal-plus dropdown-item" href="#"> Añadir Profesores</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="bi bi-person-circle nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cuenta
                        </a>
                        <div class="dropdown-menu cuenta_despegable" aria-labelledby="navbarDropdown">
                            <a class="bi bi-file-earmark-person dropdown-item" href="perfil.php"> Perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="bi bi-power dropdown-item" href="php/cerrar_sesion.php"> Cerrar Sesión</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>