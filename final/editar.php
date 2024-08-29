<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query("SELECT * FROM mascotas WHERE id_=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar mascota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form method="POST">
        <h1 class="text-center">Editar mascota</h1>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
        include "controlador/editar.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la mascota</label>
                <input type="text" class="form-control" name="nombre_mascota" value="<?= $datos->nombre_mascota ?>">
            </div>
            <div class="mb-3">
                <label for="costo" class="form-label">Fecha de nacimiento de la mascota</label>
                <input type="date" class="form-control" name="fecha_nacimiento" value="<?= $datos->fecha_nacimiento ?>">
            </div>
            <div class="mb-3">
                <label for="venta" class="form-label">Apellido del dueño</label>
                <input type="text" class="form-control" name="apellido_dueno" value="<?= $datos->apellido_dueno ?>">
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Nombre del dueño</label>
                <input type="text" class="form-control" name="nombre_dueno" value="<?= $datos->nombre_dueno ?>">
            </div>
            <div class="mb-3">
                <label for="unidades" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" name="telefono_contacto" value="<?= $datos->telefono_contacto ?>">
            </div>
            <div>
                <h8>Género</h8>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="genderMale" value="macho" <?= $datos->genero_mascota == 'macho' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="genderMale">
                        Macho
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="genderFemale" value="hembra" <?= $datos->genero_mascota == 'hembra' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="genderFemale">
                        Hembra
                    </label>
                </div>
            </div>
            <div>
                <h8>Tipo</h8>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="animaltipo" id="typeDog" value="perro" <?= $datos->tipo_mascota == 'perro' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="typeDog">
                        Perro
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="animaltipo" id="typeCat" value="gato" <?= $datos->tipo_mascota == 'gato' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="typeCat">
                        Gato
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="animaltipo" id="typeBird" value="ave" <?= $datos->tipo_mascota == 'ave' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="typeBird">
                        Ave
                    </label>
                </div>
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary" name="btnguardar" value="ok">Guardar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
