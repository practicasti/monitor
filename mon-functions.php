<?php require_once('api_include.php'); ?>



<?php

function check_devices($array){

//   Este archivo es para testear si conecta el API con tu Mikrotik!!! Solo para prueba!!.
//   Si no te funciona te recomiendo leer "Api Mikrotik - Segunda parte"
//   http://www.tech-nico.com/blog/api-mikrotik-segunda-parte-usando-el-api-con-php/

// $ipRouteros="185.19.159.1";  // tu RouterOS.
// $Username="READ";
// $Pass='READ$WISPER';
// $api_puerto=8728;

error_reporting(E_ERROR);


	
	$API = new routeros_api();
	$API->debug = false;

	$ipRouteros= $array[0];  // tu RouterOS.
	$Username=$array[1];
	$Pass=$array[2];
	$api_puerto=$array[3];
	$flag=$array[4];
	
	// $output= shell_exec("ping -n 1 -w 1 $ipRouteros");
	// echo $output;
	
	// echo"$ipRouteros<br>";
	// echo"$Username<br>";
	// echo"$Pass<br>";
	// echo"$api_puerto<br>";
	
	
	if($flag == 1){
	
	$ping=get_ping($ipRouteros);
	
		if ($ping[0] === true) {
	
			// si hace PING se testea el host
			if ($API->connect($ipRouteros , $Username , $Pass, $api_puerto)) {
			$API->write("/system/ident/getall",true);
			$READ = $API->read(false);
			$ARRAY = $API->parse_response($READ);
			$name = $ARRAY[0]["name"];
				if(count($ARRAY)>0){   // si esta conectado
					$API->write("/system/licen/getall",true);
					$READ = $API->read(false);
					$ARRAY = $API->parse_response($READ);		
					$nlevel = $ARRAY[0]["nlevel"];
					$API->write("/system/reso/getall",true);
					$READ = $API->read(false);
					$ARRAY = $API->parse_response($READ);		
					$cpu = $ARRAY[0]["cpu"];
					$cpu_frequency = $ARRAY[0]["cpu-frequency"];  
					$arquitectura = $ARRAY[0]["board-name"];  
					$API->write("/system/pack/getall",true);
					$READ = $API->read(false);
					$ARRAY = $API->parse_response($READ);		
					$version = $ARRAY[0]["version"];	   
 					$resultado=array( 1, $ping[1] , $name , $arquitectura , $version , $nlevel , $cpu , $cpu_frequency , $ping[2]);
					return $resultado;
 
				}else{  //el servidor API esta of line
				
					$resultado=array( 2, $ARRAY , $name , $ping[2]);
					return $resultado;
					
				}    

			
			}else{
				
				$resultado= array(3, $ping[1] , $ping[2]);
				return $resultado;
				

			}
	
		} else {
		
			$resultado=array( 4 , $ping[2]);
			return $resultado;
		}
	
	
	$API->disconnect();
	
	}else {
		$resultado=array(5, $ipRouteros);
		return $resultado;

	}



	

 
} //end check_devices



///////////////////PING\\\\\\\\\\\\\\\\\

function get_ping($ip=NULL){

//comprueba si se hace ping al host especificado
    $str = shell_exec("ping -n 1 -w 1 $ip");
	
	if (strpos($str, "recibidos = 0")) {
	
	// print '<img src="icon_led_red.jpg" />&nbsp;';
	// print "<font color='#ff0000'>FAIL: </font>"	;
	
	$final=array(false, $str, $ip);
	return $final;
	
	} else {

		$final=array(true, $str, $ip);
        return $final;
	
		
	
}
    
	
}; //end get_ping





function check_devices2($tabla){

//   Este archivo es para testear si conecta el API con tu Mikrotik!!! Solo para prueba!!.
//   Si no te funciona te recomiendo leer "Api Mikrotik - Segunda parte"
//   http://www.tech-nico.com/blog/api-mikrotik-segunda-parte-usando-el-api-con-php/

// $ipRouteros="185.19.159.1";  // tu RouterOS.
// $Username="READ";
// $Pass='READ$WISPER';
// $api_puerto=8728;

error_reporting(E_ERROR);

	$API = new routeros_api();
	$API->debug = false;
	
	$ipRouteros= $tabla['ip'];  // tu RouterOS.
	$Username=$tabla['user'];
	$Pass=$tabla['pass'];
	$api_puerto=$tabla['port'];
	$flag=$tabla['router'];
	$nombre=$tabla['code'];
	
	
	if($flag == 1){
	
	$ping=get_ping($ipRouteros);
	
		if ($ping[0] === true) {
	
			// si hace PING se testea el host
			if ($API->connect($ipRouteros , $Username , $Pass, $api_puerto)) {
			$API->write("/system/ident/getall",true);
			$READ = $API->read(false);
			$ARRAY = $API->parse_response($READ);
			$name = $ARRAY[0]["name"];
			
				if(count($ARRAY)>0){   // si esta conectado
					$API->write("/system/licen/getall",true);
					$READ = $API->read(false);
					$ARRAY = $API->parse_response($READ);		
					$nlevel = $ARRAY[0]["nlevel"];
					$API->write("/system/reso/getall",true);
					$READ = $API->read(false);
					$ARRAY = $API->parse_response($READ);		
					$cpu = $ARRAY[0]["cpu"];
					$cpu_frequency = $ARRAY[0]["cpu-frequency"];  
					$arquitectura = $ARRAY[0]["board-name"];  
					$API->write("/system/pack/getall",true);
					$READ = $API->read(false);
					$ARRAY = $API->parse_response($READ);		
					$version = $ARRAY[0]["version"];	

					$resultado=array( 1, $ping[1] , $name , $arquitectura , $version , $nlevel , $cpu , $cpu_frequency , $ping[2] , $ipRouteros, $Username , $Pass, $api_puerto, $flag, $nombre);
					return $resultado;
 
				}else{  //el servidor API esta of line
				
					$resultado=array( 2, $ARRAY , $name , $ping[2], $ipRouteros, $Username , $Pass, $api_puerto, $flag, $nombre);
					return $resultado;
					
				}    

			$API->disconnect();
			
			}else{
				
				$resultado= array(3, $ping[1] , $ping[2] , $nombre, $ipRouteros, $Username , $Pass, $api_puerto, $flag, $nombre);
				return $resultado;
				

			}
	
		} else {
		
			$resultado=array( 4 , $ping[2] , $nombre, $ipRouteros, $Username , $Pass, $api_puerto, $flag, $nombre);
			return $resultado;
		}
	
	
	
	
	}else {
		$resultado=array(5, $ipRouteros , $nombre, $ipRouteros, $Username , $Pass, $api_puerto, $flag, $nombre);
		return $resultado;

	}

	

 
} //end check_devices2 



////////////////////MOSTRAR RESULTADOS\\\\\\\\\\\\\\


function show_results($resultado){

if ($resultado[0]== 5){
?>

	<div class="col-lg-4" style="height:70px">
			<section class="panel">
                      <header class="panel-heading bg-danger font-bold" style="font-size:16px">
					  
					  <?php 
					  
					  echo $resultado[2].": ".$resultado[1]; 
					  
					  ?>
					  
					  </header>
                      <!--<div class="panel-body bg-danger lter">-->
					  <!--<i class="icon-ban-circle"></i><strong>FAIL!</strong> -->
				      <?php 
					  
					  //echo "<br>El cliente "."<strong>".$ipRouteros."</strong>"." no tiene router de servicio.<br><br>"; 
					  
					  ?>
				
					<!--<div><a href="../icon/refresh"><i class="icon-refresh"></i></a></div>-->
					
		<!--</div>-->
		</section>
		</div>

<?php
}//if

elseif($resultado[0]== 1){
?>
		
		<div class="col-lg-4" style="height:70px">
			<section class="panel">
                      <header class="panel-heading bg-success font-bold" style="font-size:16px">
					  
					  <?php 
					  
					  print $resultado[2].": ".$resultado[8]; 
					  
					  ?>
					  
					  </header>
                     <!-- <div class="panel-body bg-success lter">
						<i class="icon-ok-sign"></i> -->
		

        
<?php
		//print  '<img src="icon_led_green.jpg" />&nbsp;';
		//$i=0;
		
		//Mostrar ping por pantalla
		/*$partes=explode(" ",$resultado[1]);
		
		for($i=0;$i<14;$i++){
		
			if($i==3){
				print "<strong>".$partes[$i]." "."</strong>";
			}
			
			elseif($i==8){
				$separamos=explode(":",$partes[8]);
				print $separamos[0].":<br>";
				print $separamos[1]." ";
			}
			
			elseif($i==13){
				$separamos2=explode("E",$partes[13]);
				print $separamos2[0]."<br>";
				// print "Estadisticas ";
			}
			
			// elseif($i==35){
				// $separamos3=explode(",",$partes[35]);
				// print $separamos3[0]."<br>";
				// print $separamos3[1]." ";
			// }
			
			// elseif($i==46){
				// print "Minimo";
			// }
			
			// elseif($i==49){
				// print "Maximo";
			// }
			
			// elseif($i==19||$i==32||$i==44||$i==54){
				// print $partes[$i]."<br>";
			// }
			
			else{
				print $partes[$i]." ";	
			}
				
		}//end for*/
	    
				?>
				
			
				
				<!-- <div><a href="../icon/refresh"><i class="icon-refresh"></i></a></div>
				</div> -->                  
                </section>
				</div>

<?php
}//end elseif

elseif($resultado[0]== 2){

?>
					<div class="col-lg-4" style="height:70px">
					<section class="panel">
                      <header class="panel-heading bg-success font-bold" style="font-size:16px">
					  
					  <?php 
					  
					  print $resultado[2].": ".$resultado[3]; 
					  
					  ?>
					  </header>
                      <!-- <div class="panel-body bg-success lter">
						<i class="icon-ok-sign"></i> 
					<i class="icon-ban-circle"></i> -->
					
					<?php 
					
					//echo "<strong>".$resultado[1]['!trap'][0]['message']."</strong>";
					
					?> 
					
					<!-- No se puede mostrar el host.
					
					
						<div><a href="../icon/refresh"><i class="icon-refresh"></i></a></div>
					</div> -->
					
					</section>
					</div>


<?php
}//end elseif

elseif($resultado[0]== 3){

?>
				<div class="col-lg-4" style="height:70px">
			<section class="panel">
                      <header class="panel-heading bg-success font-bold" style="font-size:16px">
					  
					  <?php 
					  
					  print $resultado[3].": ".$resultado[2]; 
					  
					  ?></header>
					  
                      <!--<div class="panel-body bg-success lter">
						<i class="icon-ok-sign"></i> -->
		

        
<?php
		/*
		//print  '<img src="icon_led_green.jpg" />&nbsp;';
		$i=0;
		
		//Mostrar ping por pantalla
		$partes=explode(" ",$resultado[1]);
		
		for($i=0;$i<14;$i++){
		
			if($i==3){
				print "<strong>".$partes[$i]." "."</strong>";
			}
			
			elseif($i==8){
				$separamos=explode(":",$partes[8]);
				print $separamos[0].":<br>";
				print $separamos[1]." ";
			}
			
			elseif($i==13){
				$separamos2=explode("E",$partes[13]);
				print $separamos2[0]."<br>";
				// print "Estadisticas ";
			}
			
			// elseif($i==35){
				// $separamos3=explode(",",$partes[35]);
				// print $separamos3[0]."<br>";
				// print $separamos3[1]." ";
			// }
			
			// elseif($i==46){
				// print "Minimo";
			// }
			
			// elseif($i==49){
				// print "Maximo";
			// }
			
			// elseif($i==19||$i==32||$i==44||$i==54){
				// print $partes[$i]."<br>";
			// }
			
			else{
				print $partes[$i]." ";	
			}
				
		}//end for */
?>
				<?php

				//echo "<font color='#ff0000'>La conexion ha fallado. Verifique si el Api esta activo.</font><br><br><br>";
				
				?>
				
				
				<!--<div><a href="../icon/refresh"><i class="icon-refresh"></i></a></div>
				</div> -->
				</section>
				</div>
			
<?php
}//end elseif

elseif($resultado[0]== 4){

?>

			<div class="col-lg-4" style="height:70px">
				<section class="panel">
                      <header class="panel-heading bg-danger font-bold" style="font-size:16px">
					  
					  <?php 
					  
					  print $resultado[2].": ".$resultado[1];;
					  
					  ?>
					  </header>
                      <!--<div class="panel-body bg-danger lter">
						<i class="icon-ban-circle"></i><strong>FAIL!</strong> -->
			
					<?php 
					
					//echo "<br><font color='#ff0000'>No se puede mostrar el host. </font><br><br><br><br><br>";
					
					?>
		
			<!--<div><a href="../icon/refresh"><i class="icon-refresh"></i></a></div> -->
			</div>
			</div>
			
<?php
}//end_elseif

}//end show_results
?>





