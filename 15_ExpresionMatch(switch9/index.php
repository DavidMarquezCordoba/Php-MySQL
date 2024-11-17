<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php

    $var=5;

    $resultado = match ($var) {
      1 => "pendiente",
      2 => "en proceso",
      3 => "Finalizado",
      default =>"Desconocido",
    };
  
    echo $resultado;
  
  ?>


<!-- <?php

$var=1;

$resultado = match ($var) {
  1 => "Es un número",
  "1" => "Es un string",
  default =>"Desconocido",
};

echo $resultado;

?> -->
  
  <!-- <?php

    $var="2";

    $resultado = match ($var) {
      "a", "b", "c",  => "Es un string",
      "1", "2", "3",  => "Es un número",
      default =>"Desconocido",
    };

    echo $resultado;

?> -->
</body>
</html>

<!-- Ejercicio de prueba del método match -->
<!-- En el ejercicio probamos las distintas posibilidades, combinación de string y números 
    opciones múltiples..   -->