<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    function imcrementaVariable(){

      //Si le añadimos static, el valor se mantendrá inmutable una vez acaba la función
      static $contador=0;
      $contador++;
      echo $contador . "<br>";
    }

    imcrementaVariable();
    imcrementaVariable();
    imcrementaVariable();
    imcrementaVariable();
    imcrementaVariable();
    imcrementaVariable();
  ?>
</body>
</html>