<?php include('functions_autenticate.php'); ?>
<?php
 

session_start(); 
comprobar_sesion($_SESSION['flag_user_logon']);


$_SESSION["flag_user_logon"]=0;

session_destroy(); 

header("Location: http://localhost/monitor/index.php");


?>