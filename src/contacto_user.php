<?php  
session_start();

?>
<!DOCTYPE html>
<html>
<head>


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="../css/aerolinea.css">




  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Sistema de Gestion de Vuelos</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="../index_user.php">Inicio</a></li>
        <li><a href="vuelos_user.php">Vuelos</a></li>
        <li class="active"><a href="#">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav> 
  

</head>
<body>
  <div class="white" align="center">
    <div class="card">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="../images/gabo.jpg" alt="photo_gabo" style="max-width: all;">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>...</p>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="../images/alan.jpg" alt="photo_alan" style="max-width: all;">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>...</p>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="../images/gloria.jpg" alt="photo_gloria" style="max-width: all;">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>...</p>
        </div>
      </div>
    </div>
  </div>  
  </div>
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</body>