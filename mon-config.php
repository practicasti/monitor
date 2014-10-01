<?php
/* 
 FILE NAME: mon-config.php
 DESCRIPTION APP: monitor 
 AUTHOR: TELECOMUNICACIONES MERINO SA
*/

/** RUTA DE LA APLICACION */
define('MON_DIR_PATH', 'http://192.168.20.50/');

/** RUTA DE REDIRECCION */
define('MON_REDIRECT', 'http://192.168.20.50/');

/** RELOAD TIME IN SECONDS **/
define('MON_RELOAD_TIME', '0');

/** BBDD CONFIG **/
define('BBDD_NAME', 'monitorizacion');
define('BBDD_HOST', '192.168.20.50');
define('BBDD_USER', 'root');
define('BBDD_PASSWD', '1234');
define('BBDD_TABLE_DEVICES', 't_devices');
define('BBDD_TABLE_USERS', 't_users');

	
	//Estas están así ya que es la unica forma de que funcione.
	//Si se modifican estos nombres debemos realizar cambios en el archivo mon-functios-bbdd-sensores
	
	$BBDD_TABLE_ARDUINO1="arduino1";
	$BBDD_TABLE_ARDUINO2="arduino2";
	$BBDD_TABLE_ARDUINO3="arduino3";
	$BBDD_TABLE_ARDUINO4="arduino4";
	$BBDD_TABLE_EXCEPTIONS="registro_errores";
						

/** TEXTO DEL FOOTER DE LA APLICACION */
define('MON_FOOTER_TEXT', 'Mertel Comunicaciones - Todos los derechos reservados');

/** SET DEFAULT TIME ZONE */
date_default_timezone_set('Europe/Madrid');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', '');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/** ERROR REPORTING **/

// Turn off all error reporting
//error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


?>