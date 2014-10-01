<?php include('functions_html.php'); ?>
<?php include('devices_components_html.php'); ?>
<?php include('config_php.php')?>
<?php include('functions_autenticate.php'); ?>

<?php 

session_start();
comprobar_sesion($_SESSION["flag_user_logon"]); 

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
			
			<?php
			
			
			 // print_r($_REQUEST);
			
			$accion=$_GET['accion'];
			
			
			// echo $accion;
			
			if($accion == 1){ //eliminar registro
			
			$id=$_GET['id'];
			$conexion=connect_bbdd($BBDD_HOST, $BBDD_USER, $BBDD_PASSWD);
			delete_bbdd($id, $conexion, $BBDD_NAME, $BBDD_TABLE1);
			show_table();
			
			}
			
			elseif($accion == 2){//editar registro
		
			$id=$_GET['id'];
			$cliente = $_GET["cliente"];
			$nombre = $_GET["nombre"];
			$ip = $_GET["ip"];
			$puerto = $_GET["puerto"];
			$usuario = $_GET["usuario"];
			$pass = $_GET["contraseña"];
			$router = $_GET["router"];
			
			$conexion=connect_bbdd($BBDD_HOST, $BBDD_USER, $BBDD_PASSWD);
			edit_bbdd($BBDD_NAME, $BBDD_TABLE1, $conexion, $cliente,$nombre,$ip,$puerto,$usuario,$pass,$router,$id );
			show_table();
			
			}
			
			elseif($accion==3){//añadir
			
			$cliente = $_GET["cliente"];
			$nombre = $_GET["nombre"];
			$ip = $_GET["ip"];
			$puerto = $_GET["puerto"];
			$usuario = $_GET["usuario"];
			$contraseña = $_GET["contraseña"];
			$router = $_GET["router"];
			
			$conexion=connect_bbdd($BBDD_HOST, $BBDD_USER, $BBDD_PASSWD);
			new_device($BBDD_NAME, $BBDD_TABLE1, $conexion, $cliente,$nombre,$ip,$puerto,$usuario,$contraseña,$router);
			show_table();
			
			}
			
			
			?>
			</div>
		</section>
  </section>
 </section>
 
  
  


<?php



footer();
 
?>