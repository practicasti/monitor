<?php 

include('mon-functions-html.php');
session_start(); 

head();

?>

<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <a class="nav-brand" href="index.html">Monitorización WISP - Mertel Telecomunicaciones - 2014</a>
    <div class="row m-n">
      <div class="col-md-4 col-md-offset-4 m-t-lg">
        <section class="panel">
          <header class="panel-heading text-center">
            <img src="merinosa.png">
          </header>
          <form method="post" action="index.php" class="panel-body">
            <div class="form-group">
              <label class="control-label">Usuario</label>
              <input type="text"  class="form-control" name="user">
            </div>
            <div class="form-group">
              <label class="control-label">Contraseña</label>
              <input type="password" id="inputPassword" class="form-control" name="pass">
            </div>
            
            <a href="#" class="pull-right m-t-xs"><small>¿Olvidó la contraseña?</small></a>
            <button type="submit" class="btn btn-s-md btn-danger">Entrar</button>
            <div class="line line-dashed"></div>
          </form>
        </section>
      </div>
    </div>
  </section>


<?php

footer();
 
?>