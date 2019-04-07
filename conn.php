<?php 
	const DB_HOST = 'mysql52.unoeuro.com';
	const DB_USER = 'snezana_dk';
	const DB_PASS = '***';
	const DB_NAME = 'snezana_dk_db';
	
  /*const DB_HOST = 'localhost';
	const DB_USER = 'root';
	const DB_PASS = 'root';
	const DB_NAME = 'cakeshopwp';*/

	$link = new mysqli( DB_HOST, DB_USER, DB_PASS ,DB_NAME );

	if ($link->connect_error) {
		die('connect error ('.$link->connect_errno.') '.$link->connect_error);
}
