<?php
include "modelo/conexion.php";

if (!empty($_POST["btnguardar"])) {
    if (!empty($_POST["nombre_mascota"]) && !empty($_POST["fecha_nacimiento"]) && !empty($_POST["apellido_dueno"]) && !empty($_POST["nombre_dueno"]) && !empty($_POST["telefono_contacto"]) && !empty($_POST["genero"]) && !empty($_POST["animaltipo"])) {
        $nombre_mascota = $_POST["nombre_mascota"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $apellido_dueno = $_POST["apellido_dueno"];
        $nombre_dueno = $_POST["nombre_dueno"];
        $telefono_contacto = $_POST["telefono_contacto"];
        $genero_mascota = $_POST["genero"];
        $tipo_mascota = $_POST["animaltipo"];

        $sql = $conexion->query("INSERT INTO mascotas (nombre_mascota, fecha_nacimiento, apellido_dueno, nombre_dueno, telefono_contacto, genero_mascota, tipo_mascota) VALUES ('$nombre_mascota', '$fecha_nacimiento', '$apellido_dueno', '$nombre_dueno', '$telefono_contacto', '$genero_mascota', '$tipo_mascota')");

        if ($sql === TRUE) {
            echo '<div class="alert alert-success">Mascota registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar mascota: ' . $conexion->error . '</div>';
        }
    } else {
        echo '<div class="alert alert-danger">ALGUN CAMPO ESTA VACIO</div>';
    }
}
?>
