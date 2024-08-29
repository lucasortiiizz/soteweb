<?php 
if (!empty($_GET["id"])) {

        $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);

    $stmt = $conexion->prepare("DELETE FROM mascotas WHERE id_ = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Registro eliminado</div>";
    } else {
        echo "<div class='alert alert-warning'>Error al eliminar el registro</div>";
    }
    $stmt->close();
} else {
    echo "<div class='alert alert-warning'>Campos vacíos</div>";
}
?>
