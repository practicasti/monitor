<?php

/* 
 FILE NAME: 112-functions-general.php
 DESCRIPTION APP: Gestión PMAs - 112 CASTILLA Y LEÓN  
 AUTHOR: TELECOMUNICACIONES MERINO SA
*/

//get client ip
function get_client_ip() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}//end function

//funtion to manage generic error code
function manage_generic_error_code($error_code){
	
	msg_general_operation_failed ($erro_code);
	exit();
	
}//end function

//redirect function (instead header())
function url_redirection($url){
	echo '<META HTTP-EQUIV=REFRESH CONTENT="'.MON_RELOAD_TIME.'; '.$url.'">';
}//end function

//do ping to an ip and get true or false
function do_ping($ip=NULL){

//comprueba si se hace ping al host especificado
    $str = shell_exec("ping -n 1 -w 1 $ip");
	
	if (strpos($str, "recibidos = 0")) {//no ping request
		return false;
	} else {//yes ping request
		return true;
	}
} //end function

function get_public_ip(){
	$result=NULL;
	$result=file_get_contents('http://phihag.de/ip/');
	return $result;

} //end funcion

//get localhost ip linux
function get_localhost_ip_linux() {

	return getHostByName(CP_LOCAL_HOSTNAME);

} //end function

//get localhost ip windows
function get_localhost_ip_windows() {

	return getHostByName(getHostName());

} //end function

//get localhost network
function get_localhost_network ($localhost_ip){

	$localhost_ip_explode=explode(".", $localhost_ip);
		
	//first ip number equal to 192, then, return 1 (mercedes)
	if (($localhost_ip_explode[0] == "192") && ($localhost_ip_explode[1] == "168") && ($localhost_ip_explode[2] == "1")) return 1;
	
	//first ip number equal to 172, then, return 2 (volvo)
	if (($localhost_ip_explode[0] == "172") && ($localhost_ip_explode[1] == "112") && ($localhost_ip_explode[2] == "112")) return 2;
	
	return 0;

} //end function


?>