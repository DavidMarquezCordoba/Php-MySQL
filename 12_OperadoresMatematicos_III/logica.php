<?php

  //Recogemos los datos del formulario
  if(isset($_POST["button"])){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $operacion=$_POST["operacion"];

    //Pasamos por parámetros las 3 variables necesari
    calcula($operacion, $num1, $num2);
  }

  //Definimos 3 parámetros necesarios para le resultado
  function calcula($operacion, $num1, $num2){

    switch ($operacion) {
      case 'suma':
        $resultado = $num1 + $num2;
        break;
      case 'resta':
        $resultado = $num1 - $num2;
        break;
      case 'multiplicacion':
        $resultado = $num1 * $num2;
        break;
      case 'division':
        $resultado = $num1 / $num2;
        break;
      case 'modulo':
        $resultado = $num1 % $num2;
        break;

      case 'incremento':

        $num1++;
        $resultado = $num1;

        echo "El número 2 ha sido omitido<br><br>";
        break;

      case 'decremento':
        $num1--;
        $resultado = $num1;
        echo "El número 2 ha sido omitido<br><br>";
        break;
    }

    echo "El resultado es $resultado";
  }


?>