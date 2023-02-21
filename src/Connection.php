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

    // static private $db_host = "127.0.0.1";
    // static private $db_user = "jaco";
    // static private $db_pass = "1234";
    // static private $db_name = "wcg_site_web_databases";
	// 
	// private $db_host = "127.0.0.1";
    // private $db_user = "jacobit.k";
    // private $db_pass = "wcg2023!";
    // private $db_name = "wcg_site_web_databases";

	public static $pdo;

	// public static function getPDO()
	// {
	// 	if(!self::$pdo){
	// 		$pdo = new PDO("mysql:host=127.0.0.1;dbname=wcg_site_web_databases", 'jaco', '1234');
	// 		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	// 		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	// 		$pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");
	// 	}
	// 	return self:: $pdo;
	// }
	public static function getPDO()
	{
		$pdo = new PDO("mysql:host=127.0.0.1;dbname=wcg_site_web_databases", 'jaco', '1234');
		// $pdo = new PDO("mysql:host=127.0.0.1;dbname=wcg_site_web_databases", 'jacobit.k', 'wcg2023!');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");
		return $pdo;
	}
}
