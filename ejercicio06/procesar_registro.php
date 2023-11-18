<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $contrasena = password_hash($_POST["contrasena"], PASSWORD_BCRYPT);

    $conexion = new mysqli("localhost", "nombre_de_usuario_mysql", "contrasena_mysql", "sistema_login");

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $consulta = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$contrasena')";
    $resultado = $conexion->query($consulta);

    $conexion->close();

    header("Location: login.php");
    exit();
}
?>
