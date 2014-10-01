<?php require_once('functions_BBDD.php'); ?>


<?php

function show_table_users(){
?>

 <section class="panel">
                    <header class="panel-heading">
                      Usuarios
                    </header>
					
                    <table class="table table-striped m-b-none text-sm">
                      <thead>
                        <tr>
                          <th>Usuario</th> 
						  <th>Contraseña</th>
						  <th>Perfil</th>
                          <th width="70"></th>
                        </tr>
                      </thead>
					  
					  
					  
			<?php 
			
			$BBDD_NAME= "wisp";
			$BBDD_HOST= "localhost";
			$BBDD_USER= "wisp-user";
			$BBDD_PASSWD= "1234";
			$BBDD_TABLE2= "t_users";

			$conexion=connect_bbdd($BBDD_HOST, $BBDD_USER, $BBDD_PASSWD);
			show_bbdd_users($BBDD_NAME, $BBDD_TABLE2, $conexion);
			
			?>
			
			  </table>
            </section>

<?php
}





?>