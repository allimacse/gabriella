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
        <li><a href="#" data-toggle="modal" data-target="#my_perfil"><span class="glyphicon glyphicon-user"></span>
          <?php  echo $_SESSION["name"]; ?></a></li>
      </ul>
    </div>
  </nav> 

<div id="my_perfil" class="modal" >
   <form class="modal-content animate" action="./logout.php" name="perfil" method="post">
    <div class="imgcontainer">
      <span class="close" title="Close Modal" data-dismiss="modal">&times;</span>
      <img src="images/images.png" alt="Avatar" class="avatar" style="max-width: 100%;">
    </div>


    <div class="container" style="background-color:#f1f1f1;">
      <button type="button" name="perfil" >Perfil</button>
      <button type="submit" class="cancelbtn">Salir</button>
    </div>
  </form>
</div>


</head>
<body>

  <div class="container">
    <h2>Vuelos</h2>                                                                                      
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