<?php

namespace App;

use \PDO;

class Connection
{
	   /* 
     * Create variables for credentials to MySQL database
     * The variables have been declared as private. This
     * means that they will only be available with the 
     * Database class
     */
	



	// public static $pdo;

	// public static function getPDO( )
	public static function getPDO( $db_host,$db_user,$db_pass,$db_name)
	{
		// $pdo = new PDO("mysql:host=127.0.0.1;dbname=wcg_site_web_databases", 'jaco', '1234');
		$pdo = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user,$db_pass );
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");
		return $pdo;
	}


}
