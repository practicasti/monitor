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
      <h4 class="modal-title">¿Está seguro de que desea eliminar el registro?</h4>
    </div>
    <div class="modal-body">
	<?php
	$accion=$_GET['accion'];
	$id=$_GET['id'];
	
	  echo "<a href='devices_actions.php?accion=$accion&id=$id' class='btn btn-s-md btn-danger'>" ;?>Eliminar<?php echo "</a>"; ?>
      <a href="#" class="btn btn-s-md btn-white" data-dismiss="modal">Cancelar</a>
    </div>
   
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</body>
</html>