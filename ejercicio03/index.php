<?php
  session_start();

  // Verificar si la variable de sesión está definida
  if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 1; // Inicializar la variable de sesión si no existe
  } else {
    $_SESSION['visitas']++; // Incrementar el contador de visitas
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Contador de Visitas</title>
</head>
<body>

  <h1>Bienvenido a mi sitio web</h1>
  <p>¡Has visitado esta página <?php echo $_SESSION['visitas']; ?> veces!</p>

</body>
</html>
