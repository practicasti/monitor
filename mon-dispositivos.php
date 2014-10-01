<?php include('api_include.php'); ?>
<?php include('functions.php'); ?>
<?php include('functions_html.php'); ?>
<?php include('config_php.php'); ?>
<?php include('devices_components_html.php'); ?>
<?php include('functions_autenticate.php'); ?>

<?php 

session_start();
comprobar_sesion($_SESSION["flag_user_logon"]); 
$valor=comprobar_admin($_SESSION['Admin_flag']);



?>


<?php

head();

?>

<!-- PANTALLA PRINCIPAL DE LA APLICACION -->

<section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <?php tittle_html(); ?>
	<?php show_main();?>
	
      <section class="hbox stretch">
	  
	  <?php main_menu(); ?>
		
        <section class="col-md-offset-2 m-t-lg panel">
			<div class="wrapper"> 
			
			<?php show_table($valor); ?>
			  
		
			</div>
		</section>
  </section>
 </section>
 
 

<?php



footer();
 
?>

