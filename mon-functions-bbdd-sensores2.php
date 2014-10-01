<?php
						   
	//Se marcan los límites de temperatura y humedad.
	//En caso de necesitar cambiarlos, se cambian aquí.
		
		//Limites inferiores y superiores arduino1
		$temp_sup_1=15;
		$hum_sup_1=80;

		$temp_inf_1=5;
		$hum_inf_1=25;
		
		//Limites inferiores y superiores arduino2
		$temp_sup_2=30;
		$hum_sup_2=80;
		
		$temp_inf_2=2;
		$hum_inf_2=50;

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
		
		function show_linea_sensor($BBDD_NAME, $BBDD_TABLE_ARDUINO, $conexion){

	#Seleccionamos la base de datos a utilizar
	mysql_select_db("$BBDD_NAME", $conexion)
	or die("Error en la selección de la base de datos");

	#Efectuamos la consulta SQL
	$tabla = mysql_query ("select * from $BBDD_TABLE_ARDUINO" )
	or die("Error en la consulta SQL");

	//Asignación del ultimo valor de la tabla a las variables
	while ($registro = mysql_fetch_array($tabla)){
	   
		$Time=$registro['TIME'];
		$temperatura= $registro['Temperatura'];
		$humedad= $registro['Humedad'];
		$corriente= $registro['Corriente'];
		
	}
		$dispositivo= $BBDD_TABLE_ARDUINO;

	if ($BBDD_TABLE_ARDUINO=="arduino1"){
			
			global $temp_sup_1;
			global $hum_sup_1;
			global $temp_inf_1;
			global $hum_inf_1;
			
			$variable_error = comprobar_error($temp_sup_1, $temp_inf_1, $hum_sup_1, $hum_inf_1, $Time, $temperatura, $humedad, $corriente, $dispositivo);
			
			//imprimir los datos de arduino en fondo verde o rojo
			if($variable_error=='0')	//color verde
			{
				?><header class="panel-heading bg-success font-bold" style="font-size:18px">CPD Merino</header>
					<div class="panel-body bg-success lter" style="font-size:15px ; text-align:left"><?php
						show_results_bbdd_sensores($temperatura, $humedad, $corriente, $temp_inf_1, $temp_sup_1, $hum_inf_1, $hum_sup_1);
				?>
					</div>
				<?php

			}
			else{					//color rojo
		
				?><header class="panel-heading bg-danger font-bold" style="font-size:18px">CPD Merino</header>
					<div class="panel-body bg-danger lter" style="font-size:15px ; text-align:left"><?php
						show_results_bbdd_sensores($temperatura, $humedad, $corriente, $temp_inf_1, $temp_sup_1, $hum_inf_1, $hum_sup_1);
				?>
					</div>
				<?php
		
				}
	}
	

	if ($BBDD_TABLE_ARDUINO=="arduino2"){

			global $temp_sup_2;
			global $hum_sup_2;
			global $temp_inf_2;
			global $hum_inf_2;
			
			$variable_error = comprobar_error($temp_sup_2, $temp_inf_2, $hum_sup_2, $hum_inf_2, $Time, $temperatura, $humedad, $corriente, $dispositivo);
			
			//imprimir los datos de arduino en fondo verde o rojo
			if($variable_error=='0')	//color verde
			{
				?><header class="panel-heading bg-success font-bold" style="font-size:18px">CPD Administración</header>
					<div class="panel-body bg-success lter" style="font-size:15px ; text-align:left"><?php
						show_results_bbdd_sensores($temperatura, $humedad, $corriente, $temp_inf_2, $temp_sup_2, $hum_inf_2, $hum_sup_2);
				?>
					</div>
				<?php

			}
			else{					//color rojo
		
				?><header class="panel-heading bg-danger font-bold" style="font-size:18px">CPD Administración</header>
					<div class="panel-body bg-danger lter" style="font-size:15px ; text-align:left"><?php
						show_results_bbdd_sensores($temperatura, $humedad, $corriente, $temp_inf_2, $temp_sup_2, $hum_inf_2, $hum_sup_2);
				?>
					</div>
				<?php
		
				}

	}

	if ($BBDD_TABLE_ARDUINO=="arduino3"){
	
			global $temp_sup_3;
			global $hum_sup_3;
			global $temp_inf_3;
			global $hum_inf_3;
			
			$variable_error = comprobar_error($temp_sup_3, $temp_inf_3, $hum_sup_3, $hum_inf_3, $Time, $temperatura, $humedad, $corriente, $dispositivo);
			
			//imprimir los datos de arduino en fondo verde o rojo
			if($variable_error=='0')	//color verde
			{
				?><header class="panel-heading bg-success font-bold" style="font-size:18px">WISP Lomas</header>
					<div class="panel-body bg-success lter" style="font-size:15px ; text-align:left"><?php
						show_results_bbdd_sensores($temperatura, $humedad, $corriente, $temp_inf_3, $temp_sup_3, $hum_inf_3, $hum_sup_3);
				?>
					</div>
				<?php

			}
			else{					//color rojo
		
				?><header class="panel-heading bg-danger font-bold" style="font-size:18px">WISP Lomas</header>
					<div class="panel-body bg-danger lter" style="font-size:15px ; text-align:left"><?php
						show_results_bbdd_sensores($temperatura, $humedad, $corriente, $temp_inf_3, $temp_sup_3, $hum_inf_3, $hum_sup_3);
				?>
					</div>
				<?php
		
				}

	}

	if ($BBDD_TABLE_ARDUINO=="arduino4"){

			global $temp_sup_4;
			global $hum_sup_4;
			global $temp_inf_4;
			global $hum_inf_4;
			
			$variable_error = comprobar_error($temp_sup_4, $temp_inf_4, $hum_sup_4, $hum_inf_4, $Time, $temperatura, $humedad, $corriente, $dispositivo);
			
			//imprimir los datos de arduino en fondo verde o rojo
			if($variable_error=='0')	//color verde
			{
				?><header class="panel-heading bg-success font-bold" style="font-size:18px">WISP Hospital</header>
					<div class="panel-body bg-success lter" style="font-size:15px ; text-align:left"><?php
						show_results_bbdd_sensores($temperatura, $humedad, $corriente, $temp_inf_4, $temp_sup_4, $hum_inf_4, $hum_sup_4);
				?>
					</div>
				<?php

			}
			else{					//color rojo
		
				?><header class="panel-heading bg-danger font-bold" style="font-size:18px">WISP Hospital</header>
					<div class="panel-body bg-danger lter" style="font-size:15px ; text-align:left"><?php
						show_results_bbdd_sensores($temperatura, $humedad, $corriente, $temp_inf_4, $temp_sup_4, $hum_inf_4, $hum_sup_4);
				?>
					</div>
				<?php
		
				}

	}


	}


	//Función que registra en la tabla de errores un mensaje con el tipo de fallo y el instante en el que sucede en el Arduino1.
	function registrar_error($variable_error,$Time,$valor,$dispositivo){
		
			global $BBDD_TABLE_EXCEPTIONS;
		
			mysql_query("INSERT INTO $BBDD_TABLE_EXCEPTIONS (Hora, Error, Dispositivo, Valor) VALUES ('".$Time."',  '".$variable_error."', '".$dispositivo."','".$valor."' )");
		
	}

	//Función que comprueba posibles errores.
	function comprobar_error($temp_sup,$temp_inf,$hum_sup,$hum_inf,$Time,$temperatura,$humedad,$corriente,$dispositivo){
			
			$variable_error=0;
		
			if($temperatura>$temp_sup){
				$variable_error="Temperatura(Superior).";
				$valor=$temperatura;
				sonido();
				registrar_error($variable_error,$Time,$valor,$dispositivo);
			   }
			if($temperatura<$temp_inf){
				$variable_error="Temperatura(Inferior).";
				$valor=$temperatura;   
				sonido();
				registrar_error($variable_error,$Time,$valor,$dispositivo);
			}
			if($humedad>$hum_sup){
				$variable_error="Humedad(Superior).";
				$valor=$humedad;
				sonido();
				registrar_error($variable_error,$Time,$valor,$dispositivo);
			   }
			if($humedad<$hum_inf){
				$variable_error="Humedad(Inferior).";
				$valor=$humedad;   
				sonido();
				registrar_error($variable_error,$Time,$valor,$dispositivo);
			}
			if($corriente=='CAIDO'){
				$variable_error='Corriente';
				$valor=$corriente;	
				sonido();
				registrar_error($variable_error,$Time,$valor,$dispositivo);
			}
				return $variable_error;
	}
	
	//Función que muestra los datos de la base de datos en modo tabla,"linea 1", "linea 2" y "linea 3"
	function show_results_bbdd_sensores($temperatura, $humedad, $corriente,$temp_inf,$temp_sup,$hum_inf,$hum_sup){

?>                     
						<table width="100%">
							<tr><td style="width:55%">
							   Temp.: <?php print $temperatura?> ºC 
							</td><td align="right" style="width:45%">
								<button type="button" class="btn btn-white" style="width:100%"><?php print $temp_inf?> ÷ <?php print $temp_sup?>ºC</button>
							</td></tr>
							<tr><td style="width:55%">							
								Hum.: <?php print $humedad?> %
							</td><td align="right" style="width:45%">
									<button type="button" class="btn btn-white" style="width:100%"><?php print $hum_inf?> ÷ <?php print $hum_sup?>%</button>
							</td></tr>
							<tr><td style="width:55%">													
								Corr.: <?php print $corriente?>
							</td><td align="right" style="width:45%">
								<button type="button" class="btn btn-white" style="width:100%">ACTIVO</button>
							</td></tr>
						</table>
  
                        
<?php
	}
	
	
?>









