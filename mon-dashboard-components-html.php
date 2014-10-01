

<?php


function show_main_dashboard(){

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
          <li>
            <a href="<?php echo MON_DIR_PATH."mon-dashboard.php"; ?>">
              <i class="icon-refresh text-white"></i>
              <span class="text-white" >Refresh all</span> 
            </a></li>
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







?>