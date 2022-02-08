<?php
include "funciones.php";

if($_POST){
    $nombre_usuario = $_POST["nombre_usuario"];
    $apellido1_usuario = $_POST["apellido1_usuario"];
    $apellido2_usuario = $_POST["apellido2_usuario"];
    $email_usuario = $_POST["email_usuario"];
    $telefono_usuario = $_POST["telefono_usuario"];
    $dni_usuario = $_POST["dni_usuario"];
    $pass_usuario = $_POST["pass_usuario"];


    //comprobar mail


    // Generar Token
    $token = rand(100000, 999999);

    // Conexion BD
    $conexion_registro = new conectar_db();

    $query_insertar_usuario = "INSERT INTO usuarios (nombre_usuario, apellido1_usuario, apellido2_usuario, email_usuario, telefono_usuario, dni_usuario, pass_usuario, tipo_usuario, activo, token)
    VALUES ('$nombre_usuario', '$apellido1_usuario', '$apellido2_usuario', '$email_usuario', '$telefono_usuario','$dni_usuario','$pass_usuario','Usuario',0, $token);";

    $añadir_usuario = $conexion_registro->consultar($query_insertar_usuario);
    $conexion_registro->cerrar();

    //Redireccion activacion
    if($añadir_usuario){
        header("Location: ../activacion.php?token=$token&usuario=$email_usuario");
    }

}


?>