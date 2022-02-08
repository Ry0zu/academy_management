<?php
include ("funciones.php");

@$token=$_GET["token"];
@$usuario=$_GET["usuario"];

$conexion_activacion = new conectar_db();

$query_activar_usuario ="UPDATE usuarios SET activo = 1 WHERE email_usuario = '$usuario' AND token = '$token'";
$consulta_activar_usuario = $conexion_activacion->consultar($query_activar_usuario);

if($conexion_activacion->contar_resultados()>0){
    echo '<img class=imagen_activacion src="img/check_user.png">';
    echo '<h2>Activación de usuario realizada con éxito.</h2>';
    echo '<a class="link_acceso" href="login.php">><span> Acceder a la pantalla de Login </span><</a>';
}

else{
    echo '<img class=imagen_activacion src="img/error_activacion.png">';
    echo '<h4>Ha ocurrido un error, por favor, pongase en contacto con un administrador o intentelo más tarde.</h1>';
}

?>