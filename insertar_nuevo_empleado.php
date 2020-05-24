<?php session_start();
require_once("pooh.php");
if(isset($_POST['save_empleado'])){
  $folio = $_POST['folio'];
  $nombre = $_POST['nombre'];
  $edad = $_POST['edad'];
  $puesto = $_POST['tipo'];
  $ese="INSERT INTO usuarios(folio_asginado,nombre_completo, edad, puesto) VALUES('$folio','$nombre','$edad','$puesto')";
  $ejecut=mysqli_query($mimir,$ese);
  if($ejecut==TRUE){
    echo '<script type="text/javascript">alert("Guardado","Colaborador agregad@ satisfactoriamente","success")</script>';
  }
  $mimir->close();
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>
 <body>
   a
 </body>
 </html>