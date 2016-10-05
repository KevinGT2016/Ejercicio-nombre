<?php


  if($nombre==""){
  echo  "Por favor ingrese su nombre <br>";
  }

  if($apellido==""){
    echo  "Por favor ingrese su apellido <br>";
  }

  if($edad==""){
    echo "Por favor ingrese su edad<br>";
  }elseif(!is_numeric($edad)) {
    echo "La edad debe ser numerica ";
  }elseif(($nombre!="")&&($apellido!="")&&($edad!="")){
  echo "<br>Holaa ".$nombre." ".$apellido." tu edad es de ".$edad." años<br>";
  if(($edad>0)&&($edad<18)) {
    echo "<br>Lo sentimos no puedes acceder a nuestra pagina por ser una persona con menor de edad!!!";
  }if(($edad>=18)&&($edad<100)) {
      echo "<br>Felicidades has entredo a nuestra pagina por ser una persona mayor con de edad!!<br>";
  }if($edad>=100){
    echo "Ya eres muy viejo para seguir navegando";
  }
}

 ?>
