<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

  //Creación clase coche
  class Coche {

    //Atributos
    private int $ruedas;
    private string $color;
    private int $motor;

    //Constructor por defecto - Estado inicial de los objetos
    public function __construct(){
      $this->ruedas=4;
      $this->color="";
      $this->motor=1600;
    }

    function arrancar(){
      echo "He arrancado <br>";
    }

    function girar(){
      echo  "Estoygirando <br>";
    }

    function frenar(){
      echo "Estoy frenando <br>";
    }

  }

  //Instanciar coche
  $miCoche = new Coche();

  $miCoche->arrancar();
  
  echo $miCoche->$ruedas;

?>
</body>
</html>


