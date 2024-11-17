<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<!-- Función con parámetro por VALOR -->
  <?php

  $numero=5;

  function incrementa ($valor){
    $valor++;
    return $valor;
  }
  echo "Parámetro por VALOR: " .incrementa($numero);
  echo "<br>"
  ?>

  <!-- Función con parámetro por REFERENCIA -->
  <?php

  function incrementaReferencia (&$valorReferencia){
    $valorReferencia++;
    return $valorReferencia;
  }

  echo "Parámetro por REFERENCIA: " .incrementaReferencia($numero);
  ?>

</body>
</html>

<!-- Valor:
Cualquier función normal, con sus parámetros con su valor establecido en la variable-->

<!-- REFERENCIA:
Una función normal que se le añade, en el paso de parámtros un & el cual indica que el valor
se verá afectado de ahora en adelante con el nuevo valor como resultado de la función-->