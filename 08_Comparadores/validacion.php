<!-- Podemos traernos el codigo html del index para mantener los colores -->
<style>
    h1 {
        text-align: center;
    }

    table {
        background-color: #FFC;
        padding: 5px;
        border: #666 5px solid;
    }

    .no_validado {
        font-size: 18px;
        color: #F00;
        font-weight: bold;
    }

    .validado {
        font-size: 18px;
        color: #0C3;
        font-weight: bold;
    }
</style>


<!-- Aquí creamos la lógica para el envío de información entre ficheros externos -->

<?php
  // Añadimos la variable que almacenará el nombre y la edad que el usuario rellene en el formulario
  if (isset($_POST["enviando"])) {
    
    $usuario=$_POST["nombre_usuario"];
    $edad=$_POST["edad_usuario"];

    if ($usuario=="David") {

      if ($edad >=18) {
        echo "<span class='validado'>Bienvenido $usuario</span>";
      } else {
        echo "Lo siento $usuario, pero <span class='no_validado'>debes ser mayor de edad</span> para acceder";
      }
      
    } else {
      echo "Usuario no encontrado en la BBDD, Acceso <span class='no_validado'>DENEGADO</span>";
    }
  }
?>