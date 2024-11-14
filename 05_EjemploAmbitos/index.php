<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Añadimos ficheros externos -->
  <?php
  // include ("funciones.php");
  ?>

  <?php
    $nombre= "David";
    
    function dameNombre (){
      
      global $nombre;
      $nombre= "Mi nombre es $nombre";
      echo $nombre;
    }

    print "<strong>Llamada a la función:</strong> <br>"; //Salto de línea en el código

    dameNombre();

    print "<br>"; //Salto de línea
    
    print "<strong>Echo a la variable nombre:</strong> <br>"; //Salto de línea en el código

    echo $nombre;

    print "<br>"; //Salto de línea

  ?>
</body>
</html>