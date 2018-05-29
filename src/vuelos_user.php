<?php  
session_start();

$cons_usuario="alan";
$cons_contra="alan1234";
$cons_base_datos="sistemagestionvuelos";
$cons_equipo="127.0.0.1";

$obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
if(!$obj_conexion)
{
  echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
}
else
{
  //echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
}

/* ejemplo de una consulta */

$var_consulta= "select * from vuelos;";
$var_resultado = $obj_conexion->query($var_consulta);



?>

<!DOCTYPE html>
<html>
<head>


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">




  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Sistema de Gestion de Vuelos</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="../index_user.php">Inicio</a></li>
        <li class="active"><a href="#">Vuelos</a></li>
        <li><a href="contacto_user.php">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav> 


</head>
<body>

  <div class="container">
    <h2>Table</h2>
    <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
    <div class="table-responsive">          
      <table class="table">
        <thead style="background-color:gray; ">
          <tr>
            <th>ID vuelo</th>
            <th>Aerolinea</th>
            <th>Origen</th>
            <th>Salida</th>
            <th>Llegada</th>
            <th>Destino</th>
            <th>Boletos</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          while ($row = mysqli_fetch_array($var_resultado)) {
            print("
              <tr>
              <td>".$row["Id_vuelo"]."</td>
              <td>".$row["aerolinea"]."</td>
              <td>".$row["origen"]."</td>
              <td>".$row["salida"]."</td>
              <td>".$row["llegada"]."</td>
              <td>".$row["destino"]."</td>
              <td>".$row["boletos"]."</td>
              </tr>
              ");
          }

          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</body>