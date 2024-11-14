<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php
  define("AUTOR", "David");

  echo "El nombre del autor es: " .AUTOR . " <br><br>";

  //Constantes mágicas, con predefinidas por php y pueden tener diversar funcionalidades, esta es una de ellas de LINE
  echo "Este echo se ejecuta en la línea " .__LINE__ . " <br><br>";

  //FILE
  echo "Y estamos trabajando con el fichero " .__FILE__;
  ?>
</body>
</html>