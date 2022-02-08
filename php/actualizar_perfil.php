<?php
session_start();
include ("funciones.php");

if($_POST){
    $email_usuario = $_POST["email_usuario"];
    $id_usuario = $_SESSION["id_usuario"];
    $telefono_usuario = $_POST["telefono_usuario"];
    $pass_usuario = $_POST["pass_usuario"];



    //comprobar mail

    // Conexion BD
    $conexion_update = new conectar_db();

    $query_update_perfil = "UPDATE usuarios SET email_usuario = '$email_usuario', telefono_usuario = $telefono_usuario, pass_usuario = '$pass_usuario' WHERE id_usuario = $id_usuario";

    $update_perfil = $conexion_update->consultar($query_update_perfil);
    

    //Redireccion activacion
    if($conexion_update->contar_resultados() >0){
        $conexion_update->cerrar();
        header("Location: ../perfil.php");
    }

}


?>