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
	
	<?php $accion=3;?>
	
    <h4 class="modal-title">Nuevo dispositivo</h4>
    </div>
	<div class="modal-body">
		<form method="get" action="devices_actions.php" class="panel-body">
		
			  <input type="hidden" name="accion" value="<?php echo $accion; ?>" />
			  
            <div class="form-group">
              <label class="control-label">Nombre del cliente</label>
              <input type="text" name="cliente" value = "" class="form-control" />
            </div>
			
		    <div class="form-group">
              <label class="control-label">*Código del host</label>
              <input  type="text" name="nombre" value = "" class="form-control" required />
            </div>
			
            <div class="form-group">
              <label class="control-label">*IP</label>
              <input  type="text" name="ip" value = "" class="form-control" required />
            </div>
            
			<div class="form-group">
              <label class="control-label">*Puerto</label>
              <input  type="text" name="puerto" value = "" class="form-control" required />
            </div>
			
			<div class="form-group">
              <label class="control-label">*Usuario</label>
              <input  type="text" name="usuario" value = "" class="form-control" required />
            </div>
			
			<div class="form-group">
              <label class="control-label">*Contraseña</label>
              <input  type="text" name="contraseña"  value = "" class="form-control" required />
            </div>
            
			<div class="form-group">
              <label class="control-label">Router</label>
              <input  type="text" name="router" value = "" class="form-control" />
            </div>
    
  	<a href='devices_actions.php'> <input value="Añadir" type="submit" class='btn btn-s-md btn-success'/></a>
	<a href="#" class="btn btn-s-md btn-white" data-dismiss="modal">Cancelar</a>
	</form>
      
    </div>
	
   
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</body>
</html>