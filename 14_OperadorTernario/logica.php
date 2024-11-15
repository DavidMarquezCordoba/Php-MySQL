<?php

  if (isset($_POST["enviando"])) {
    
    $edad = $_POST["edad_usuario"];

    //El operador ternario siempre se evalúa:
    // Condición ? Si es verdadero : Si es falso ;
    $resultado= $edad<18 ? "Eres menor de edad" : "Eres mayor de edad";

    echo $resultado;
  }




?>