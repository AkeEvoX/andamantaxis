<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php


class mysql{

	private $result;
	function __construct(){
		
		
		$host = 'andamantaxis.com';
		$user='andaman4_remote';
		$pass= 'kCcjcWOfw';
		$database = 'andaman4_dev';
		
		@mysql_connect($host,$user,$pass) or exit(mysql_error());
		mysql_select_db($database) or exit(mysql_error());
		mysql_query("set names utf8");

	}
	
	function query($sql)
	{
		$this->result = mysql_query($sql) or exit(mysql_error());
	}
	function numRow(){
		return mysql_num_rows($this->result);
	}
	function fetchArray()
	{
		return mysql_fetch_array($this->result);
	}
	
	function insertID(){
		return mysql_insert_id();
	}
	
	
	function __deconstruct(){
		@mysql_free_result($this->result);
		mysql_close();
	}
	
}

?>
<?php
	session_start();
	/*
	$conn = new mysql;
	$conn1 = new mysql;
	$conn2 = new mysql;
	*/
?>