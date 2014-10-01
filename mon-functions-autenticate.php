
<?php
function comprobar_sesion($value){

	if ($value != 1) { 
		//si no existe, envio a la página de autentificacion 
		url_redirection(MON_REDIRECT."mon-dashboard.php");
		//ademas salgo de este script 
	}

}


function comprobar_admin($value){

	if ($value == 1){//es admin
	
	return true;
	
	}else{//es user
	
	return false;
	
	}

}

?>