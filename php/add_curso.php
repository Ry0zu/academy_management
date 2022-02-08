<?php
session_start();
include ("funciones.php");

if($_POST){
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
    $conexion_add_curso = new conectar_db();

    $query_insertar_curso = "INSERT INTO cursos (nombre_curso, fecha_inicio_curso, fecha_fin_curso, duracion_curso, horario_inicio_curso, horario_fin_curso, modalidad_curso, tipo_curso, codigo_curso)
    VALUES ('$nombre_curso', '$fecha_inicio_curso', '$fecha_fin_curso', $duracion_curso, '$horario_inicio_curso', '$horario_fin_curso','$modalidad_curso','$tipo_curso', '$codigo_curso');";

    $añadir_curso = $conexion_add_curso->consultar($query_insertar_curso);
    $conexion_add_curso->cerrar();

    //Redireccion activacion
    if($añadir_curso){
        header("Location: ../listado_cursos.php");
    }

}


?>