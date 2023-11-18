<?php
session_start();

if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Página de Inicio</title>
</head>
<body>

    <h2>Bienvenido, <?php echo $_SESSION["usuario_nombre"]; ?>!</h2>

    <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>

    <script src="script.js"></script>
</body>
</html>
