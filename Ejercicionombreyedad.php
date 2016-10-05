<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$nombre = isset($_POST['nombre']) ?  $_POST['nombre'] :  "";
$apellido = isset($_POST['apellido']) ?  $_POST['apellido'] :  "";
$edad = isset($_POST['edad']) ?  $_POST['edad'] :  0;
 ?>

<form name="calc" method="post">
  <p> Ingrese su nombre </p>
<input type="Text" name="nombre" value="<?php echo $nombre; ?>" size="20">
<br>
<p>Ingrese su apellido</p>
<input type="Text" name="apellido" value="<?php echo $apellido; ?>" size="20">
<br>
<p>Ingrese su edad</p>
<input type="Text" name="edad" value="<?php echo $edad; ?>" size="20">
<br>
<br>
<input type="submit" name="" value="Agregar" >
<br>
<br>
</form>

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
</body>
</html>
