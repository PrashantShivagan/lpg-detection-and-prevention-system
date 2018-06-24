<?php
	if(!isset($_SESSION)){
		session_start();
	}
	
	//define('DB_TYPE','mysql');
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','');
	define('DB_NAME','lpg');
	//define('DB_TABLE_PREFIX','');
	
	$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	

?>