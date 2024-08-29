<?php
$servidor = "localhost";
$usuario = "root"; 
$contraseña = ""; 
$base_datos = "ortiz_lucas_1ra"; 


$conexion = new mysqli($servidor, $usuario, $contraseña, $base_datos);


if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>





