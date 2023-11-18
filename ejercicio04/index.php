<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Juego de Adivinanzas</title>
</head>
<body>

  <?php
    session_start();

    // Verificar si el número de adivinanza está definido en la sesión
    if (!isset($_SESSION['numero_adivinanza'])) {
      $_SESSION['numero_adivinanza'] = rand(1, 10); // Generar un número aleatorio entre 1 y 10
      $_SESSION['intentos'] = 0; // Inicializar el contador de intentos
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // El formulario fue enviado, verificar la respuesta
      $intentos = $_SESSION['intentos'];
      $numero_adivinanza = $_SESSION['numero_adivinanza'];

      if (isset($_POST['guess'])) {
        $adivinanza_usuario = $_POST['guess'];

        if ($adivinanza_usuario == $numero_adivinanza) {
          echo "<p class='success'>¡Felicidades! Adivinaste el número en $intentos intentos.</p>";
          // Reiniciar el juego
          session_unset();
        } else {
          echo "<p class='error'>Intenta de nuevo. No has adivinado el número.</p>";
          $_SESSION['intentos']++;
        }
      }
    }
  ?>

  <form method="post" action="">
    <label for="guess">Adivina el número (entre 1 y 10): </label>
    <input type="number" id="guess" name="guess" min="1" max="10" required>
    <button type="submit">Adivinar</button>
  </form>

  <script src="script.js"></script>
</body>
</html>
