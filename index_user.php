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

  <link rel="stylesheet" href="./css/aerolinea.css" type="text/css" media="all" />


  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Sistema de Gestion de Vuelos</a>
      </div>
      <ul class="nav navbar-nav">        
        <li><a href="src/vuelos_user.php">Vuelos</a></li>
        <li><a href="src/contacto_user.php">Contacto</a></li>
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
  <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/avion.jpg" alt="Los Angeles" >
      </div>

      <div class="item">
        <img src="images/avion.jpg" alt="Chicago">
      </div>

      <div class="item">
        <img src="images/avion.jpg" alt="New York">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container">
    <!-- Page Content goes here -->
  </div>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</body>
</html>