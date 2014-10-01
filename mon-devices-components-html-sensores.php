<?php require_once('functions_BBDD_sensores.php'); ?>


<?php

//Declaración de los datos de la base de datos y la tabla principal.
//Si se desea cambiar la base de datos, estos datos deben cambiarse así.
                          $BBDD_NAME= "monitorizacion";
                          $BBDD_HOST= "localhost";
                          $BBDD_USER= "root";
                          $BBDD_PASSWD= "";
                          $BBDD_TABLE1= "arduino1";
						  $BBDD_TABLE2= "arduino2";
						  $BBDD_TABLE3= "arduino3";
						  $BBDD_TABLE4= "arduino4";


//Función para iniciar las funciones principales con la estructura                          
function inicio(){


    show_table();
    ?>
    <HR size="5" width="50%" align="center">
    <?php
   

}
   

//Función con la estructura de la parte de la tabla, conexión a la bd y llamada a las funciones que muestran los datos de esta parte
function show_table(){
		
?>		

                <table align="center">
                        <tr>
                            <th width="500">        
                                <font face="arial" size="6" >Temperatura 1 </font>
                            </th>
                       
                            <th width="500">
                                <font face="arial" size="6" >Humedad 1 </font>
                            </th>
                          
                            <th width="500">
                                <font face="arial" size="6" >Corriente 1</font>
                               
                            </th>
                        </tr>
                        <tr>
                       
                          <?php
                         
                        //Si se desea modificar estas variables debe hacerse al principio del script donde están declaradas.

                          global $BBDD_NAME;
                          global $BBDD_HOST;
                          global $BBDD_USER;
                          global $BBDD_PASSWD;
                          global $BBDD_TABLE;
						  global $BBDD_TABLE1;
						  global $BBDD_TABLE2;
						  global $BBDD_TABLE3;
						  global $BBDD_TABLE4;
						  

			$conexion=connect_bbdd_sensores($BBDD_HOST, $BBDD_USER, $BBDD_PASSWD);
		
                          show_linea_1($BBDD_NAME, $BBDD_TABLE1, $conexion);
                          ?>
                            
                        </tr>
                       </table> 
                       <table>
                       <tr>
                              
                            <th width="500">   
                              
                                <font face="arial" size="6" >Temperatura 2</font>
                               
                            </th>
                       
                            <th width="500">
                                <font face="arial" size="6" >Humedad 2</font>
                                
                            </th>
                          
                            <th width="500">
                                <font face="arial" size="6" >Corriente 2</font>
                             
                            </th>
                        </tr>
                        <tr>
                      <?php
					  
					  

			$conexion=connect_bbdd_sensores($BBDD_HOST, $BBDD_USER, $BBDD_PASSWD);
		
                      show_linea_2($BBDD_NAME, $BBDD_TABLE2, $conexion);
                      ?>
					  
					  </tr>
                       </table> 
                       <table>
                       <tr>
                              
                            <th width="500">   
                              
                                <font face="arial" size="6" >Temperatura 3</font>
                               
                            </th>
                       
                            <th width="500">
                                <font face="arial" size="6" >Humedad 3</font>
                                
                            </th>
                          
                            <th width="500">
                                <font face="arial" size="6" >Corriente 3</font>
                             
                            </th>
                        </tr>
                        <tr>
                      <?php
					  
					  $conexion=connect_bbdd_sensores($BBDD_HOST, $BBDD_USER, $BBDD_PASSWD);
		
                      show_linea_3($BBDD_NAME, $BBDD_TABLE3, $conexion);
                      ?>
					  
					  	  </tr>
                       </table> 
                       <table>
                       <tr>
                              
                            <th width="500">   
                              
                                <font face="arial" size="6" >Temperatura 4</font>
                               
                            </th>
                       
                            <th width="500">
                                <font face="arial" size="6" >Humedad 4</font>
                                
                            </th>
                          
                            <th width="500">
                                <font face="arial" size="6" >Corriente 4</font>
                             
                            </th>
                        </tr>
                        <tr>
                      <?php
					  
					  $conexion=connect_bbdd_sensores($BBDD_HOST, $BBDD_USER, $BBDD_PASSWD);
		
                      show_linea_4($BBDD_NAME, $BBDD_TABLE4, $conexion);
                      ?>
					  
                    </tr>
                    
                    </table>
    <TABLE width="500" text-aling="center">
        <tr>
        <br>
            <font face="arial" size="6">Ultimo error</font>
        </tr>
        <p></p>
        <tr>
            <?php
            error();
            ?>
        </tr>
    </TABLE>
            <?php 
}

?>
