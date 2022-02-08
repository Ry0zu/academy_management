<?php
include "funciones.php";
session_start();

if($_POST){
    $email_usuario = $_POST["email_usuario"];
    $pass_usuario = $_POST["pass_usuario"];

    $conexion_login = new conectar_db();

    $query_login = "SELECT * FROM usuarios WHERE email_usuario = '$email_usuario' AND pass_usuario = '$pass_usuario' AND activo = 1";

    $consulta_login = $conexion_login->consultar($query_login);

    if(mysqli_num_rows($consulta_login)> 0){
        $resultado_login = $consulta_login->fetch_all(MYSQLI_ASSOC);
        $_SESSION['tipo_usuario'] = $resultado_login[0]['tipo_usuario'];
        $_SESSION['usuario'] = $email_usuario;
        $_SESSION['id_usuario'] = $resultado_login[0]['id_usuario'];

        header("Location: ../index.php");
        exit();
    }

    else{
        $query_login_error = "SELECT activo FROM usuarios WHERE email_usuario = '$email_usuario' AND pass_usuario = '$pass_usuario'";
        $consulta_login_error = $conexion_login->consultar($query_login_error);
        if($conexion_login->contar_resultados() > 0){
            echo '<script>
                alert("La cuenta de este usuario esta inactiva, por favor, proceda a la activación");
                window.location = "../login.php";
                </script>';
        
        }
        else{
        echo '<script>
                alert("Usuario o contraseña incorrectos.");
                window.location = "../login.php";
                </script>';
        exit();
        }
    }
}