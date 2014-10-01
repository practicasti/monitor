<?php

//Se marcan los límites de temperatura y humedad.
//En caso de necesitar cambiarlos, se cambian aquí.
	
	//Limites inferiores y superiores arduino1
	$temp_sup_1=20;
	$hum_sup_1=80;

	$temp_inf_1=12;
	$hum_inf_1=25;
	
	//Limites inferiores y superiores arduino2
	$temp_sup_2=30;
	$hum_sup_2=80;
	
	$temp_inf_2=2;
	$hum_inf_2=52;

	//Limites inferiores y superiores arduino3
	$temp_sup_3=30;
	$hum_sup_3=80;
	
	$temp_inf_3=12;
	$hum_inf_3=33;
	
	//Limites inferiores y superiores arduino3
	$temp_sup_4=30;
	$hum_sup_4=80;
	
	$temp_inf_4=14;
	$hum_inf_4=0;


//Función que muestra la primera linea de información arduino1, esta función además de representar 
//la información en la aplicación nos hace la comprobación de que los parametros están dentro de los
//límites establecidos y nos escribe en la base de datos los posibles fallos que se produzcan.
function show_linea_1($BBDD_NAME, $BBDD_TABLE_ARDUINO1, $conexion){

#Seleccionamos la base de datos a utilizar
mysql_select_db("$BBDD_NAME", $conexion)
or die("Error en la selección de la base de datos");

#Efectuamos la consulta SQL
$tabla = mysql_query ("select * from $BBDD_TABLE_ARDUINO1" )
or die("Error en la consulta SQL");

//Asignación del ultimo valor de la tabla a las variables
while ($registro = mysql_fetch_array($tabla)){
   
    $Time=$registro['TIME'];
    $temperatura= $registro['Temperatura'];
    $humedad= $registro['Humedad'];
    $corriente= $registro['Corriente'];
    
}
	
//Iniciación de la función que muestra los datos
        show_results_bbdd_sensores1($temperatura,$humedad, $corriente, $Time);
        
//Si se desea modificar estas variables debe hacerse al principio del script donde están declaradas.

    global $temp_sup_1;
	global $hum_sup_1;
	global $temp_inf_1;
	global $hum_inf_1;

//Se comprueba que los valores se encuentran dentro de los limites fijados al comienzo del script.    
        if($temperatura>$temp_sup_1){
			$variable_error="Temperatura(Superior).";
			$valor=$temperatura;
			sonido();
			//escribe el fallo en la base de datos.
            registrar_error1($variable_error,$Time,$valor);	
        }
		if($temperatura<$temp_inf_1){
			$variable_error="Temperatura(Inferior).";
			$valor=$temperatura;   
            sonido();
            registrar_error1($variable_error,$Time,$valor);
		}
		if($humedad>$hum_sup_1){
			$variable_error="Humedad(Superior).";
			$valor=$humedad;
			sonido();
            registrar_error1($variable_error,$Time,$valor);
           }
		if($humedad<$hum_inf_1){
			$variable_error="Humedad(Inferior).";
			$valor=$humedad;   
            sonido();
            registrar_error1($variable_error,$Time,$valor);
        }
        if($corriente=='CAIDO'){
            $variable_error='Corriente';
			$valor=$corriente;	
            sonido();
            registrar_error1($variable_error,$Time,$valor);
        }

#Cerramos la conexión con la base de datos
mysql_close();

}

//Función que muestra la segunda linea de información arduino2
function show_linea_2($BBDD_NAME, $BBDD_TABLE_ARDUINO2, $conexion){

#Seleccionamos la base de datos a utilizar
mysql_select_db("$BBDD_NAME", $conexion)
or die("Error en la selección de la base de datos");

#Efectuamos la consulta SQL
$tabla = mysql_query ("select * from $BBDD_TABLE_ARDUINO2" )
or die("Error en la consulta SQL");

//Se asigna a cada variable el ultimo valor de la base de datos
while ($registro = mysql_fetch_array($tabla)){
   
    $Time=$registro['TIME'];
    $temperatura= $registro['Temperatura']; 
    $humedad= $registro['Humedad'];  
    $corriente= $registro['Corriente'];  

   
}

//Muestra los valores captados
	show_results_bbdd_sensores2($temperatura,$humedad,$corriente);
        
    global $temp_sup_2;
	global $hum_sup_2;
	global $temp_inf_2;
	global $hum_inf_2;

        
//Comprueba que dichos valores se encuentran en los limites marcados al comienzo del script        
        if($temperatura>$temp_sup_2){
			$variable_error="Temperatura(Superior).";
			$valor=$temperatura;
			sonido();
            registrar_error2($variable_error,$Time,$valor);
           }
		if($temperatura<$temp_inf_2){
			$variable_error="Temperatura(Inferior).";
			$valor=$temperatura;   
            sonido();
            registrar_error2($variable_error,$Time,$valor);
		}
		if($humedad>$hum_sup_2){
			$variable_error="Humedad(Superior).";
			$valor=$humedad;
			sonido();
            registrar_error2($variable_error,$Time,$valor);
           }
		if($humedad<$hum_inf_2){
			$variable_error="Humedad(Inferior).";
			$valor=$humedad;   
            sonido();
            registrar_error2($variable_error,$Time,$valor);
        }
        if($corriente=='CAIDO'){
            $variable_error='Corriente';
			$valor=$corriente;	
            sonido();
            registrar_error2($variable_error,$Time,$valor);
        }
#Cerramos la conexión con la base de datos
mysql_close();

}

//Función que muestra la tercera linea de información arduino3
function show_linea_3($BBDD_NAME, $BBDD_TABLE_ARDUINO3, $conexion){

#Seleccionamos la base de datos a utilizar
mysql_select_db("$BBDD_NAME", $conexion)
or die("Error en la selección de la base de datos");

#Efectuamos la consulta SQL
$tabla = mysql_query ("select * from $BBDD_TABLE_ARDUINO3" )
or die("Error en la consulta SQL");

//Se asigna a cada variable el ultimo valor de la base de datos
while ($registro = mysql_fetch_array($tabla)){
   
    $Time=$registro['TIME'];
    $temperatura= $registro['Temperatura']; 
    $humedad= $registro['Humedad'];  
    $corriente= $registro['Corriente'];  

}

//Muestra los valores captados en la aplicación.
	show_results_bbdd_sensores3($temperatura,$humedad,$corriente);
        
    global $temp_sup_3;
	global $hum_sup_3;
	global $temp_inf_3;
	global $hum_inf_3;

        
//Comprueba que dichos valores se encuentran en los limites marcados al comienzo del script        
         if($temperatura>$temp_sup_3){
			$variable_error="Temperatura(Superior).";
			$valor=$temperatura;
			sonido();
            registrar_error3($variable_error,$Time,$valor);
           }
		if($temperatura<$temp_inf_3){
			$variable_error="Temperatura(Inferior).";
			$valor=$temperatura;   
            sonido();
            registrar_error3($variable_error,$Time,$valor);
		}
		if($humedad>$hum_sup_3){
			$variable_error="Humedad(Superior).";
			$valor=$humedad;
			sonido();
            registrar_error3($variable_error,$Time,$valor);
           }
		if($humedad<$hum_inf_3){
			$variable_error="Humedad(Inferior).";
			$valor=$humedad;   
            sonido();
            registrar_error3($variable_error,$Time,$valor);
        }
        if($corriente=='CAIDO'){
            $variable_error='Corriente';
			$valor=$corriente;	
            sonido();
            registrar_error3($variable_error,$Time,$valor);
        }

#Cerramos la conexión con la base de datos
mysql_close();

}

//Función que muestra la tercera linea de información arduino4 (Hospitales)
function show_linea_4($BBDD_NAME, $BBDD_TABLE_ARDUINO4, $conexion){

#Seleccionamos la base de datos a utilizar
mysql_select_db("$BBDD_NAME", $conexion)
or die("Error en la selección de la base de datos");

#Efectuamos la consulta SQL
$tabla = mysql_query ("select * from $BBDD_TABLE_ARDUINO4" )
or die("Error en la consulta SQL");

//Asignación del ultimo valor de la tabla a las variables
while ($registro = mysql_fetch_array($tabla)){
   
    $Time=$registro['TIME'];
    $temperatura= $registro['Temperatura'];
    $humedad= $registro['Humedad'];
    $corriente= $registro['Corriente'];
    
}
	
//Iniciación de la función que muestra los datos
        show_results_bbdd_sensores4($temperatura,$humedad, $corriente, $Time);
        
//Si se desea modificar estas variables debe hacerse al principio del script donde están declaradas.

    global $temp_sup_4;
	global $hum_sup_4;
	global $temp_inf_4;
	global $hum_inf_4;

//Se comprueba que los valores se encuentran dentro de los limites fijados al comienzo del script.    
         if($temperatura>$temp_sup_4){
			$variable_error="Temperatura(Superior).";
			$valor=$temperatura;
			sonido();
            registrar_error4($variable_error,$Time,$valor);
           }
		if($temperatura<$temp_inf_4){
			$variable_error="Temperatura(Inferior).";
			$valor=$temperatura;   
            sonido();
            registrar_error4($variable_error,$Time,$valor);
		}
		if($humedad>$hum_sup_4){
			$variable_error="Humedad(Superior).";
			$valor=$humedad;
			sonido();
            registrar_error4($variable_error,$Time,$valor);
           }
		if($humedad<$hum_inf_4){
			$variable_error="Humedad(Inferior).";
			$valor=$humedad;   
            sonido();
            registrar_error4($variable_error,$Time,$valor);
        }
        if($corriente=='CAIDO'){
            $variable_error='Corriente';
			$valor=$corriente;	
            sonido();
            registrar_error4($variable_error,$Time,$valor);
        }
#Cerramos la conexión con la base de datos
mysql_close();

}


//Función que muestra los datos de la base de datos en modo tabla,"linea 1", "linea 2" y "linea 3"
function show_results_bbdd_sensores1($temperatura, $humedad, $corriente){

	global $temp_sup_1;
	global $hum_sup_1;
	global $temp_inf_1;
	global $hum_inf_1;

?>
				
                     
						<table width="100%">
							<tr><td style="width:55%">
							   Temp.: <?php print $temperatura?> ºC 
							</td><td align="right" style="width:45%">
								<button type="button" class="btn btn-white" style="width:100%"><?php print $temp_inf_1?> ÷ <?php print $temp_sup_1?>ºC</button>
							</td></tr>
							<tr><td style="width:55%">							
								Hum.: <?php print $humedad?> %
							</td><td align="right" style="width:45%">
									<button type="button" class="btn btn-white" style="width:100%"><?php print $hum_inf_1?> ÷ <?php print $hum_sup_1?>%</button>
							</td></tr>
							<tr><td style="width:55%">													
								Corr.: <?php print $corriente?>
							</td><td align="right" style="width:45%">
								<button type="button" class="btn btn-white" style="width:100%">ACTIVO</button>
							</td></tr>
						</table>
  
                        
<?php
}

function show_results_bbdd_sensores2($temperatura, $humedad, $corriente){

	global $temp_sup_2;
	global $hum_sup_2;
	global $temp_inf_2;
	global $hum_inf_2;

?>
				
                     
						<table width="100%">
							<tr><td style="width:55%">
							   Temp.: <?php print $temperatura?> ºC 
							</td><td align="right" style="width:45%">
								<button type="button" class="btn btn-white" style="width:100%"><?php print $temp_inf_2?> ÷ <?php print $temp_sup_2?>ºC</button>
							</td></tr>
							<tr><td style="width:55%">							
								Hum.: <?php print $humedad?> %
							</td><td align="right" style="width:45%">
									<button type="button" class="btn btn-white" style="width:100%"><?php print $hum_inf_2?> ÷ <?php print $hum_sup_2?>%</button>
							</td></tr>
							<tr><td style="width:55%">													
								Corr.: <?php print $corriente?>
							</td><td align="right" style="width:45%">
								<button type="button" class="btn btn-white" style="width:100%">ACTIVO</button>
							</td></tr>
						</table>
  
                        
<?php
}

function show_results_bbdd_sensores3($temperatura, $humedad, $corriente){

	global $temp_sup_3;
	global $hum_sup_3;
	global $temp_inf_3;
	global $hum_inf_3;

?>
				
                     
						<table width="100%">
							<tr><td style="width:55%">
							   Temp.: <?php print $temperatura?> ºC 
							</td><td align="right" style="width:45%">
								<button type="button" class="btn btn-white" style="width:100%"><?php print $temp_inf_3?> ÷ <?php print $temp_sup_3?>ºC</button>
							</td></tr>
							<tr><td style="width:55%">							
								Hum.: <?php print $humedad?> %
							</td><td align="right" style="width:45%">
									<button type="button" class="btn btn-white" style="width:100%"><?php print $hum_inf_3?> ÷ <?php print $hum_sup_3?>%</button>
							</td></tr>
							<tr><td style="width:55%">													
								Corr.: <?php print $corriente?>
							</td><td align="right" style="width:45%">
								<button type="button" class="btn btn-white" style="width:100%">ACTIVO</button>
							</td></tr>
						</table>
  
                        
<?php
}

function show_results_bbdd_sensores4($temperatura, $humedad, $corriente){

	global $temp_sup_4;
	global $hum_sup_4;
	global $temp_inf_4;
	global $hum_inf_4;

?>
				
                     
						<table width="100%">
							<tr><td style="width:55%">
							   Temp.: <?php print $temperatura?> ºC 
							</td><td align="right" style="width:45%">
								<button type="button" class="btn btn-white" style="width:100%"><?php print $temp_inf_4?> ÷ <?php print $temp_sup_4?>ºC</button>
							</td></tr>
							<tr><td style="width:55%">							
								Hum.: <?php print $humedad?> %
							</td><td align="right" style="width:45%">
									<button type="button" class="btn btn-white" style="width:100%"><?php print $hum_inf_4?> ÷ <?php print $hum_sup_4?>%</button>
							</td></tr>
							<tr><td style="width:55%">													
								Corr.: <?php print $corriente?>
							</td><td align="right" style="width:45%">
								<button type="button" class="btn btn-white" style="width:100%">ACTIVO</button>
							</td></tr>
						</table>
  
                        
<?php
}



//Función que reproduce un archivo .mp3 en caso de que se cumplan ciertas condiciones. Alarma.
function sonido(){
    ?>                  
   
   <bgsound src="alarma.mp3" loop="infinite" balance="10" volume="15"></bgsound> 
   
    <?php  
}

//Función que muestra el mensaje con el tipo de error y la hora del ocurrido, almacenado en una segunda tabla de la base de datos.
function error(){
    
    //Si se desea modificar estas variables debe hacerse al principio del script donde están declaradas.

    global $BBDD_NAME;
    global $BBDD_HOST;
    global $BBDD_USER;
    global $BBDD_PASSWD;
    global $BBDD_TABLE_EXCEPTIONS;
    
$conexion=connect_bbdd_sensores($BBDD_HOST, $BBDD_USER, $BBDD_PASSWD);
$tabla = mysql_query ("select * from $BBDD_TABLE_EXCEPTIONS" )
or die("Error en la consulta SQL");

    $mensaje_error=0;
    
    //Asigna el ultimo valor de la base de datos. Si no exite, el mensaje de error será "0".
while ($registro = mysql_fetch_array($tabla)){
   
    $tip_error= $registro['Error'];
    $hora=$registro['Hora'];
	$dispositivo=$registro['Dispositivo'];
	
	$mensaje_error=$hora.". Fallo de ".$tip_error." en ".$dispositivo;
	
}
//En caso de que el error sea "0", significará que no han existido errores previos y mostrará un mensaje indicandolo.
    if($mensaje_error==0){
        ?>
       <font face="arial" size="5" color="4F4F4B"> No existen registros de excepciones </font>
       <?php
    }
    else{
    ?>
   <font face="arial" size="5" color="4F4F4B"> <?php print $mensaje_error; ?> </font>
   <?php
    }
}

//Función que registra en la tabla de errores un mensaje con el tipo de fallo y el instante en el que sucede en el Arduino1.
function registrar_error1($variable_error,$Time,$valor){
    
	global $BBDD_TABLE_EXCEPTIONS;
	mysql_query("INSERT INTO $BBDD_TABLE_EXCEPTIONS (Hora, Error, Dispositivo, Valor) VALUES ('".$Time."',  '".$variable_error."', 'Arduino1','".$valor."' )");

			
}
//Función que registra en la tabla de errores un mensaje con el tipo de fallo y el instante en el que sucede en el Arduino2.
function registrar_error2($variable_error,$Time,$valor){
    
	global $BBDD_TABLE_EXCEPTIONS;
	mysql_query("INSERT INTO $BBDD_TABLE_EXCEPTIONS (Hora, Error, Dispositivo, Valor) VALUES ('".$Time."',  '".$variable_error."', 'Arduino2','".$valor."' )");
			
}
//Función que registra en la tabla de errores un mensaje con el tipo de fallo y el instante en el que sucede en el Arduino3.
function registrar_error3($variable_error,$Time,$valor){
    
	global $BBDD_TABLE_EXCEPTIONS;
	mysql_query("INSERT INTO $BBDD_TABLE_EXCEPTIONS (Hora, Error, Dispositivo, Valor) VALUES ('".$Time."',  '".$variable_error."', 'Arduino3','".$valor."' )");

}
//Función que registra en la tabla de errores un mensaje con el tipo de fallo y el instante en el que sucede en el Arduino4.
function registrar_error4($variable_error,$Time,$valor){
    
	global $BBDD_TABLE_EXCEPTIONS;
	mysql_query("INSERT INTO $BBDD_TABLE_EXCEPTIONS (Hora, Error, Dispositivo, Valor) VALUES ('".$Time."',  '".$variable_error."', 'Arduino4','".$valor."' )");
	
			
}
?>
