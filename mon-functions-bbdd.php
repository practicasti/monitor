<?php 

require_once('api_include.php');
require_once('mon-functions.php');




function connect_bbdd($BBDD_HOST, $BBDD_USER, $BBDD_PASSWD){

#Conectamos con MySQL
$conexion = mysql_connect("$BBDD_HOST","$BBDD_USER","$BBDD_PASSWD")
or die ("Fallo en el establecimiento de la conexión");

return $conexion;
}


////////FUNCIONES BBDD PARA T_CLIENTS\\\\\\\

function read_bbdd($BBDD_NAME, $BBDD_TABLE, $conexion){

#Seleccionamos la base de datos a utilizar
mysql_select_db("$BBDD_NAME", $conexion)
or die("Error en la selección de la base de datos");

#Efectuamos la consulta SQL
$tabla = mysql_query ("select * from $BBDD_TABLE" )
or die("Error en la consulta SQL");

// $registros_encontrados = mysql_num_rows($tabla);

// print "Encontrados: ".$registros_encontrados."<br>";

while ($registro = mysql_fetch_array($tabla)){
   
   $resultado=check_devices2($registro);
   show_results($resultado);
   
}

#Cerramos la conexión con la base de datos
mysql_close();
}





function show_bbdd($BBDD_NAME, $BBDD_TABLE, $conexion, $valor){

#Seleccionamos la base de datos a utilizar
mysql_select_db("$BBDD_NAME", $conexion)
or die("Error en la selección de la base de datos");

#Efectuamos la consulta SQL
$tabla = mysql_query ("select * from $BBDD_TABLE" )
or die("Error en la consulta SQL");

// $registros_encontrados = mysql_num_rows($tabla);

// print "Encontrados: ".$registros_encontrados."<br>";

while ($registro = mysql_fetch_array($tabla)){
   
    $id=$registro['id'];
    $ip= $registro['ip'];  
	$User=$registro['user'];
	$Pass=$registro['pass'];
	$puerto=$registro['port'];
	$flag=$registro['router'];
	$nombre=$registro['code'];
	$client=$registro['client'];
	
	if ($valor==true){
		show_results_bbdd($ip, $User, $Pass, $puerto, $flag, $nombre, $client, $id);
    }else{
		show_results_bbdd_user($ip, $User, $Pass, $puerto, $flag, $nombre, $client, $id);
    }
}

#Cerramos la conexión con la base de datos
mysql_close();

}



function show_results_bbdd($ip,$usuario,$pass,$puerto,$router,$nombre,$cliente,$id){

//acciones:
//1=eliminar
//2=editar
//3=añadir

?>
                     <tbody>
                        <tr> 
                          <td><?php print $ip;?></td>
                          <td><?php print $nombre;?></td>
						  <td><?php print $cliente;?></td>
						  <td><?php print $puerto;?></td>
						  <td><?php print $usuario;?></td>
						  <td><?php print $pass;?></td>
						  <td><?php print $router;?></td>
                          <td class="text-right">
                            <div class="btn-group">
							<?php $accion=2; 
                              echo "<a href='editar.php?accion=$accion&id=$id&ip=$ip&usuario=$usuario&pass=$pass&puerto=$puerto&router=$router&nombre=$nombre&cliente=$cliente'data-toggle='ajaxModal' >" ;?><i class="icon-pencil"></i><?php echo "</a>"; ?>
							</div>
                          </td>
						  <td class="text-right">
                            <div class="btn-group" >
							<?php $accion=1; 
                              echo "<a href='modal.php?accion=$accion&id=$id' data-toggle='ajaxModal' >" ;?><i class="icon-remove"></i><?php echo "</a>"; ?>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                   
<?php
}

function show_results_bbdd_user($ip,$usuario,$pass,$puerto,$router,$nombre,$cliente,$id){

//acciones:
//1=eliminar
//2=editar
//3=añadir

?>
                     <tbody>
                        <tr> 
                          <td><?php print $ip;?></td>
                          <td><?php print $nombre;?></td>
						  <td><?php print $cliente;?></td>
						  <td><?php print $puerto;?></td>
						  <td><?php print $usuario;?></td>
						  <td><?php print $pass;?></td>
						  <td><?php print $router;?></td>
						</tr>
                      </tbody>
                   
<?php
}

function delete_bbdd($id, $conexion, $BBDD_NAME, $BBDD_TABLE){

	if (isset($id)){
		mysql_select_db("$BBDD_NAME", $conexion) or die("Error en la selección de la base de datos");
		$result = mysql_query("delete from $BBDD_TABLE where id= '$id' ") or die ("problemas: ".mysql_error());
		mysql_close();
	}else{
		echo "Debe especificar un 'id'.\n";
	}

}



function edit_bbdd($BBDD_NAME, $BBDD_TABLE, $conexion, $nuevo_cliente,$nuevo_nombre,$nueva_ip,$nuevo_puerto,$nuevo_usuario,$nueva_pass,$nuevo_router,$id){

	if (isset($id)){
		mysql_select_db("$BBDD_NAME",$conexion)or die("Error en la selección de la base de datos");
		$result = mysql_query("UPDATE $BBDD_TABLE SET client='$nuevo_cliente', code='$nuevo_nombre', ip='$nueva_ip', port='$nuevo_puerto', user='$nuevo_usuario', pass='$nueva_pass', router='$nuevo_router' WHERE id='$id'")or die ("problemas: ".mysql_error());
		mysql_close();
	}else{
		echo "Debe especificar un 'id'.\n";
	}
		
}




function new_device($BBDD_NAME, $BBDD_TABLE, $conexion, $nuevo_cliente,$nuevo_nombre,$nueva_ip,$nuevo_puerto,$nuevo_usuario,$nueva_pass,$nuevo_router){

	#Seleccionamos la base de datos a utilizar
	mysql_select_db("$BBDD_NAME", $conexion)or die("Error en la selección de la base de datos");

	#Efectuamos la consulta SQL 
	$tabla = mysql_query ("select * from $BBDD_TABLE" )or die("Error en la consulta SQL");

	$registros_encontrados = mysql_num_rows($tabla);
	$id=$registros_encontrados+1;

	if (isset($id)){
		mysql_select_db("$BBDD_NAME",$conexion)or die("Error en la selección de la base de datos");
		$result = mysql_query("INSERT INTO $BBDD_TABLE (id,client, code, ip, port, user, pass, router) VALUES ('$id', '$nuevo_cliente','$nuevo_nombre','$nueva_ip','$nuevo_puerto','$nuevo_usuario','$nueva_pass','$nuevo_router')")or die ("problemas: ".mysql_error());
		mysql_close();
	}else{
		echo "Debe especificar un 'id'.\n";
	}

}



////////FUNCIONES BBDD PARA T_USERS\\\\\\\

function show_bbdd_users($BBDD_NAME, $BBDD_TABLE, $conexion){

#Seleccionamos la base de datos a utilizar
mysql_select_db("$BBDD_NAME", $conexion)
or die("Error en la selección de la base de datos");

#Efectuamos la consulta SQL
$tabla = mysql_query ("select * from $BBDD_TABLE" )
or die("Error en la consulta SQL");

// $registros_encontrados = mysql_num_rows($tabla);
// print "Encontrados: ".$registros_encontrados."<br>";

while ($registro = mysql_fetch_array($tabla)){
    
	$User=$registro['user'];
	$Pass=$registro['pass'];
	$Perfil=$registro['perfil'];
	
	show_results_bbdd_users($User, $Pass, $Perfil);
   
}

#Cerramos la conexión con la base de datos
mysql_close();

}




function show_results_bbdd_users($usuario,$pass,$perfil){

?>
                     <tbody>
                        <tr> 
						  <td><?php print $usuario;?></td>
						  <td><?php print $pass;?></td>
						  <td><?php print $perfil;?></td>
                        </tr>
                    </tbody>
                   
<?php
}





///////////////////AUTENTICACION\\\\\\\\\\\\\\\



function autenticar_usuario($BBDD_NAME, $BBDD_TABLE, $conexion, $user_signin, $pass_signin){

#Seleccionamos la base de datos a utilizar
mysql_select_db("$BBDD_NAME", $conexion)or die("Error en la selección de la base de datos");

#Efectuamos la consulta SQL
$tabla = mysql_query ("select * from $BBDD_TABLE" )or die("Error en la consulta SQL");


while ($registro = mysql_fetch_array($tabla)){
	
	$User=$registro['user'];
	$Pass=$registro['pass'];
	$Admin=$registro['perfil'];
	
	
	if(($User == $user_signin) && ($Pass == $pass_signin)){
		
		mysql_close();
		$array=[true, $Admin];
		return $array;
	
	}
}
	mysql_close();
	$array=[false, $Admin];
	return $array;

}

?>