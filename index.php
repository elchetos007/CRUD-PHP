<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/23812395d0.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center"> HOLA MUNDO</h1>
    <div class="container-fluid row">
        <form class="col-4">
            <h3 class="text-center text-secondary">Registro de personas</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la Persona</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">apellido de la persona</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                <input type="text" class="form-control" name="DNI">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="text" class="form-control" name="Fecha de nacimeinto">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo">
            </div>
            <button type="submit" class="btn btn-primary" name="Registrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Fecha nacimiento</th>
                        <th scope="col">Correo</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("select * from persona");
                    while ($datos = $sql->fetch_object()) { ?>

                    <tr>
                        <td><?= $datos->id ?></td>
                        <td><?= $datos->nombre ?></td>
                        <td><?= $datos->apellido ?></td>
                        <td><?= $datos->dni ?></td>
                        <td><?= $datos->fecha_nacimiento ?></td>
                        <td><?= $datos->correo ?></td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"><i class=" fa-solid fa-user-pen"></i></a>
                            <a href="" class="btn btn-sm btn-danger"><i class=" fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>