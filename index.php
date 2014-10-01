<?php 

include('mon-functions-bbdd.php'); 
include('mon-functions-general.php');
include('mon-config.php');
include('api_include.php');
include('mon-functions.php');

session_start();

// Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pass']) && !empty($_POST['pass'])) {

// Si entramos es que todo se ha realizado correctamente
	$user_signin=$_POST['user'];
	$pass_signin=$_POST['pass'];
	
	$conexion=connect_bbdd();
	$valor=autenticar_usuario(BBDD_NAME, BBDD_TABLE_USERS, $conexion, $user_signin, $pass_signin);
	
	if ($valor[0] == true){
	
	$_SESSION['flag_user_logon']= 1;
	$_SESSION['Admin_flag']=$valor[1];
	
	//redirect dashboard
	//url_redirection(MON_REDIRECT."mon-arduino.php");
	echo "redirect mon-arduino.php";
	
	}else{
	
	//redirect error login
	//url_redirection(MON_REDIRECT."mon-signin-error.php");	
	echo "redirect mon-signin-error.php";
	}	
	
} else {

	/* Redirect login page */
	url_redirection(MON_REDIRECT."mon-signin.php");	
	//echo "redirect mon-signin.php";
	
}
?>