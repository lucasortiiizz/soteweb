<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/92291909ef.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        function eliminar() {
            var respuesta = confirm("¿Seguro que desea eliminar?");
            return respuesta;
        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <h1 class="text-center">Registro de mascotas</h1>
                    <?php
                    include "modelo/conexion.php";
                    include "controlador/registro_persona.php";
                    include "controlador/eliminar.php";
                    ?>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre de la mascota</label>
                        <input type="text" class="form-control" name="nombre_mascota">
                    </div>
                    <div class="mb-3">
                        <label for="costo" class="form-label">Fecha de nacimiento de la mascota</label>
                        <input type="date" class="form-control" name="fecha_nacimiento">
                    </div>
                    <div class="mb-3">
                        <label for="venta" class="form-label">Apellido del dueño</label>
                        <input type="text" class="form-control" name="apellido_dueno">
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Nombre del dueño</label>
                        <input type="text" class="form-control" name="nombre_dueno">
                    </div>
                    <div class="mb-3">
                        <label for="unidades" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" name="telefono_contacto">
                    </div>
                    <div>
                        <h8>Género</h8>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genero" id="genderMale" value="macho">
                            <label class="form-check-label" for="genderMale">
                                Macho
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genero" id="genderFemale" value="hembra" checked>
                            <label class="form-check-label" for="genderFemale">
                                Hembra
                            </label>
                        </div>
                    </div>
                    <div>
                        <h8>Tipo</h8>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="animaltipo" id="typeDog" value="perro">
                            <label class="form-check-label" for="typeDog">
                                Perro
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="animaltipo" id="typeCat" value="gato">
                            <label class="form-check-label" for="typeCat">
                                Gato
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="animaltipo" id="typeBird" value="ave">
                            <label class="form-check-label" for="typeBird">
                                Ave
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnguardar" value="ok">Guardar</button>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre de la mascota</th>
                            <th scope="col">Fecha de nacimiento de la mascota</th>
                            <th scope="col">Apellido del dueño</th>
                            <th scope="col">Nombre del dueño</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Género</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "modelo/conexion.php";
                        $sql = $conexion->query("SELECT * FROM mascotas");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->id_ ?></td>
                                <td><?= $datos->nombre_mascota ?></td>
                                <td><?= $datos->fecha_nacimiento ?></td>
                                <td><?= $datos->apellido_dueno ?></td>
                                <td><?= $datos->nombre_dueno ?></td>
                                <td><?= $datos->telefono_contacto ?></td>
                                <td><?= $datos->genero_mascota ?></td>
                                <td><?= $datos->tipo_mascota ?></td>
                                <td>
                                    <a href="editar.php?id=<?= $datos->id_ ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_ ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
