<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>
<body>
  <?php

    // Variables //
    
    $nombre="David";

    $edad = 36;
    
    //Una forma de hacerlo
    // print "Me llamo " . $nombre . " y tengo " . $edad . " años. <br>";

    //Para concatenar sería con el . (punto)

    //Otra forma de hacerlo
    print "Me llamo $nombre y tengo $edad años. <br>";


    //Uso de echo
    echo "Me llamo $nombre y tengo $edad años.";
    print "<br>";

    //La utilidad de echo es que puedes mostrar los valores de las variables por pantalla directamente
    echo $nombre, $edad;
  ?>
</body>
</html>