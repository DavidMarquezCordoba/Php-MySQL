<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- Podemos Añadir funciones de otros ficheros pero debemos importarlos -->
  <?php
    Include ("funciones.php");

    // require ("funciones.php");
  ?>

  <!-- Bloque 1 php - Funciones dentro del mismo fichero -->
  <?php
    function dameDatos(){
      echo "Aquí tienes los datos <br>";
    }
  ?>

  <!-- Bloque 2 - Llamadas a funciones en distintos bloques-->
  <?php
    echo "Este es el primer mensaje <br>";
    dameDatos();
    dameDatos();
    echo "Este es el segundo mensaje <br>";
  ?>

  <!-- Llamada a otra función fuera del fichero, anteriormente "Incluida" -->
  <?php
    funcionFuera();
  ?>

</body>
</html>