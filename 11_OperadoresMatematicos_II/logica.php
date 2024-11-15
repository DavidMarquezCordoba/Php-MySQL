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
    }

    echo "El resultado es $resultado";
  }

?>

<!-- La idea de este ejercicio es que practiquemos el uso de funciones y la creación de 
 parámetros para un uso más adecuado y correcto de cara al futuro -->

 <!-- Se ha dividido el ejercicio en dos partes, en una tenemos el formulario que es un html y en otro un fichero 
  php que conectaremos a través del atributo "action" del form incluyendo la ruta de php -->