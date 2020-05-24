<?php
require_once("pooh.php");
 ?>
 <html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/principal.css">
    <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
    <title>Portal de Software Inc - Tabla colaboradores </title>   
  </head>
  <body class="body">
  <div class="container">
      <div class="text-center">
        <div class="table-responsive">
          <table border="2" class="table table-sm" style="background-color: #f1615f;">
            <thead>
              <tr>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Id</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Folio</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Nombre</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Edad</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Puesto</center></th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $consulta = "SELECT * FROM usuarios";
                  $result= mysqli_query($mimir,$consulta);
                  while ($mostrar=mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <th scope="row" style="color:#000000; font-size:20px;"><?php echo $mostrar['id']?></th>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['folio_asignado']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['nombre_completo']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['edad']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['puesto']?></center></td>
                      
                    </tr>
                    <?php
                  }
                    ?>
            </tbody>
          </table>
          <div class="btn-group">
            <center><a href="nueva_sucursal"><button type="submit" class="button mb-2"> <img src="flaticons/nueva.svg" style="width:40px; height:40px;"> Nueva sucursal</button></a></center>
            <center><a href="sucursal_direccion"><button type="submit" class="button mb-2"> <img src="flaticons/nueva_direccion.svg" style="width:40px; height:40px;"> Direcciones</button></a></center>
            <center><a href="index"><button type="submit" class="button mb-2"> <img src="flaticons/return.svg" style="width:40px; height:40px;"> Regresar</button></a></center>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
