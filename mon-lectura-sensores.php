<?php

include('mon-config.php');
?>


<html>


<meta http-equiv="refresh" content="10">
<?php
 
 

$link=0;

//función que conecta con la base de datos

function connect_db() { 


// Conectando, seleccionando la base de datos
//En caso de necesitar cambiar la información de la base de datos, se modifica aquí, siendo el primer valor la IP del servidor, el segundo el nombre de usuario y el último la contraseña
$link = mysql_connect(BBDD_HOST, BBDD_USER, '')
or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully'."<br>";
//Aquí se selecciona la base de datos deseada
mysql_select_db(BBDD_NAME) or die ('No se pudo seleccionar la base de datos');

} //end function

$ida=$_GET['ida'];


//llama a la función anterior, que conecta a la base de datos
connect_db();



if($ida==1){

//Realizar una consulta MySQL
//Selecciona el nombre de la tabla dentro de la base de datos. En este caso el nombre de la tabla es "arduino1".
//En caso de cambiar la tabla simplemente se sustituye "arduino1" por el nombre de la nueva tabla.
$query = "SELECT * FROM $BBDD_TABLE_ARDUINO1";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
echo ' Funciona'."<br>";

$link = connect_db();


//recoge los valores captados por el arduino-1 y los inserta en las columnas deseadas, en este caso "Temperatura", "Humedad" y "Corriente"
//Si se cambia ya sea el nombre de las columnas o el de la tabla, debe cambiarse aquí.
//Si se añaden nuevas variables captadas por la placa Arduino-1, también deben añadirse aquí.
//El if es para comprobar si recibe los datos del arduino o no.

if((!isset($_GET['temp']))||(!isset($_GET['hum']))||(!isset($_GET['rele']))) {
 
echo "error, no se ha recibido ninguna variable. <br>"; 
 
$temperatura=1;
$humedad=1;
$rele='Error de recepción';
 
$q = "INSERT INTO $BBDD_TABLE_ARDUINO1(Temperatura, Humedad, Corriente) VALUES('" .$temperatura."', '" .$humedad."' , '".$rele. "')";

$rs = mysql_query($q);
  
} else {
 
 $temperatura=$_GET['temp'];
 $humedad=$_GET['hum'];
 $rele=$_GET['rele'];
 
$q = "INSERT INTO $BBDD_TABLE_ARDUINO1(Temperatura, Humedad, Corriente) VALUES('" .$temperatura."', '" .$humedad."' , '".$rele. "')";

$rs = mysql_query($q);


if($rs == false)
 {
	echo '<p>Error al insertar los campos en la tabla.</p>';
}
else
{
	echo '<p>Los datos se han insertado correctamente.</p>';
}

} //end else principal

}

else if($ida==2){

// Realizar una consulta MySQL
//Selecciona el nombre de la tabla dentro de la base de datos. En este caso el nombre de la tabla es "arduino2".
//En caso de cambiar la tabla simplemente se sustituye "arduino2" por el nombre de la nueva tabla.
$query = "SELECT * FROM $BBDD_TABLE_ARDUINO2";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
echo ' Funciona'."<br>";

$link = connect_db();


//recoge los valores captados por el arduino2 y los inserta en las columnas deseadas, en este caso "Temperatura", "Humedad" y "Corriente"
//Si se cambia ya sea el nombre de las columnas o el de la tabla, debe cambiarse aquí.
//Si se añaden nuevas variables captadas por la placa Arduino2, también deben añadirse aquí.

if((!isset($_GET['temp']))||(!isset($_GET['hum']))||(!isset($_GET['rele']))) {
 
echo "error, no se ha recibido ninguna variable. <br>"; 
 
$temperatura=2;
$humedad=2;
$rele='Error de recepción';
 
$q = "INSERT INTO $BBDD_TABLE_ARDUINO2(Temperatura, Humedad, Corriente) VALUES('" .$temperatura."', '" .$humedad."' , '".$rele. "')";

$rs = mysql_query($q);
  
} else {
 
 $temperatura=$_GET['temp'];
 $humedad=$_GET['hum'];
 $rele=$_GET['rele'];
 
$q = "INSERT INTO $BBDD_TABLE_ARDUINO2(Temperatura, Humedad, Corriente) VALUES('" .$temperatura."', '" .$humedad."' , '".$rele. "')";

$rs = mysql_query($q);


if($rs == false)
 {
	echo '<p>Error al insertar los campos en la tabla.</p>';
}
else
{
	echo '<p>Los datos se han insertado correctamente.</p>';
}

} //end else principal


}

else if($ida==3){

// Realizar una consulta MySQL
//Selecciona el nombre de la tabla dentro de la base de datos. En este caso el nombre de la tabla es "arduino2".
//En caso de cambiar la tabla simplemente se sustituye "arduino3" por el nombre de la nueva tabla.
$query = "SELECT * FROM $BBDD_TABLE_ARDUINO3";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
echo ' Funciona'."<br>";

$link = connect_db();


//recoge los valores captados por el arduino3 y los inserta en las columnas deseadas, en este caso "Temperatura", "Humedad" y "Corriente"
//Si se cambia ya sea el nombre de las columnas o el de la tabla, debe cambiarse aquí.
//Si se añaden nuevas variables captadas por la placa Arduino3, también deben añadirse aquí.

if((!isset($_GET['temp']))||(!isset($_GET['hum']))||(!isset($_GET['rele']))) {
 
echo "error, no se ha recibido ninguna variable. <br>"; 
 
$temperatura=3;
$humedad=3;
$rele='Error de recepción';
 
$q = "INSERT INTO $BBDD_TABLE_ARDUINO3(Temperatura, Humedad, Corriente) VALUES('" .$temperatura."', '" .$humedad."' , '".$rele. "')";

$rs = mysql_query($q);
  
} else {
 
 $temperatura=$_GET['temp'];
 $humedad=$_GET['hum'];
 $rele=$_GET['rele'];
 
$q = "INSERT INTO $BBDD_TABLE_ARDUINO3(Temperatura, Humedad, Corriente) VALUES('" .$temperatura."', '" .$humedad."' , '".$rele. "')";

$rs = mysql_query($q);


if($rs == false)
 {
	echo '<p>Error al insertar los campos en la tabla.</p>';
}
else
{
	echo '<p>Los datos se han insertado correctamente.</p>';
}

} //end else principal

}

else if($ida==4){

//Realizar una consulta MySQL
//Selecciona el nombre de la tabla dentro de la base de datos. En este caso el nombre de la tabla es "arduino1".
//En caso de cambiar la tabla simplemente se sustituye "arduino4" por el nombre de la nueva tabla.
$query = "SELECT * FROM $BBDD_TABLE_ARDUINO4";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
echo ' Funciona'."<br>";

$link = connect_db();


//recoge los valores captados por el arduino4 y los inserta en las columnas deseadas, en este caso "Temperatura", "Humedad" y "Corriente"
//Si se cambia ya sea el nombre de las columnas o el de la tabla, debe cambiarse aquí.
//Si se añaden nuevas variables captadas por la placa Arduino4, también deben añadirse aquí.
//El if es para comprobar si recibe los datos del arduino o no.

if((!isset($_GET['temp']))||(!isset($_GET['hum']))||(!isset($_GET['rele']))) {
 
echo "error, no se ha recibido ninguna variable. <br>"; 
 
$temperatura=4;
$humedad=4;
$rele='Error de recepción';
 
$q = "INSERT INTO $BBDD_TABLE_ARDUINO4(Temperatura, Humedad, Corriente) VALUES('" .$temperatura."', '" .$humedad."' , '".$rele. "')";

$rs = mysql_query($q);
  
} else {
 
 $temperatura=$_GET['temp'];
 $humedad=$_GET['hum'];
 $rele=$_GET['rele'];
 
$q = "INSERT INTO $BBDD_TABLE_ARDUINO4(Temperatura, Humedad, Corriente) VALUES('" .$temperatura."', '" .$humedad."' , '".$rele. "')";

$rs = mysql_query($q);


if($rs == false)
 {
	echo '<p>Error al insertar los campos en la tabla.</p>';
}
else
{
	echo '<p>Los datos se han insertado correctamente.</p>';
}

} //end else principal

}

else{

echo "ida incorrecto<br>";

}


?>

</html>
