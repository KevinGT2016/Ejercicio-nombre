<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
require_once("funcion.php");
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


</body>
</html>
