<?php
include ("funciones.php");
$id_curso = $_GET['id_curso'];

$conexion_delete_curso = new conectar_db();

$query_borrar_curso = "DELETE FROM cursos WHERE id_curso = $id_curso;";
$consulta_borrar_curso = $conexion_delete_curso->consultar($query_borrar_curso);

if($consulta_borrar_curso){
    echo "Curso borrado con éxito";
}
else{
    echo "Hubo un problema al intentar eliminar el curso";
}

$conexion_delete_curso->cerrar();
?>