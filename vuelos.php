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

  <link rel="stylesheet" type="text/css" href="css/aerolinea.css">




  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html">Sistema de Gestion de Vuelos</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Vuelos</a></li>
        <li><a href="contacto.html">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#my_signup"><span class="glyphicon glyphicon-user"></span> Registrar</a></li>
        <li><a href="#" data-toggle="modal" data-target="#my_login"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</a></li>
      </ul>
    </div>
  </nav> 

  <div id="my_signup" class="modal fade" role="dialog">
    <form class="modal-content" action="../singup.php" name="singup" method="post">
      <div class="container">
        <span class="close" title="Close Modal" data-dismiss="modal">&times;</span>
      </div>
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="email"><b>Nombre</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>
        <label for="email"><b>Apellido Paterno</b></label>
        <input type="text" placeholder="Enter First Name" name="a_paterno" required>
        <label for="email"><b>Apellido Materno</b></label>
        <input type="text" placeholder="Enter Second Name" name="a_materno" required>
        <label for="email"><b>Edad</b></label >
        <input type="text" placeholder="Enter Age" name="age" required maxlength="2">
        <label for="email"><b>Sexo</b></label>
        <input type="text" placeholder="Enter your sex" name="sex" required maxlength="1">
        <label for="email"><b>Tipo de Sangre</b></label>
        <input type="text" placeholder="Enter your Blood Type" name="blood" required>
        <label for="email"><b>RFC</b></label >
        <input type="text" placeholder="Enter your RFC" name="rfc" required maxlength="13">
        <label for="email"><b>Correo</b></label>
        <input type="text" placeholder="example@email.com" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn" name="submit">Sign Up</button>
        </div>
      </div>
    </form>
  </div>

  <div id="my_login" class="modal" >
   <form class="modal-content animate" action="./login.php" name="login" method="post">
    <div class="imgcontainer">
      <span class="close" title="Close Modal" data-dismiss="modal">&times;</span>
      <img src="images/images.png" alt="Avatar" class="avatar" style="max-width: 100%;">
    </div>

    <div class="container">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" name="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" data-dismiss="modal" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
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
            <th>Comprar</th>
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
              <td><form action='./boletos.php' name='singup' method='post'><button type= 'submit' name='vuelo' value=".$row["Id_vuelo"].">Disponible</button></form></td>

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