<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .resaltar{
      color: red;
      font-weight: bold;
    }
  </style>

</head>
<body>
  <!-- Prueba -->
  <?php
    echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";
  ?>

  <?php
  
    $variable1 = "Casa";
    $variable2 = "CASA";
    
    $resultado = strcmp($variable1, $variable2);

    //STRCMP Devuelve:
    // 1 si NO SON iguales --> TRUE
    // 0 si SON iguales --> FALSE

    print "Estamos comparando $variable1 con $variable2 con el método STRCMP<br><br>";
    print "Y el resultado es... <br><br>";

    if ($resultado==1) {
      echo "NO son iguales <br><br>";
    } else {
      echo "SON iguales <br><br>";
    }
    
    $resultado = strcasecmp($variable1, $variable2);

    print "Estamos comparando $variable1 con $variable2 con el método STRCASECMP<br><br>";
    print "Y el resultado es... <br><br>";
    if ($resultado==1) {
      echo "NO son iguales <br>";
    } else {
      echo "<p style= color{\"green\"}>SON iguales</p>SON iguales <br>";
    }
  ?>
</body>
</html>