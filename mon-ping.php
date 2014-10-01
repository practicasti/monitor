<?php 

include('api_include.php'); 
include('mon-functions.php'); 
include('mon-functions-html.php'); 
include('mon-config.php'); 
include('mon-functions-bbdd.php'); 
include('mon-functions-autenticate.php'); 
include('mon-dashboard-components-html.php'); 
include('mon-functions-BBDD-sensores.php');
include('mon-functions-bbdd-sensores2.php');

session_start(); 
comprobar_sesion($_SESSION['flag_user_logon']);

head();

//connect_bbdd();

?>

<!-- PANTALLA PRINCIPAL DE LA APLICACION -->

<section id="content" class="m-t-lg wrapper-md animated fadeInDown">

	<?php show_main_dashboard(); ?>  
 
      <section class="hbox stretch">
	  
      <?php main_menu(); ?>
			
        <section class="col-md-offset-2 m-t-lg panel">
			<div class="wrapper">
				
				
				
				<!-- row-->
				<div class="row">
						<div class="col-md-12 text-center">
							
							<!-- resultado monitorizacion -->
								<?php 
								$conexion=connect_bbdd(BBDD_HOST, BBDD_USER, BBDD_PASSWD);
								read_bbdd(BBDD_NAME, BBDD_TABLE_DEVICES, $conexion);
								?>
							
						</div>
				</div>
				<!-- end row-->
					
			</div>
		</section>
  </section>
  </section>
 

<?php

footer();
 
?>