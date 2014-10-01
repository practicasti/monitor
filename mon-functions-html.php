<?php

function head(){

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Monitorizacion | Mertel</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" cache="false" />
  <link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" />
  <link rel="stylesheet" href="css/plugin.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <script src="js/ie/fix.js" cache="false"></script>
  <![endif]-->
</head>
<body>

<?php

} //end head()



function main_menu(){
?>

<aside class="aside bg-dark" id="nav">
          <section class="vbox bg-black lter">
            <section>
              <nav class="nav-primary hidden-xs">
                <ul class="nav bg-black lter">
                <li>
                    <a href="<?php echo MON_DIR_PATH."mon-arduino.php"; ?>">
                      <i class="icon-home"></i>
                      <span>Arduino</span>
                    </a>
                  </li>
				  <li>
                    <a href="<?php echo MON_DIR_PATH."mon-ping.php"; ?>" >
                      <i class="icon-desktop"></i>
                      <span>Ping</span>
                    </a>
				  </li>
                  <li>
                    <a href="<?php echo MON_DIR_PATH."mon-dispositivos.php"; ?>" >
                      <i class="icon-desktop"></i>
                      <span>Dispositivos</span>
                    </a>
				  </li>
				  <li>
                    <a href="<?php echo MON_DIR_PATH."mon-users.php"; ?>" >
                      <i class="icon-user"></i>
                      <span>Usuarios</span>
                    </a>
				  </li>
				  <li>
                    <a href="<?php echo MON_DIR_PATH."mon-dashboard.php"; ?>">
                      <i class="icon-bullhorn"></i>
                      <span>Errores</span>
                    </a>
                  </li>
				  <li>
                    <a href="<?php echo MON_DIR_PATH."mon-logout.php"; ?>" >
                      <i class="icon-power-off"></i>
                      <span>Cerrar sesión</span>
                    </a>
				  </li>
                </ul>
              </nav>
            </section>
           
          </section>
        </aside> 


<?php

}






function show_main(){

?>

<section class="vbox">
    <header class="header bg-black lter navbar navbar-inverse pull-in">
      <div class="navbar-header nav-bar aside dk">
        <a class="btn btn-link visible-xs " data-toggle="class:show" data-target=".nav-primary">
          <i class="icon-reorder bg-black lter"></i>
        </a>
        <a href="#" class="nav-brand bg-black lter" data-toggle="fullscreen"><img src="merinosa.png"></a>
        <a class="btn btn-link visible-xs" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="icon-comment-alt"></i>
        </a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
         
        </ul>

        <form class="navbar-form navbar-right m-t-sm" role="search">
          <div class="form-group">
            <div class="input-group input-s">
              <input type="text" class="form-control input-sm no-border dk text-white" placeholder="Search">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm btn-default btn-icon"><i class="icon-search"></i></button>
              </span>
            </div>
          </div>
        </form>
      </div>
    </header>
  </section>
			




<?php

}








function footer(){

?>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small>Mobile first web app framework base on Bootstrap<br>&copy; 2013</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
<script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- Sparkline Chart -->
  <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/app.data.js"></script>  
</body>
</html>

<?php


} //end footer





?>
