<?php  
	//var_dump($_POST);

//header ("");
$pagina_anterior=$_SERVER['HTTP_REFERER'];


$name = $_POST["name"];
$a_paterno = $_POST["a_paterno"];
$a_materno = $_POST["a_materno"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$blood = $_POST["blood"];
$rfc = $_POST["rfc"];
$email = $_POST["email"];

$opciones = [
    'cost' => 10,
    'salt' => "B0edRmlY/xIMEvu0TUY3cu",
];

$psw =  password_hash( $_POST["psw"], PASSWORD_DEFAULT, $opciones);
$psw_repeat = password_hash($_POST["psw-repeat"],PASSWORD_DEFAULT, $opciones);

var_dump( $_POST["psw"]);
var_dump($psw);
var_dump( $_POST["psw-repeat"]);
var_dump($psw_repeat);


if ($psw==$psw_repeat) {
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

	$var_consulta= "insert into usuarios values('', '".$name."', '".$a_paterno."', '".$a_materno."', '".$email."', '".$age."', '".$sex."', '".$blood."', '".$rfc."', '".$psw."');";
	$var_resultado = $obj_conexion->query($var_consulta);
	header("Location: ".$pagina_anterior);
}else{
	echo "Contraseña erronea";
}


?>