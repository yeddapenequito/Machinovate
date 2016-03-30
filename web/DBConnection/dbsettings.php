<?php

	/**
	 * 
	 * MySQL Connection Stream ...
	 * @var Connection Stream
	 */

	$readIni = parse_ini_file("dbsettings.ini");

	define("MySQL_URL", $readIni["MySQLURL"]);
	define("MySQL_USERNAME", $readIni["MySQLUsername"]);
	define("MySQL_PASSWORD", $readIni["MySQLPassword"]);
	define("MySQL_DATABASE", $readIni["MySQLDatabase"]);
?>