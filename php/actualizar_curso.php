<?php
session_start();
include ("funciones.php");

if($_POST){
    $id_curso = $_GET["id"];
    $codigo_curso = $_POST["codigo_curso"];
    $nombre_curso = $_POST["nombre_curso"];
    $duracion_curso = $_POST["duracion_curso"];
    $fecha_inicio_curso = $_POST["fecha_inicio_curso"];
    $fecha_fin_curso = $_POST["fecha_fin_curso"];
    $horario_inicio_curso = $_POST["horario_inicio_curso"];
    $horario_fin_curso = $_POST["horario_fin_curso"];
    $modalidad_curso = $_POST["modalidad_curso"];
    $tipo_curso = $_POST["tipo_curso"];

    // Conexion BD
    $conexion_update_curso = new conectar_db();

    $query_update_curso = "UPDATE cursos SET nombre_curso = '$nombre_curso', fecha_inicio_curso = $fecha_inicio_curso, fecha_fin_curso = '$fecha_fin_curso', duracion_curso = $duracion_curso, horario_inicio_curso = '$horario_inicio_curso', horario_fin_curso = '$horario_fin_curso', modalidad_curso = '$modalidad_curso', tipo_curso = '$tipo_curso', codigo_curso = '$codigo_curso' WHERE id_curso = $id_curso;";

    $update_curso = $conexion_update_curso->consultar($query_update_curso);
    $conexion_update_curso->cerrar();

    //Redireccion activacion
    if($update_curso){
        header("Location: ../listado_cursos.php");
    }

}


?>