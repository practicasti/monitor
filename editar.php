<?php include('functions_autenticate.php'); ?>

<?php 

session_start();
comprobar_sesion($_SESSION["flag_user_logon"]); 

?>
<head>
</head>
<body>

<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
	 <?php
	 $accion=$_GET['accion'];
	 $id=$_GET['id'];
	 $ip=$_GET['ip'];
	 $router=$_GET['router'];
	 $pass=$_GET['pass'];
	 $cliente=$_GET['cliente'];
	 $usuario=$_GET['usuario'];
	 $nombre=$_GET['nombre'];
	 $puerto=$_GET['puerto'];
	 ?>
    <h4 class="modal-title">Editar registro</h4>
    </div>
	<div class="modal-body">
	<form method="get" action="devices_actions.php" class="panel-body">
	
			  <input type="hidden" name="accion" value="<?php echo $accion; ?>" />
			  
			  <input type="hidden" name="id" value="<?php echo $id; ?>" />
			  
            <div class="form-group">
              <label class="control-label">Nombre del cliente</label>
              <input type="text" name="cliente" value = "<?php echo $cliente; ?>" class="form-control"/>
            </div>
			
			<div class="form-group">
              <label class="control-label">*Código del host</label>
              <input  type="text" name="nombre" value = "<?php echo $nombre; ?>" class="form-control" required />
            </div>
			
            <div class="form-group">
              <label class="control-label">*IP</label>
              <input  type="text" name="ip" value = "<?php echo $ip; ?>" class="form-control" required />
            </div>
			
            <div class="form-group">
              <label class="control-label">*Puerto</label>
              <input  type="text" name="puerto" value = "<?php echo $puerto; ?>" class="form-control" required />
            </div>
			
			<div class="form-group">
              <label class="control-label">*Usuario</label>
              <input  type="text" name="usuario" value = "<?php echo $usuario; ?>" class="form-control" required />
            </div>
			
			<div class="form-group">
              <label class="control-label">*Contraseña</label>
              <input  type="text" name="contraseña"  value = "<?php echo $pass; ?>" class="form-control" required />
            </div>
			
            <div class="form-group">
              <label class="control-label">Router</label>
              <input  type="text" name="router" value = "<?php echo $router; ?>" class="form-control"/>
            </div>
    
    
	
    
	<a href='devices_actions.php'> <input value="Modificar" type="submit" class='btn btn-s-md btn-success'/></a>
	<a href="#" class="btn btn-s-md btn-white" data-dismiss="modal">Cancelar</a>
	</form>
      
    </div>
	
   
   
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</body>
</html>