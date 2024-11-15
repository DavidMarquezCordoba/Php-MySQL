<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    ///////////////////////
    // Número aleatorio //
    //////////////////////

    // $num1 = rand();    Número aleatorio entre todo el tamaño asignado a un entero

    //Puedes elegir un aleatorio incluyendo el mínimo y el máximo
    $numAleatorio = rand(0,10);

    echo "El número es: $numAleatorio";
    
    echo "<br>";
    
    ///////////////////////
    //      POTENCIA    //
    //////////////////////

    // $numPotencia = pow(5, 2);

    $numPotencia = pow(rand(0,15), rand(2,4));

    echo "El número es: $numPotencia";
    
    echo "<br>";
    echo "<br>";

    ///////////////////////
    //      redondeo     //
    //////////////////////

    $numRedondeo = 5.84246621;

    echo "El número $numRedondeo redondeado es " . round($numRedondeo);

    echo "<br>";
    echo "<br>";

    echo "El número $numRedondeo redondeando 2 decimales es: " . round($numRedondeo, 2);


    ///////////////////
    //    casteo    //
    /////////////////

    //casteo implicito en PHP
    //Esto quiere decir que lo va cambiando sobre la marcha
    $numCasteo = "2";

    $numCasteo+=4;

    $numCasteo+=2.002;

    echo "<br>";
    echo "<br>";

    echo "El texto 2, después del casteo es: " . $numCasteo . " es un " . gettype($numCasteo);

    echo "<br>";
    echo "<br>";

    //Para casteos EXPLICITOS es como java

    $resultadoCasteo = (string)$numCasteo; 

    echo "El número casteado ahora es un " . gettype($resultadoCasteo);
  ?>
</body>
</html>