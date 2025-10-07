<?php
if (!empty($_POST["Registrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["DNI"]) and !empty($_POST["fecha_de_nacimeinto"]) and !empty($_POST["correo"])) {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["DNI"];
        $fecha_nacimiento = $_POST["fecha_de_nacimeinto"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("INSERT INTO persona (nombre, apellido, dni, fecha_nacimiento, correo) values('$nombre','$apellido','$dni','$fecha_nacimiento','$correo')");

        if ($sql == 1) {
            echo '<div class= "alert alert-success"> Persona registrada correctamente</div>';
        } else {
            echo '<div class= "alert alert-danger"> Persona registrada correctamente</div>';
        }
    } else {
        echo '<div class= "alert alert-warning"> Algunos de los campos esta vacio</div>';
    }
}
