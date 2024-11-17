<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<!-- Por VALOR -->
<?php
  function cambia_mayus($param){
    //Cambia a minúsculas un string
    $param = strtolower($param);
    //Cambia a mayúculas la primera letra del string
    $param = ucwords($param);
    return $param;
  }

  $cadena="HoLa MuNDo";
  echo cambia_mayus($cadena) . "<br>";
  echo $cadena;
?>

<!-- Por REFERENCIA -->
<?php
  echo "<br>";
  function cambia_mayus_ref(&$param){
    //Cambia a minúsculas un string
    $param = strtolower($param);
    //Cambia a mayúculas la primera letra del string
    $param = ucwords($param);
    return $param;
  }

  $cadena2="PasO pOR rEfErEnCiA";
  echo cambia_mayus_ref($cadena2) . "<br>";
  echo $cadena2;
?>
</body>
</html>