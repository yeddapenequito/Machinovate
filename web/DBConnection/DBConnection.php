<?php
require "dbsettings.php";
/**
 * 
 * DB Connection Class ...
 * @author Jiyatsuki Minami
 *
 */
	
class DBConnection{
	 private $adapter;
	 private $query;
	 // Constructor
	 public function DBConnection($url = MySQL_URL, $username = MySQL_USERNAME, 
								  $password = MySQL_PASSWORD, $database = MySQL_DATABASE){
	 	$this->adapter = mysql_connect($url, $username, $password);
		$this->usedDatabase($database);
		 if(!$this->adapter)
	 		die ("Could not Connect ".mysql_error());
	 }
	 
	 public function getConnection(){
	 	return $this->adapter;
	 }
	
	 public function usedDatabase($dbname){
	 	mysql_select_db($dbname);
	 }
	 
	 public function executeSql($dml){
	 	return mysql_query($dml, $this->adapter) or die(mysql_error());
	 }
	 
	 public function close(){
	 	mysql_close($this->adapter);
	 }
	
	 public function getResultSet(){
	 	$rs = new ResultSet($this);
		return $rs;
	 }
}

class ResultSet{
	private $db; 
	public function ResultSet($dbcon){
		$this->db = $dbcon;
	}
	
	public function sqlQuery($ddl){
	 	$this->query = mysql_query($ddl, $this->db->getConnection());
	 		if(!$this->query)
	 			die("Could not get Data: ".mysql_error());
	 	return $this->query;
	}
	 
	public function getFieldName($index){
	 	return mysql_field_name($this->query, $index);
	}
	
	public function fetchArray(){
	 	return mysql_fetch_array($this->query, MYSQL_NUM);
	}
	 
	public function fetchAssoc(){
	 	return mysql_fetch_assoc($this->query);
	}
	 
	public function fetchObject(){
	 	return mysql_fetch_object($this->query);
	}
	
	public function rowCount(){
	 	return mysql_num_rows($this->query);
	}
	
	public function fieldCount(){
	 	return mysql_num_fields($this->query);
	}
	 
	public static function escapeString($paramString){
	 	return mysql_real_escape_string($paramString);
	}
}
?>