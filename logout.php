<?php  
session_start();
$pagina_anterior=$_SERVER['HTTP_REFERER'];
session_destroy();
$pagina_anterior = str_replace("_user.php", ".html", $pagina_anterior);
header("Location: ".$pagina_anterior);
exit();
?>
