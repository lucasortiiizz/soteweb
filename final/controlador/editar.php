<?php 
if (!empty($_POST["btnguardar"])) {
    if (!empty($_POST["nombre_mascota"]) && !empty($_POST["fecha_nacimiento"]) && !empty($_POST["apellido_dueno"]) && !empty($_POST["nombre_dueno"]) && !empty($_POST["telefono_contacto"]) && !empty($_POST["genero"]) && !empty($_POST["animaltipo"])) {
        $nombre_mascota = $_POST["nombre_mascota"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $apellido_dueno = $_POST["apellido_dueno"];
        $nombre_dueno = $_POST["nombre_dueno"];
        $telefono_contacto = $_POST["telefono_contacto"];
        $genero_mascota = $_POST["genero"];
        $tipo_mascota = $_POST["animaltipo"];
        $id = $_POST["id"];
        
        if ($conexion) {
            $sql = $conexion->prepare("UPDATE mascotas SET nombre_mascota = ?, fecha_nacimiento = ?, apellido_dueno = ?, nombre_dueno = ?, telefono_contacto = ?, genero_mascota = ?, tipo_mascota = ? WHERE id_ = ?");
            
            if ($sql) {
                $sql->bind_param("sssssssi", $nombre_mascota, $fecha_nacimiento, $apellido_dueno, $nombre_dueno, $telefono_contacto, $genero_mascota, $tipo_mascota, $id);
                
                if ($sql->execute()) {
                    header("Location: index.php");
                } else {
                    echo "<div class='alert alert-warning'>Error al modificar</div>";
                }
            } else {
                echo "<div class='alert alert-warning'>Error al preparar la consulta</div>";
            }
        } else {
            echo "<div class='alert alert-warning'>Error de conexión a la base de datos</div>";
        }
    } 
}
?>
