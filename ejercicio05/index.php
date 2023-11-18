<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Galería de Imágenes</title>
</head>
<body>

  <div class="gallery">
    <?php
      $directory = "imagenes/"; // Puedes dejarlo así si las imágenes están en la carpeta raíz

      // Obtener todas las imágenes en el directorio
      $images = glob($directory . "*.{jpg,png,gif}", GLOB_BRACE);

      // Mostrar cada imagen en la galería
      foreach ($images as $image) {
        echo "<img src='$image' alt='Imagen'>";
      }
    ?>
  </div>

  <script src="script.js"></script>
</body>
</html>
