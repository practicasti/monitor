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
 
      <section class="hbox stretch" >
	  
      <?php main_menu(); ?>
			
        <section class="col-md-offset-2 m-t-lg panel">
			<div class="wrapper">
				
				<!-- row-->
				<div class="row">
						<div class="col-md-12 text-center">
							
							<!--component -->
							<div class="col-lg-3" style="height:220px">
								<section class="panel">
									<?php 
										$conexion=connect_bbdd(BBDD_HOST, BBDD_USER, BBDD_PASSWD);
										show_linea_sensor(BBDD_NAME, $BBDD_TABLE_ARDUINO1, $conexion);
									?>                
								</section>
							</div>
							<!-- end component -->
							
							<!--component -->
							<div class="col-lg-3" style="height:220px">
								<section class="panel">
									<?php 
										$conexion=connect_bbdd(BBDD_HOST, BBDD_USER, BBDD_PASSWD);
										show_linea_sensor(BBDD_NAME, $BBDD_TABLE_ARDUINO2, $conexion);
									?>            
								</section>
							</div>
							<!-- end component -->
							
							<!--component -->
							<div class="col-lg-3" style="height:220px">
								<section class="panel">
									<?php 
										$conexion=connect_bbdd(BBDD_HOST, BBDD_USER, BBDD_PASSWD);
										show_linea_sensor(BBDD_NAME, $BBDD_TABLE_ARDUINO3, $conexion);
									?>                    
								</section>
							</div>
							<!-- end component -->
							
							<!--component -->
							<div class="col-lg-3" style="height:220px">
								<section class="panel">
									<?php 
										$conexion=connect_bbdd(BBDD_HOST, BBDD_USER, BBDD_PASSWD);
										show_linea_sensor(BBDD_NAME, $BBDD_TABLE_ARDUINO4, $conexion);
									?>                       
								</section>
							</div>
							<!-- end component -->
							
						
						</div>
				</div>
				<!-- end row-->
				
				<!-- row-->
				<!-- row-->
		<div class="row">
			<div class="col-md-12 text-center">
			
			<div class="tab-pane active" id="datatable">
              <section class="panel">
                <header class="panel-heading">
                  DataTables 
                  <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data." data-original-title="" title=""></i> 
                </header>
               <div class="table-responsive">
                  <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
					<div class="row"><div class="col-sm-6">
						<div id="DataTables_Table_0_length" class="dataTables_length">
							<label>Show <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
								<option value="10" selected="selected">10</option>
								<option value="25">25</option>
								<option value="50">50</option>
								<option value="100">100</option>
							</select> entries</label>
						</div>
					</div>
				</div>
			<table class="table table-striped m-b-none dataTable" data-ride="datatables" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
            <thead>
                <tr role="row">
				<th width="20%" class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">Hora</th>
				<th width="25%" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 25px;">Error</th>
				<th width="25%" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 25px;">Dispositivo</th>
				<th width="15%" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 15px;">Valor</th>
				<th width="15%" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 15px;">Diferencia</th>
				</tr>
            </thead>
                    
            <tbody role="alert" aria-live="polite" aria-relevant="all">
			<tr class="odd">
			<td class=" sorting_1">Gecko</td>
			<td class="">Firefox 1.0</td>
			<td class="">Win 98+ / OSX.2+</td>
			<td class="">1.7</td><td class="">A</td>
			</tr>
			</tbody></table>
			<div class="row">
			<div class="col-sm-6">
			<div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 57 entries
			</div>
			</div>
			<div class="col-sm-6">
			<div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate">
			<a tabindex="0" class="first paginate_button paginate_button_disabled" id="DataTables_Table_0_first">First</a>
			<a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_0_previous">Previous</a>
			<span>
			<a tabindex="0" class="paginate_active">1</a>
			<a tabindex="0" class="paginate_button">2</a>
			<a tabindex="0" class="paginate_button">3</a>
			<a tabindex="0" class="paginate_button">4</a>
			<a tabindex="0" class="paginate_button">5</a>
			</span>
			<a tabindex="0" class="next paginate_button" id="DataTables_Table_0_next">Next</a>
			<a tabindex="0" class="last paginate_button" id="DataTables_Table_0_last">Last</a>
			</div>
			</div>
			</div>
			</div>
                </div>
              </section>
            </div>
				
				
				<!-- end row-->
				
			</div>
		</div>
					
			</div>
		</section>
  </section>
  </section>
 

<?php

footer();
 
?>