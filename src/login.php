<?php  
session_start();
if (isset($_POST["submit"])) {
	$pagina_anterior=$_SERVER['HTTP_REFERER'];

	$email = $_POST["email"];
	$psw = $_POST["psw"];

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
		echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
	}

	/* ejemplo de una consulta */

	$var_consulta= "select * from usuarios;";
	$var_resultado = $obj_conexion->query($var_consulta);
	while ($row = mysqli_fetch_array($var_resultado)) {
		if ($email==$row["email"]){
			if (password_verify ( $psw,$row["pass"])) {
				$_SESSION["id_user"]=$row["id_usuario"];
				$_SESSION["name"]=$row["nombre"];
				$_SESSION["apaterno"]=$row["ap_paterno"];
				$_SESSION["amaterno"]=$row["ap_materno"];
				$_SESSION["email"]=$row["email"];
				$_SESSION["edad"]=$row["edad"];
				$_SESSION["sexo"]=$row["sexo"];
				$_SESSION["sangre"]=$row["tipo_sangre"];
				$_SESSION["RFC"]=$row["RFC"];
				$_SESSION["pass"]=$row["pass"];
				echo $pagina_anterior;
				$pagina_anterior = str_replace(".php", "_user.php", $pagina_anterior);
				$pagina_anterior = str_replace(".html", "_user.php", $pagina_anterior);

				echo $pagina_anterior;
				header("Location: ".$pagina_anterior);
			}else{
				echo "Contrseña mala";
			}
		}
	}
	mysqli_close($obj_conexion);
}else{
	header("Location: ".$pagina_anterior);
}

?>
