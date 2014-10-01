<?php require_once('functions_BBDD.php'); ?>



<?php


function show_table($valor){
?>

 <section class="panel">
                    <header class="panel-heading">
                      <button class="label btn bg-success pull-right btn-sm" id="new-note"><a href="nuevo_dispositivo.php" data-toggle="ajaxModal" ><i class="icon-plus"></i>NUEVO DISPOSITIVO</a></button>
                      Dispositivos
                    </header>
					
                    <table class="table table-striped m-b-none text-sm">
                      <thead>
                        <tr>
                          <th>IP</th>
                          <th>Nombre</th>    
						  <th>Cliente</th> 
						  <th>Puerto</th> 
						  <th>Usuario</th> 
						  <th>Contraseña</th> 
						  <th>Router</th>
                          <th width="70"></th>
                        </tr>
                      </thead>
                   
               
			<?php 
			
			$BBDD_NAME= "wisp";
			$BBDD_HOST= "localhost";
			$BBDD_USER= "wisp-user";
			$BBDD_PASSWD= "1234";
			$BBDD_TABLE1= "t_devices";

			$conexion=connect_bbdd($BBDD_HOST, $BBDD_USER, $BBDD_PASSWD);
			show_bbdd($BBDD_NAME, $BBDD_TABLE1, $conexion, $valor);
		
			?>
			
			  </table>
            </section>



<?php
}







?>