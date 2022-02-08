<?php
class conectar_db{
    private $host = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $db = "gestion_academia";
    public $conexion;
    public function __construct(){
        $this->conexion = new mysqli($this->host, $this->usuario, $this->clave, $this->db)
        or die(mysqli_error($this->conexion));
        $this->conexion->set_charset("utf8");
    }

    // Consultar
    public function consultar($consulta){
        $resultado = $this->conexion->query($consulta) or die($this->conexion->error);
        if($resultado){
            return $resultado;
            return false;
        }
    }

    // Cerrar
    public function cerrar(){
        $this->conexion->close();
    }

    //Contar Resultados
    public function contar_resultados(){
        $resultado = $this->conexion->affected_rows;
        return $resultado;
    }
}

// FUNCIONES //

function comprobar_sesion(){
    if(!isset($_SESSION["usuario"])){
        header("location:login.php");
    }
}

function admin_user(){
    if($_SESSION["tipo_usuario"] != "Administrador"){
        echo " disabled ";
    }
}

function datos_usuario($id_usuario){
    $conexion_perfil = new conectar_db();
    $query_perfil = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
    $consulta_perfil = $conexion_perfil->consultar($query_perfil);
    $resultado_perfil = $consulta_perfil->fetch_all(MYSQLI_ASSOC);
    $conexion_perfil->cerrar();
    return $resultado_perfil[0];
}

function cargar_alumnos(){
    $conexion_alumnos = new conectar_db();
    $query_alumnos = "SELECT * FROM alumnos";
    $consulta_alumnos = $conexion_alumnos->consultar($query_alumnos);
    $resultado_alumnos = $consulta_alumnos->fetch_all(MYSQLI_ASSOC);
    $conexion_alumnos->cerrar();
    return $resultado_alumnos;
}

function cargar_cursos(){
    $conexion_cursos = new conectar_db();
    $query_cursos = "SELECT * FROM cursos";
    $consulta_cursos = $conexion_cursos->consultar($query_cursos);
    $resultado_cursos = $consulta_cursos->fetch_all(MYSQLI_ASSOC);
    $conexion_cursos->cerrar();
    return $resultado_cursos;
}

function cargar_datos_curso($id_curso){
    $conexion_curso = new conectar_db();
    $query_curso = "SELECT * FROM cursos WHERE id_curso = $id_curso";
    $consulta_curso = $conexion_curso->consultar($query_curso);
    $resultado_curso = $consulta_curso->fetch_all(MYSQLI_ASSOC);
    $conexion_curso->cerrar();
    return $resultado_curso[0];
}

?>