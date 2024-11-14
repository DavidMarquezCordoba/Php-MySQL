<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p>&nbsp;</p>
  <form name="form1" method="post" action="">
    <p>
      <label for="num1"></label>
      <input type="text" name="num1" id="num1">
    </p>
    <p>
      <label for="num2"></label>
      <input type="text" name="num2" id="num2">
    </p>
    <p>
      <label for="operacion"></label>
      <select name="operacion" id="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
        <option value="modulo">Módulo</option>
      </select>
    </p>
    <p>
      <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
    </p>
  </form>
<p>&nbsp;</p>


<?php

  if(isset($_POST["button"])){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $operacion=$_POST["operacion"];

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
</body>
</html>