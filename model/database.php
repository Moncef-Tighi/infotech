<?php

function db_connect(){

	$host = 'localhost';
	$dbname = 'projet_php_tighiouart';
	$user_name = 'root';
	$pass = '';

	try {
		$db = new PDO( "mysql:host=".$host.";dbname=".$dbname,$user_name,$pass );
		$db->exec("SET NAMES 'UTF8'");
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
//		echo "Connecter  ";
	} catch ( Exception  $e ) {
		echo "ERREUR :  " . $e->getMessage();
	}

	return $db;
}


