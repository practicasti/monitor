<?php

include('mon-config.php');

//conexion a bbdd
function connect_bbdd(){

#Conectamos con MySQL
$conexion = mysql_connect("$BBDD_HOST","$BBDD_USER","$BBDD_PASSWD")
or die ("Fallo en el establecimiento de la conexión");

return $conexion;
}

//funcion autenticar

?>